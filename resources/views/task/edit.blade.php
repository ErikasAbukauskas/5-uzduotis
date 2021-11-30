@extends('layouts.app')

@section('content')
<div class="container">

    @error('start_date')
        <div class="alert alert-danger">
            {{$message}}
            {{-- <p>Pavadinimas neivestas</p> --}}
        </div>
    @enderror

    @error('end_date')
        <div class="alert alert-danger">
            {{$message}}
            {{-- <p>Pavadinimas neivestas</p> --}}
        </div>
    @enderror

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update information') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('task.update', [$task]) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="task_title" class="col-md-4 col-form-label text-md-right">{{ __('Task title') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="title" value="{{$task->title}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="task_description" class="col-md-4 col-form-label text-md-right">{{ __('Task description') }}</label>

                            {{-- jg issikraipys form-control pasalinti --}}
                            <div class="col-md-6" form-control>
                                <textarea class="summernote" name="description" cols="5" rows="5">{{$task->description}} </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start_date" class="col-md-4 col-form-label text-md-right">{{ __('Start date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{$task->start_date}}"  required autofocus>
                                @error('start_date')
                                    <span role="alert" class="invalid-feedback">
                                        <strong>*{{$message}}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('End date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{$task->end_date}}"   required autofocus>
                                @error('end_date')
                                    <span role="alert" class="invalid-feedback">
                                        <strong>*{{$message}}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control" name="logo">

                            </div>
                        </div>

                        <img src="{{$task->logo}}" alt="{{$task->logo}}" width="200">


                        <div class="form-group row">

                            <label for="task_type" class="col-md-4 col-form-label text-md-right">{{ __('Task type') }}</label>

                            <div class="col-md-6">

                                <select class ="form-control" name="type">

                                    {{-- Create blade yra atsakingas uz knygas --}}
                                    {{-- Atviazduoti kito modelio informacija: apie autorius --}}

                                    @foreach ($types as $type)
                                    <option value="{{$type->id}}" @if($type->id == $task->type_id) selected @endif> {{$type->title}}</option>
                                @endforeach

                                </select>

                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="task_owner" class="col-md-4 col-form-label text-md-right">{{ __('Task owner') }}</label>

                            <div class="col-md-6">

                                <select class ="form-control" name="owner">

                                    {{-- Create blade yra atsakingas uz knygas --}}
                                    {{-- Atviazduoti kito modelio informacija: apie autorius --}}

                                    @foreach ($owners as $owner)
                                    <option value="{{$owner->id}}" @if($owner->id == $task->owner_id) selected @endif> {{$owner->name}} {{$owner->surname}}</option>
                                @endforeach

                                </select>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Change') }}
                                </button>
                                <a class="btn btn-primary" href="{{route('task.index')}}">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.summernote').summernote();
    });
</script>
@endsection
