@props(['text'])

@if (!empty($text) || !empty($type))
    <div>
        <span class="sr-only">Notifications</span>
        <div
            {{ $attributes->merge(['class' => 'absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900']) }}>
            {{ $text }}
        </div>
    </div>
@endif
