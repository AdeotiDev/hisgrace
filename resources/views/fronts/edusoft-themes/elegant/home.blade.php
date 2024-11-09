@extends('fronts.edusoft-themes.layouts.app')

@section('title', 'HisGrace School')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/themes/elegant.css') }}"> 
@endsection


@section('content')
@include('fronts.edusoft-themes.elegant.includes.header')
@include('fronts.edusoft-themes.elegant.includes.hero')


@include('fronts.edusoft-themes.elegant.includes.page-sections')
@include('fronts.edusoft-themes.elegant.includes.footer')

@endsection