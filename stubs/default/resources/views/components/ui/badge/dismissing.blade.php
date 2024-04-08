@props(['type' => 'info', 'text'])
@php

    $item_id = time() . '-' . Str::random(25);
@endphp
@if (!empty($text) || !empty($type))
    @switch($type)
        @case('info')
            <span id="badge-{{ $item_id }}"
                class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-primary-800 bg-primary-100 rounded dark:bg-primary-900 dark:text-primary-300">
                {{$text}}
                <button type="button"
                    class="inline-flex items-center p-1 ms-2 text-sm text-primary-400 bg-transparent rounded-sm hover:bg-primary-200 hover:text-primary-900 dark:hover:bg-primary-800 dark:hover:text-primary-300"
                    data-dismiss-target="#badge-{{ $item_id }}" aria-label="Remove">
                    <x-ui.svg.outline.colse />
                </button>
            </span>
        @break

        @case('danger')
        <span id="badge-{{ $item_id }}"
                class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-danger-800 bg-danger-100 rounded dark:bg-danger-900 dark:text-danger-300">
                {{$text}}
                <button type="button"
                    class="inline-flex items-center p-1 ms-2 text-sm text-danger-400 bg-transparent rounded-sm hover:bg-danger-200 hover:text-danger-900 dark:hover:bg-danger-800 dark:hover:text-danger-300"
                    data-dismiss-target="#badge-{{ $item_id }}" aria-label="Remove">
                    <x-ui.svg.outline.colse />
                </button>
            </span>
        @break

        @case('success')
            <span id="badge-{{ $item_id }}"
            class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-success-800 bg-success-100 rounded dark:bg-success-900 dark:text-success-300">
            {{$text}}
            <button type="button"
                class="inline-flex items-center p-1 ms-2 text-sm text-success-400 bg-transparent rounded-sm hover:bg-success-200 hover:text-success-900 dark:hover:bg-success-800 dark:hover:text-success-300"
                data-dismiss-target="#badge-{{ $item_id }}" aria-label="Remove">
                <x-ui.svg.outline.colse />
            </button>
        </span>
        @break

        @case('warning')
        <span id="badge-{{ $item_id }}"
            class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-warning-800 bg-warning-100 rounded dark:bg-warning-900 dark:text-warning-300">
            {{$text}}
            <button type="button"
                class="inline-flex items-center p-1 ms-2 text-sm text-success-400 bg-transparent rounded-sm hover:bg-warning-200 hover:text-warning-900 dark:hover:bg-warning-800 dark:hover:text-warning-300"
                data-dismiss-target="#badge-{{ $item_id }}" aria-label="Remove">
                <x-ui.svg.outline.colse />
            </button>
        </span>
        @break

        @default
    @endswitch
@endif
