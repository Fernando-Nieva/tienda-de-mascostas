<div>
    <label class="block font-semibold mb-1">{{ $label ?? '' }}</label>
    <input
        type="{{ $type ?? 'text' }}"
        name="{{ $name ?? '' }}"
        @if($required ?? false) required @endif
        placeholder="{{ $placeholder ?? '' }}"
        {{ $attributes->except(['label', 'name', 'type', 'required', 'placeholder'])->merge(['class' => 'w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-500']) }}
    >
</div>