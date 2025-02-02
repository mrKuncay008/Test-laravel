@extends('master')

@section('home')
  <h4 class="mt-10">Selamat Datang <b>{{Auth::user()->name}}</b>.</h4>
@endsection