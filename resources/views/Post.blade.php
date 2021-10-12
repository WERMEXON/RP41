<title>Заявки</title>
@extends('layouts.template')
@section('website')
@foreach($post as $el)
    <a href="/post{{$el->slug}}">{{$el->title}}
   {{$el->excerpt}} </a>
@endforeach
@endsection
