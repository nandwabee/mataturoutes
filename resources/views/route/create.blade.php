@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-intro">
                    Create a new route
                </div>
                <div class="page-intro-description">
                    A new route will be created when you submit this form.
                </div>

                <form class="" action="{{route('route.store')}}" method="post">
                     <div class="form-group">
                        <label for="route_number">Number</label>
                        <input name="route_number" type="text" class="form-control" id="route_number" aria-describedby="route_number_help" placeholder="Enter route number">
                        <small id="route_number_help" class="form-text text-muted">The assigned route number.</small>
                     </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
