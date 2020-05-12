@if ($pages)
  <ul class="my-slider">
    @foreach ($pages as $key=>$page)
      <li 
        style="
          background-image: 
            linear-gradient(
              rgba(0,0,0,0.3), 
              rgba(0,0,0,0.3)
            ),
            url({!! $page['background']['url'] !!});
        "
        class="bg-no-repeat bg-cover"
      >
        <p class="text-white text-2xl font-bold">{!! $page['text'] !!}</p>
      </li>
    @endforeach
  </ul>
@endif

<script type="text/javascript">
  window.onload = (event) => {
    tns({
        container: '.my-slider',
        autoplay: true
      });
  };
</script>
