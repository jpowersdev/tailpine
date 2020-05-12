<article  class="border-2 border-gray-200 my-3 p-3">
  <header>
    <h2>
      <a href="{{ get_permalink() }}">
        @title
      </a>
    </h2>

    @includeWhen(get_post_type() === 'post', 'partials/entry-meta')
  </header>

  <div>
    @php(the_excerpt())
  </div>
</article>
