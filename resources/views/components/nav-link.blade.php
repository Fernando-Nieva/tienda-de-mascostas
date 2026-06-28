<a href="{{ $href }}" {{ $attributes->except(['href', 'icon'])->merge(['class' => 'nav-link']) }}>
    @if($icon)<i class="{{ $icon }}"></i>@endif
    {{ $slot }}
</a>