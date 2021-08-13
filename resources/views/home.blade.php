
@extends('template.main')
@section("content")
<!-- Header -->
@include('partials.section.hero') <!-- ne pas mettre en DB -->
@include('partials.section.about')
@include('partials.section.facts')
@include('partials.section.skills')
@include('partials.section.portfolio')
@include('partials.section.services')
@include('partials.section.contact')
<!-- Footer -->
@endsection
