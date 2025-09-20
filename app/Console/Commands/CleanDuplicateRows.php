<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CleanDuplicateRows extends Command
{
  protected $signature = 'categories:clean-duplicates {--dry-run : Preview changes without executing}';

  protected $description = 'Find and merge duplicate categories, reassign posts';

  public function handle(): void
  {
    $dryRun = $this->option('dry-run');

    $duplicateGroups = DB::table('categories')
      ->select('name', DB::raw('GROUP_CONCAT(id) as ids'), DB::raw('COUNT(*) as count'))
      ->groupBy('name')
      ->havingRaw('COUNT(*) > 1')
      ->get();

    if ($duplicateGroups->isEmpty()) {
      $this->info('No duplicate categories found');
      return;
    }


    $this->displayPreview($duplicateGroups);

    if ($dryRun) {
      $this->info('Dry run complete. No changes made.');
      return;
    }

    if (!$this->confirm('Do you wish to proceed with these changes?', false)) {
      $this->info('Operation cancelled');
      return;
    }

    $results = $this->processDuplicates($duplicateGroups);

    $this->info("\nOperation completed successfully.");
    $this->table(
      ['Category Name', 'Kept ID', 'Deleted ID', 'Posts Reassigned'],
      $results
    );
  }

  protected function displayPreview($duplicateGroups)
  {
    $this->info("\n=== DUPLICATE CATEGORIES FOUND ===");

    $previewData = [];
    foreach ($duplicateGroups as $group) {
      $ids = explode(',', $group->ids);
      $canonicalId = array_shift($ids);

      $affectedPots = DB::table('posts')
        ->whereIn('category_id', $ids)
        ->count();

      $previewData[] = [
        'name' => $group->name,
        'keep' => $canonicalId,
        'delete' => implode(', ', $ids),
        'posts' => $affectedPots
      ];
    }

    $this->table(
      ['Category Name', 'Keep ID', 'Delete IDs', 'Posts Affected'],
      $previewData
    );

    $this->info("\n=== SUMMARY ===");
    $this->info(sprintf(
      "Total duplicate groups: %d\nTotal categories to delete: %d\nTotal posts ro reassign: %d",

      $duplicateGroups->count(),
      $duplicateGroups->sum(fn($g) => count(explode(',', $g->ids)) - 1),
      $duplicateGroups->sum(function ($group) {
        $ids = explode(',', $group->ids);
        array_shift($ids);
        return DB::table('posts')->whereIn('category_id', $ids)->count();
      })
    ));
  }

  protected function processDuplicates($duplicateGroups)
  {
    $results = [];

    DB::transaction(function () use ($duplicateGroups, &$results) {
      foreach ($duplicateGroups as $group) {
        $ids = explode(',', $group->ids);
        $canonicalIds = array_shift($ids);

        $reassigned = DB::table('posts')
          ->whereIn('category_id', $ids)
          ->update(['category_id' => $canonicalIds]);

        $deleted = DB::table('categories')
          ->whereIn('id', $ids)
          ->delete();

        $results[] = [
          $group->name,
          $canonicalIds,
          implode(',', $ids),
          $reassigned
        ];
      }
    });

    return $results;
  }
}
