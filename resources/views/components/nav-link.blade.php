<a href="{{ $href }}" {{ $attributes->merge(['class' => 'nav-link']) }}>
    @if($icon)<i class="{{ $icon }}"></i>@endif
    {{ $slot }}
</a>