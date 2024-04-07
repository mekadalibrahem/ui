@props(['type' => 'info', 'message'])

@if (!empty($message) || !empty($type))
    @switch($type)
        @case('info')
            <div role="alert"
                {{ $attributes->merge(['class' => '  flex items-center gap-1   p-4 mb-4 text-sm text-primary-800 rounded-lg bg-primary-100 dark:bg-gray-800 dark:text-primary-400']) }}>
                <x-ui.svg.solid.circle-info/>
                {{ $message }}
            </div>
        @break

        @case('danger')
            <div role="alert"
                {{ $attributes->merge(['class' => '  flex items-center gap-1 p-4 mb-4 text-sm text-danger-800 rounded-lg bg-danger-50 dark:bg-gray-800 dark:text-danger-400']) }}>
                <x-ui.svg.solid.circle-info/>
                 {{ $message }}
            </div>
        @break

        @case('success')
            <div role="alert"
                {{ $attributes->merge(['class' => '   flex items-center gap-1 p-4 mb-4 text-sm text-sucsses-800 rounded-lg bg-sucsses-50 dark:bg-gray-800 dark:text-sucsses-400']) }}>
                <x-ui.svg.solid.circle-info/>
                {{ $message }}
            </div>
        @break

        @case('warning')
            <div role="alert"
                {{ $attributes->merge(['class' => '  flex items-center gap-1 p-4 mb-4 text-sm text-warning-800 rounded-lg bg-warning-50 dark:bg-gray-800 dark:text-warning-300']) }}>
                <x-ui.svg.solid.circle-info/>
                {{ $message }}
            </div>
        @break

        @default
    @endswitch
@endif
