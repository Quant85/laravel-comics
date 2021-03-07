@extends('layouts.template')

@section('head')
    @include('guests.common.head', ['title'=>'Laravel DC Comics', 'page'=>'Home'])
@endsection

@section('navbar')
  @include('guests.home.navbar_top')
@endsection

@section('header')
  @include('guests.home.header')
@endsection

@section('main')
  @include('guests.home.main')
@endsection

@section('footer')
  @include('guests.common.footer')
@endsection