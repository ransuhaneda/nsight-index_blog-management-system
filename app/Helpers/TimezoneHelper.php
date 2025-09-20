<?php
namespace App\Helpers;

use DateTimeZone;

class TimezoneHelper
{
  public static function getTimeZone(): array
  {
    $timezones = DateTimeZone::listIdentifiers();
    $formattedTimezones = [];

    foreach ($timezones as $timezone) {
      $parts = explode('/', $timezone);

      if (count($parts) > 1) {
        $region = $parts[0];
        $city = $parts[1];
        if (isset($parts[2])) {
          $city .= ' - ' . $parts[2];
        }
        $formattedTimezones[$region][$timezone] = $city;
      } else {
        $formattedTimezones['Other'][$timezone] = $timezone;
      }
    }

    ksort($formattedTimezones);
    return $formattedTimezones;
  }
}