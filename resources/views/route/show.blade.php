@extends('layouts.app')

@section('body_classes')route @endsection

@section('page_title')
{{$route->route_number}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                {{$route->route_number}}
            </div>
            <div class="col-8">
                This is the right part of the route page
            </div>
        </div>
    </div>
@endsection
