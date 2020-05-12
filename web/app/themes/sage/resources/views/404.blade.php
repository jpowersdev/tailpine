@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    @component('components.alert')
      @slot('title')
          Hello
      @endslot  
      {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
    @endcomponent
    <x-alert type="warning">
    </x-alert>

    {!! get_search_form(false) !!}
  @endif
@endsection
