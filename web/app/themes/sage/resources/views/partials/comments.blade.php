@if (! comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
  <x-alert type="warning">
    {!! __('Comments are closed.', 'sage') !!}
  </x-alert>
@endif