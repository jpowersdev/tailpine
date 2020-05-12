<div class="flex items-center justify-between flex-wrap bg-secondary p-6 relative z-10">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <a class="font-semibold text-xl tracking-tight" href="{{ home_url('/') }}">
      {{ $siteName }}
    </a>
  </div>

  <div class="block md:hidden">
    <button 
      x-on:click="mobileNav = !mobileNav" 
      class="flex items-center px-3 py-2 border rounded text-white border-white hover:bg-white hover:text-secondary hover:border-secondary"
    >
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
      </svg>
    </button>
  </div>

  <nav 
    aria-label="primary"
    class="hidden md:flex"
  >

    @if ($navigation)
      <ul class="my-menu">
        @foreach ($navigation as $item)
          <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
            <a href="{{ $item->url }}">
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
  </nav>

</div>