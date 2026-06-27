@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "btn $variant px-4 py-2 rounded-lg transition inline-flex items-center gap-2"]) }}>
        @if($icon)<i class="{{ $icon }}"></i>@endif
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => "btn $variant px-4 py-2 rounded-lg transition inline-flex items-center gap-2"]) }}>
        @if($icon)<i class="{{ $icon }}"></i>@endif
        {{ $slot }}
    </button>
@endif