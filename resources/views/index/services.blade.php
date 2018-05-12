@extends('layouts.layout')

@section('content')

    @include('includes.header2')

    @include('blocks.service_top')

    @include('blocks.social')

@endsection
@section('script')

    @parent
    <script src="js/services.js"></script>

@endsection
