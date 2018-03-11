@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-tasks">
                    <thead>
                        <tr>
                            <td></td>
                            <td colspan="2"><a href="{{ route('tasks.create') }}" class="btn btn-default btn-none">I want to ...</a></td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $tasks as $task )
                        <tr>
                            <td>
                                {{ Form::open() }}
                                <input type="checkbox" name="item" id="item_{{ $task->id }}"
                                       {{ $task->done ? 'checked' : '' }}
                                       onclick="this.form.submit()">
                                <input type="hidden" name="item_id" value="{{ $task->id }}">
                                {{ Form::close() }}
                            </td>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>
                                <a href="{{ route('tasks.show', $task->id) }}">
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                </a>

                                <a href="{{ route('tasks.edit', $task->id) }}">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>

                                {{--<a href="#">--}}
                                    {{--<i class="glyphicon glyphicon-remove"></i>--}}
                                {{--</a>--}}

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection