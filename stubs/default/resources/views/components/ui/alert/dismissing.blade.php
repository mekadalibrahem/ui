@props(['type' => 'info', 'message'])
@php

    $item_id = time() . '-' . Str::random(25);
@endphp
@if (!empty($message) || !empty($type))
    @switch($type)
        @case('info')
            <div role="alert" id="alert-info-{{ $item_id }}"
                {{ $attributes->merge(['class' => 'flex items-center p-4 mb-4 text-sm text-primary-800 rounded-lg bg-primary-100 dark:bg-gray-800 dark:text-primary-400']) }}>

                {{ $message }}
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-info-{{ $item_id }}" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @break

        @case('danger')
            <div role="alert" id="alert-danger-{{ $item_id }}"
                {{ $attributes->merge(['class' => 'flex items-center p-4 mb-4 text-sm text-danger-800 rounded-lg bg-danger-50 dark:bg-gray-800 dark:text-danger-400']) }}>

                {{ $message }}
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-danger-{{ $item_id }}" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @break

        @case('success')
            <div role="alert" id="alert-success-{{ $item_id }}"
                {{ $attributes->merge(['class' => ' flex items-center p-4 mb-4 text-sm text-sucsses-800 rounded-lg bg-sucsses-50 dark:bg-gray-800 dark:text-sucsses-400']) }}>

                {{ $message }}
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-success-{{ $item_id }}" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @break

        @case('warning')
            <div role="alert" id="alert-warning-{{ $item_id }}"
                {{ $attributes->merge(['class' => 'flex items-center p-4 mb-4 text-sm text-warning-800 rounded-lg bg-warning-50 dark:bg-gray-800 dark:text-warning-300']) }}>

                {{ $message }}
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-warning-{{ $item_id }}" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @break

        @default
    @endswitch
@endif
