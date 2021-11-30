@extends('layouts.app')

@section('content')


    <div class="container">


        <table class="table table-striped">

            <a class="btn btn-primary" href="{{route('owner.create')}}">Create new owner</a>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>

            @foreach ($owners as $owner)

                <tr>
                    <td> {{$owner->id}} </td>
                    <td> {{$owner->name}} </td>
                    <td> {{$owner->surname}} </td>
                    <td> {{$owner->email}} </td>
                    <td> {{$owner->phone}} </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>

                            <div class="dropdown-menu">
                              <a class="btn btn-primary" href="{{route('owner.edit', [$owner])}}">Edit</a>
                              <a class="btn btn-primary" href="{{route('owner.show', [$owner])}}">Show</a>
                                <form method="POST" action="{{route('owner.destroy', [$owner])}}">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>

                </tr>

            @endforeach

        </table>

        <strong>Iš viso: {{$record}} įrašų </strong>
    </div>
@endsection
