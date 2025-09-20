@if ($paginator->hasPages())
  <nav
    role="navigation"
    aria-label="Pagination Navigation"
    class="d-flex align-items-center justify-content-between"
  >
    <div class="d-flex flex-fill justify-content-between d-md-none">
      @if ($paginator->onFirstPage())
        <span
          class="position-relative d-inline-flex align-items-center border-secondary small fw-medium text-body-secondary cursor-default rounded border bg-white px-4 py-2"
        >
          {!! __('pagination.previous') !!}
        </span>
      @else
        <a
          href="{{ $paginator->previousPageUrl() }}"
          class="position-relative d-inline-flex text-decoration-none align-items-center border-secondary small fw-medium text-body focus:border-secondary active:bg-light active:text-body rounded border bg-white px-4 py-2 transition focus:outline-0 focus:ring"
        >
          {!! __('pagination.previous') !!}
        </a>
      @endif

      @if ($paginator->hasMorePages())
        <a
          href="{{ $paginator->nextPageUrl() }}"
          class="position-relative d-inline-flex text-decoration-none align-items-center border-secondary small fw-medium text-body focus:border-secondary active:bg-light active:text-body rounded border bg-white px-4 py-2 transition focus:outline-0 focus:ring"
        >
          {!! __('pagination.next') !!}
        </a>
      @else
        <span
          class="position-relative d-inline-flex align-items-center border-secondary small fw-medium text-body-secondary cursor-default rounded border bg-white px-4 py-2"
        >
          {!! __('pagination.next') !!}
        </span>
      @endif
    </div>

    <div
      class="d-none d-md-flex flex-fill align-items-center justify-content-between"
    >
      <div>
        <p class="small text-body m-0">
          {!! __('Showing') !!}
          @if ($paginator->firstItem())
            <span class="fw-medium">
              {{ $paginator->firstItem() }}
            </span>
            {!! __('to') !!}
            <span class="fw-medium">
              {{ $paginator->lastItem() }}
            </span>
          @else
            {{ $paginator->count() }}
          @endif
          {!! __('of') !!}
          <span class="fw-medium">{{ $paginator->total() }}</span>
          {!! __('results') !!}
        </p>
      </div>

      <div>
        <span class="position-relative d-inline-flex z-0 rounded-md shadow-sm">
          {{-- Previous Page Link --}}

          @if ($paginator->onFirstPage())
            <span
              aria-disabled="true"
              aria-label="{{ __('pagination.previous') }}"
            >
              <span
                class="position-relative d-inline-flex align-items-center rounded-start border-secondary small fw-medium text-body-secondary cursor-default border bg-white px-2 py-2"
                aria-hidden="true"
              >
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"
                  />
                </svg>
              </span>
            </span>
          @else
            <a
              href="{{ $paginator->previousPageUrl() }}"
              rel="prev"
              class="position-relative d-inline-flex text-decoration-none align-items-center rounded-start border-secondary small fw-medium text-body-secondary focus:border-secondary active:bg-light active:text-body-secondary border bg-white px-2 py-2 transition focus:z-10 focus:outline-0 focus:ring"
              aria-label="{{ __('pagination.previous') }}"
            >
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          @endif

          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
              <span aria-disabled="true">
                <span
                  class="position-relative ms-n1 d-inline-flex align-items-center border-secondary small fw-medium text-body cursor-default border bg-white px-4 py-2"
                >
                  {{ $element }}
                </span>
              </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
              @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                  <span aria-current="page">
                    <span
                      class="position-relative ms-n1 d-inline-flex align-items-center border-secondary small fw-medium text-body-secondary cursor-default border bg-white px-4 py-2"
                    >
                      {{ $page }}
                    </span>
                  </span>
                @else
                  <a
                    href="{{ $url }}"
                    class="position-relative ms-n1 d-inline-flex text-decoration-none align-items-center border-secondary small fw-medium text-body focus:border-secondary active:bg-light active:text-body border bg-white px-4 py-2 transition focus:z-10 focus:outline-0 focus:ring"
                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}"
                  >
                    {{ $page }}
                  </a>
                @endif
              @endforeach
            @endif
          @endforeach

          {{-- Next Page Link --}}

          @if ($paginator->hasMorePages())
            <a
              href="{{ $paginator->nextPageUrl() }}"
              rel="next"
              class="position-relative ms-n1 d-inline-flex align-items-center text-decoration-none rounded-end border-secondary small fw-medium text-body-secondary focus:border-secondary active:bg-light active:text-body-secondary border bg-white px-2 py-2 transition focus:z-10 focus:outline-0 focus:ring"
              aria-label="{{ __('pagination.next') }}"
            >
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          @else
            <span
              aria-disabled="true"
              aria-label="{{ __('pagination.next') }}"
            >
              <span
                class="position-relative ms-n1 d-inline-flex align-items-center rounded-end border-secondary small fw-medium text-body-secondary cursor-default border bg-white px-2 py-2"
                aria-hidden="true"
              >
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                  />
                </svg>
              </span>
            </span>
          @endif
        </span>
      </div>
    </div>
  </nav>
@endif
