<div class="fixed top left w-1/1 bg-white z-10">
    <nav aria-label="Main navigation" class="container d-flex justify-between">
        <a href="{{ get_home_url() }}" aria-label="Back to homepage">
            {{ get_bloginfo('name') }}
        </a>

        <ul role="menubar" aria-label="Main navigation" class="d-flex list-unstyled">
            @simplemenu('primary' as $item)
                <li role="none" class="@unless($loop->last) mr-16 @endunless">
                    <a href="{{ $item->url }}" class="{{ $item->is_active ? 'font-bold' : '' }}" role="menuitem">
                        {{ $item->text }}
                    </a>

                    @if(!empty($item->children))
                        <ul role="menu" aria-label="Submenu for {{ $item->text }}">
                            @foreach($item->children as $child)
                                <li role="none">
                                    <a href="{{ $child->url }}" class="{{ $child->is_active ? 'font-bold' : '' }}" role="menuitem">
                                        {{ $child->text }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endsimplemenu
        </ul>
    </nav>
</div>
