@extends('layouts.app')

@section('content')

<div class="container">

    @error('title')
        <div class="alert alert-danger">
            {{$message}}
            {{-- <p>Pavadinimas neivestas</p> --}}
        </div>
    @enderror

    @error('description')
        <div class="alert alert-danger">
            {{$message}}
            {{-- <p>Pavadinimas neivestas</p> --}}
        </div>
    @enderror

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

    @error('logo')
        <div class="alert alert-danger">
            {{$message}}
            {{-- <p>Pavadinimas neivestas</p> --}}
        </div>
    @enderror

    @error('type')
        <div class="alert alert-danger">
            {{$message}}
            {{-- <p>Pavadinimas neivestas</p> --}}
        </div>
    @enderror

    @error('owner')
        <div class="alert alert-danger">
            {{$message}}
            {{-- <p>Pavadinimas neivestas</p> --}}
        </div>
    @enderror

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create task') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('task.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="task_title" class="col-md-4 col-form-label text-md-right">{{ __('Task title') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title"  autofocus>
                                @error('title')
                                    <span role="alert" class="invalid-feedback">
                                        <strong>*{{$message}}</strong>
                                    </span>

                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="task_description" class="col-md-4 col-form-label text-md-right">{{ __('Task description') }}</label>

                            {{-- jg issikraipys form-control pasalinti --}}
                            <div class="col-md-6" form-control>
                                <textarea class="summernote @error('description') is-invalid @enderror" name="description" cols="5" rows="5"> </textarea>

                                @error('description')
                                    <span role="alert" class="invalid-feedback">
                                        <strong>*{{$message}}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start_date" class="col-md-4 col-form-label text-md-right">{{ __('Start date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date"  autofocus>

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
                                <input id="name" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date"  autofocus>

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
                                <input id="name" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">

                                @error('logo')
                                    <span role="alert" class="invalid-feedback">
                                        <strong>*{{$message}}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="task_type" class="col-md-4 col-form-label text-md-right">{{ __('Task type') }}</label>

                            <div class="col-md-6">

                                <select class ="form-control @error('type') is-invalid @enderror" name="type">
                                    <option value="">Pasirinkite tipą</option>

                                    {{-- Create blade yra atsakingas uz knygas --}}
                                    {{-- Atviazduoti kito modelio informacija: apie autorius --}}

                                    @foreach ($types as $type)
                                    <option value="{{$type->id}}"> {{$type->title}}</option>
                                @endforeach

                                </select>

                                @error('type')
                                    <span role="alert" class="invalid-feedback">
                                        <strong>*{{$message}}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="task_owner" class="col-md-4 col-form-label text-md-right">{{ __('Task owner') }}</label>

                            <div class="col-md-6">

                                <select class ="form-control @error('owner') is-invalid @enderror" name="owner">

                                    <option value="">Visi</option>

                                    {{-- Create blade yra atsakingas uz knygas --}}
                                    {{-- Atviazduoti kito modelio informacija: apie autorius --}}

                                    @foreach ($owners as $owner)
                                        <option value="{{$owner->id}}"> {{$owner->name}} {{$owner->surname}}</option>
                                    @endforeach

                                </select>

                                @error('owner')
                                    <span role="alert" class="invalid-feedback">
                                        <strong>*{{$message}}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
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
