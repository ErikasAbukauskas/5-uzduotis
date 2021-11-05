@extends('layouts.app')

@section('content')


    <div class="container">
        <form action="{{route('type.search')}}" method="GET">
            @csrf
            <input type="text" name="search" placeholder="Enter search key" />
            <button class="btn btn-primary" type="submit">Search</button> <a class="btn btn-primary" href="{{route('type.index')}}">Clear</a>

        </form>

        <table class="table table-striped">


            <tr>
                <th>@sortablelink('id', 'ID')</th>
                <th>@sortablelink('title', 'Title')</th>
                <th>@sortablelink('description', 'Description')</th>
                <th>@sortablelink('action', 'Action')</th>

            </tr>

            <a class="btn btn-primary" href="{{route('type.create')}}">Create new type</a>


            @foreach ($types as $type)

                <tr>
                    <td> {{$type->id}} </td>
                    <td> {{$type->title}} </td>
                    <td> {!!$type->description!!} </td>

                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                              <a class="btn btn-primary" href="{{route('type.edit', [$type])}}">Edit</a>
                              <a class="btn btn-primary" href="{{route('type.show', [$type])}}">Show</a>
                              <form method="POST" action="{{route('type.destroy', [$type])}}">
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                          </div>
                    </td>

                </tr>

            @endforeach

        </table>
        {!! $types->appends(Request::except('page'))->render() !!}
    </div>
@endsection

