<header 
  x-data="{ show: true }" 
  class="flex items-center justify-between flex-wrap bg-secondary p-6 relative"
>
  <div class="flex items-center flex-shrink-0 text-primary mr-6">
    <a class="ont-semibold text-xl tracking-tight" href="{{ home_url('/') }}">
      {{ $siteName }}
    </a>
  </div>

  <div class="block lg:hidden">
    <button 
      x-on:click="show = !show" 
      class="flex items-center px-3 py-2 border rounded text-white border-white hover:bg-white hover:text-secondary hover:border-secondary"
    >
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
      </svg>
    </button>
  </div>

    <nav 
      :class="{ 'hidden': !show }" 
      :class="{ 'flex': show }"
      class="
      absolute bottom-0 left-0 right-0 -mb-6 bg-primary
      lg:flex
      "
    >
      @if (has_nav_menu('primary_navigation'))
        {!! 
          wp_nav_menu(
            [
              'theme_location' => 'primary_navigation', 
              'menu_class' => 'nav', 
              'echo' => false
            ]
          ) 
        !!}
      @endif
    </nav>
</header>
