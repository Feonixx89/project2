@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <h3>My tasks</h3>
            <a href="/tasks/create" class="btn btn-success">Create</a>
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Actions</td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>My title</td>
                        <td>
                            <a href="#">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </a>

                            <a href="#">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>

                            <a href="#">
                                <i class="glyphicon glyphicon-remove"></i>
                            </a>

                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    @endsection