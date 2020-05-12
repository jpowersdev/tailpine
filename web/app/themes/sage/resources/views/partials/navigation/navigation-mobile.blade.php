<nav 
  aria-label="mobile"
  class="
    block lg:hidden
    fixed
    left-0
    right-0
    mr-8
    top-0
    bottom-0
    bg-primary
    w-screen
    h-screen
    overflow-y-scroll
    z-50
  "
  x-show="mobileNav"
  x-transition:enter="transition ease-out duration-300"
  x-transition:enter-start="transform -translate-x-full"
  x-transition:enter-end="transform translate-x-0"
  x-transition:leave="transition ease-out duration-300"
  x-transition:leave-start="transform translate-x-0"
  x-transition:leave-end="transform -translate-x-full"
>
  <div class="sticky top-0 w-screen p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <a class="font-semibold text-xl tracking-tight" href="{{ home_url('/') }}">
        {{ $siteName }}
      </a>
    </div>
    <button 
      x-on:click="mobileNav = !mobileNav" 
      class="
        flex items-center px-3 py-2 border rounded text-white border-white 
        absolute right-0 top-0 mr-6 mt-6
        hover:bg-white hover:text-secondary hover:border-secondary
      "
    >
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Close Menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
      </svg>
    </button>
  </div>
    
  <div class="p-6 text-white font-bold text-4xl">
    @if ($navigation)
      <ul class="my-menu">
        @foreach ($navigation as $item)
          <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
            <a class="hover:underline" href="{{ $item->url }}">
              {{ $item->label }}
            </a>

            @if ($item->children)
              <ul class="my-child-menu">
                @foreach ($item->children as $child)
                  <li class="my-child-item {{ $item->classes ?? '' }} {{ $child->active ? 'active' : '' }}">
                    <a href="{{ $child->url }}">
                      {{ $child->label }}
                    </a>
                  </li>
                @endforeach
              </ul>
            @endif
          </li>
        @endforeach
      </ul>
    @endif
  </div>  
</nav>