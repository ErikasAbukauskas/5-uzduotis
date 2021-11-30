@extends('layouts.app')

@section('content')

<div class="container">

    <table class="table table-striped">
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Start_date</th>
        <th>End_date</th>
        <th>Logo</th>
        <th>Task type</th>
        <th>Task type description</th>
        <th>Owner name</th>

        <tr>
            <td><strong>{{$task->id}}</strong></td>
            <td><strong>{{$task->title}}</strong></td>
            <td><p><strong>{!!$task->description!!}</strong></p></td>
            <td><p><strong>{{$task->start_date}}</strong></p></td>
            <td><p><strong>{{$task->end_date}}</strong></p></td>
            <td><p><strong>{{$task->logo}}</strong></p></td>
            <td><p><strong>{{$task->taskType->title}}</strong></p></td>
            <td><p><strong>{{$task->taskType->description}}</strong></p></td>
            <td><p><strong>{{$task->taskOwner->name}} {{$task->taskOwner->surname}}</strong></p></td>
        </tr>

    </table>

    <a class="btn btn-primary" href="{{route('task.index')}}">Back</a>

</div>

@endsection

