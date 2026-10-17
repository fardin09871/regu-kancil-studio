@extends('layouts.app')
@section('title', 'Home')

@section('content')
  @include('sections.hero')
  @include('sections.clients')

  {{-- section berikutnya ditambahkan di sini --}}

@include('sections.faq')
@include('sections.contact')
@endsection