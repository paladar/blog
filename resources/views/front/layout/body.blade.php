@extends('layout.main')

@section('body')
@include('front.layout.partials.header')
<div class="content">
    @yield('content')
</div>
@endsection