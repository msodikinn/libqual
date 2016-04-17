@extends('master')
@section('title', 'Kalimat Motivasi')
@section('body')
<p>
<h1>Asli</h1>
tes aja</p>

@include('partials._footer', ['user'=>Auth::user()])
@stop