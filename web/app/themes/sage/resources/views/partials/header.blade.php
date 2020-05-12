<header 
  x-data="{ mobileNav: false }" 
  x-init="
    $watch('mobileNav', (mobileNav) => {
      if (mobileNav) { document.body.classList.add('overflow-y-hidden'); }
      else { document.body.classList.remove('overflow-y-hidden'); }
    }
  )" 
  class="top-0 sticky"
>
  @include('partials.navigation.navigation')
  @include('partials.navigation.navigation-mobile')
</header>
