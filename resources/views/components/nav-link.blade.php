<a href="{{ $href ?? '#' }}" {{ $attributes->except(['href', 'icon'])->merge(['class' => 'nav-link']) }}>
    @if($icon ?? false)<i class="{{ $icon }}"></i>@endif
    {{ $slot }}
</a>