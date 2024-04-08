@props(['type' => 'info', 'text'])

@if (!empty($text) || !empty($type))
    @switch($type)
        @case('default')
            <span
            {{ $attributes->merge(['class' => "bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300"])}}>
            {{$text}}
        </span>
        @break

        @case('dark')
            <span
            {{ $attributes->merge(['class' => "bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300"])}}>{{$text}}</span>
        @break

        @case('danger')
            <span
            {{ $attributes->merge(['class' => "bg-danger-100 text-danger-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-danger-900 dark:text-danger-300"])}}>{{$text}}</span>
        @break

        @case('success')
            <span
            {{ $attributes->merge(['class' => "bg-success-100 text-success-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-success-900 dark:text-success-300"])}}>{{$text}}</span>
        @break

        @case('warning')
            <span
            {{ $attributes->merge(['class' => "bg-warning-100 text-warning-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-warning-900 dark:text-warning-300"])}}>{{$text}}</span>
        @break

        @default
    @endswitch
@endif

