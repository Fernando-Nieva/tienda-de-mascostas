@if($href ?? false)
    <a href="{{ $href }}" {{ $attributes->except(['href', 'icon', 'variant'])->merge(['class' => "btn " . ($variant ?? '') . " px-4 py-2 rounded-lg transition inline-flex items-center gap-2"]) }}>
        @if($icon ?? false)<i class="{{ $icon }}"></i>@endif
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->except(['href', 'icon', 'variant'])->merge(['class' => "btn " . ($variant ?? '') . " px-4 py-2 rounded-lg transition inline-flex items-center gap-2"]) }}>
        @if($icon ?? false)<i class="{{ $icon }}"></i>@endif
        {{ $slot }}
    </button>
@endif