@extends('layouts.template')

@section('head')
    @include('guests.common.head', ['title'=>'Laravel DC Comics', 'page'=>'{{$comics->title}} #{{$comics->volume}}'])
@endsection

@section('navbar')
  @include('guests.home.navbar_top')
@endsection

@section('header')
  @include('guests.home.show.header')
@endsection

@section('main')
  @include('guests.home.show.main')
@endsection

@section('footer')
  @include('guests.common.footer')
@endsection