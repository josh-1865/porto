@aware(['page'])
@props([
    'module_title' => null,
    'module_subtitle' => null,
    'button_header' => null,
    'icon' => 'arrow-forward-sharp',
])

<section {{ $attributes->merge(['class' => 'w-full antialiased']) }}>
    <div class="{{ $module_title ? 'py-16' : 'py-8' }} mx-auto max-w-7xl px-8 md:px-12 lg:px-16">
        @if ($module_title)
            <div class="{{ $button_header ? 'flex justify-between items-center flex-initial' : '' }}">
                <p class="header-title">{{ $module_title }}</p>
                <span class="pt-8 md:pt-12 lg:pt-16">
                    @if ($button_header)
                        <x-ui.button-alt :$icon>
                            {{ $button_header }}
                        </x-ui.button-alt>
                    @endif
                </span>
            </div>
        @endif
        @if ($module_subtitle)
            <div class="subtitle mx-auto mt-4 max-w-3xl text-center text-lg">
                {{ $module_subtitle }}
            </div>
        @endif
        <div class="section-container" id="app-container">
            {{ $slot }}
        </div>
    </div>
</section>
