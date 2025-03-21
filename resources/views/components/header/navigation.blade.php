{{--

Component: Navigation
----------------------------------------------------------------
This component is responsible for rendering the navigation for the website.
-------------------------------------------------------------------
Data:
App\View\Components\Header\Section.php

--}}

@props(['navigation' => null, 'is_menu_highlighted' => null])

<nav class="navigation absolute z-50 min-w-36 items-center rounded-md border border-secondary-500 border-opacity-15 bg-white p-4 dark:border-opacity-20 dark:bg-secondary-800 lg:flex lg:w-auto lg:flex-wrap lg:rounded-none lg:border-none lg:bg-transparent lg:p-0 lg:shadow-none dark:lg:bg-transparent"
    id="navigation-header">
    @if ($navigation)
        @foreach ($navigation as $index => $key)
            @if ($key['is_active'])
                <x-ui.nav-link :$is_menu_highlighted :text="$key['name']" :href="$key['url']" :target="$key['target']" />
            @endif
        @endforeach
    @endif
</nav>
