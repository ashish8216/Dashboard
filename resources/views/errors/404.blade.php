@extends('errors::illustrated-layout')

@section('code', '404')

@section('title', __('Page Not Found'))

@section('image')

<div style="background-image: url('{{url('404/50342131_386035298869950_6541945626643398656_n.jpg')}}');" class="absolute pin bg-no-repeat md:bg-left lg:bg-center">
</div>

@endsection

@section('message', __('Sorry, the page you are looking for could not be found.'))