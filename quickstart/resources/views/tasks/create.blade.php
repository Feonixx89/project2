@extends('layout')

@section('content')

    <div class="container">
        <h3>Create task</h3>

        @include('errors')

        <div class="row">
            <div class="col-md-12">

                {!! Form ::open(['route' => ['tasks.store']]) !!}

                <div class="form-group">
                    <input type="text" class="form-control" name="title">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    <br>
                    <button class="btn btn-succes">Submit</button>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection