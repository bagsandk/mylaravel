@extends('layout.layout')
@section('title',$title)
@section('sidebar')
@parent
PHP
@endsection
@section('content')
<p>{{ $konten }}</p>
@stop