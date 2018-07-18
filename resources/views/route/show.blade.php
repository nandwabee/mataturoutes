@extends('layouts.app')

@section('body_classes')route @endsection

@section('page_title')
{{$route->route_number}}
@endsection

@section('scripts')
    @if (auth()->check())
        @if (auth()->user()->admin)
            <script type="text/javascript" src="{{ asset('js/routes/editor.js') }}"></script>
        @endif
    @endif
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="route_number">
                    {{$route->route_number}}
                </div>
            </div>
            <div class="col-8">
                @if (auth()->check())
                    @if (auth()->user()->admin)
                        <div class="" id="route_editor">
                            <routeeditor route_id="{{$route->id}}"></routeeditor>
                        </div>                        
                    @endif
                @endif
                <div class="routemap">
                    This is a placeholder for the map
                </div>
                This is the right part of the route page
            </div>
        </div>
    </div>
@endsection
