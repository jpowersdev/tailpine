@include('partials.header')

<div class="min-h-screen">

  <main class="p-6">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar p-6">
      @yield('sidebar')
    </aside>
  @endif
</div>

@include('partials.footer')
