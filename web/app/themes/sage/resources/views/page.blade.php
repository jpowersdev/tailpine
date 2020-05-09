@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @includeFirst(['partials.content.content-page', 'partials.content.content'])
  @endwhile
@endsection
