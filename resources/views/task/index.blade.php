@extends('layouts.app')

@section('content')


    <div class="container">

        <table class="table table-striped">


            <tr>
                <th>@sortablelink('id', 'ID')</th>
                <th>@sortablelink('title', 'Title')</th>
                <th>@sortablelink('description', 'Description')</th>
                <th>@sortablelink('start_date', 'Start date')</th>
                <th>@sortablelink('end_date', 'End date')</th>
                <th>@sortablelink('logo', 'Logo')</th>
                <th>@sortablelink('type_id', 'Type')</th>
                <th>@sortablelink('Action', 'Action')</th>
            </tr>

            <a class="btn btn-primary" href="{{route('task.create')}}">Create new task</a>

            <div class="change" class="col-md-6">

                <form action="{{route('task.index')}}" method="GET">
                    @csrf

                    <select class ="form-control" name="type_id">

                        @foreach ($types as $type)
                            <option value="{{$type->id}}"> {{$type->title}}</option>
                        @endforeach

                    </select>

                    <button class="btn btn-primary" type="submit">Filter</button>
                    <a class="btn btn-primary" href="{{route('task.index')}}">Clear</a>

                </form>
            </div>



            @foreach ($tasks as $task)

                <tr>
                    <td> {{$task->id}} </td>
                    <td> {{$task->title}} </td>
                    <td> {!!$task->description!!} </td>
                    <td> {{$task->start_date}} </td>
                    <td> {{$task->end_date}} </td>
                    <td> {{$task->logo}} </td>
                    <td> {{$task->taskType->title}}</td>

                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>

                            <div class="dropdown-menu">
                              <a class="btn btn-primary" href="{{route('task.edit', [$task])}}">Edit</a>
                              <a class="btn btn-primary" href="{{route('task.show', [$task])}}">Show</a>
                                <form method="POST" action="{{route('task.destroy', [$task])}}">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>

                </tr>

            @endforeach

        </table>
        {!! $tasks->appends(Request::except('page'))->render() !!}
    </div>
@endsection
