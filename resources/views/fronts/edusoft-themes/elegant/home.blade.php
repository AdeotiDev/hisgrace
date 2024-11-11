@extends('fronts.edusoft-themes.layouts.app')

@php
    $school_name = $schoolDetails['school_name'];
@endphp

@section('title', $school_name)
@section('styles')
<link rel="stylesheet" href="{{ asset('css/themes/elegant.css') }}"> 
@endsection


@section('content')
@include('fronts.edusoft-themes.elegant.includes.header')
@include('fronts.edusoft-themes.elegant.includes.hero')


@include('fronts.edusoft-themes.elegant.includes.page-sections')
@include('fronts.edusoft-themes.elegant.includes.footer')

@endsection