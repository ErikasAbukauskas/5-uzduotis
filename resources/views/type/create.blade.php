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




    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create type') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('type.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="type_title" class="col-md-4 col-form-label text-md-right">{{ __('Type title') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" autofocus>

                                @error('title')
                                    <span role="alert" class="invalid-feedback">
                                        <strong>*{{$message}}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type_description" class="col-md-4 col-form-label text-md-right">{{ __('Type description') }}</label>

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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                                <a class="btn btn-primary" href="{{route('type.index')}}">Back</a>
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
