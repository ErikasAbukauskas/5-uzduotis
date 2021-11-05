@extends('layouts.app')

@section('content')

<div class="container">

    <table class="table table-striped">
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>

        <tr>
            <td><strong>{{$type->id}}</strong></td>
            <td><strong>{{$type->title}}</strong></td>
            <td><p><strong>{!!$type->description!!}</strong></p></td>

            <td>
                <a class="btn btn-primary" href="{{route('type.edit', [$type])}}">Edit</a>
            </td>

        </tr>

    </table>

    <a class="btn btn-primary" href="{{route('type.index')}}">Back</a>

</div>

@endsection

