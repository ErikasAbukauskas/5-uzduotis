@extends('layouts.app')

@section('content')

<div class="container">

    <table class="table table-striped">
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Phone</th>

        <tr>
            <td><strong>{{$owner->id}}</strong></td>
            <td><strong>{{$owner->name}}</strong></td>
            <td><p><strong>{{$owner->surname}}</strong></p></td>
            <td><p><strong>{{$owner->email}}</strong></p></td>
            <td><p><strong>{{$owner->phone}}</strong></p></td>

        </tr>

    </table>

    <a class="btn btn-primary" href="{{route('owner.index')}}">Back</a>

</div>

@endsection

