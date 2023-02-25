@extends('layouts.sitelayout')

@section('content')
    @include('site.sections.about')
    @include('site.sections.resume')
    @include('site.sections.services')
    @include('site.sections.portfolio')
    @include('site.sections.contact')
@endsection