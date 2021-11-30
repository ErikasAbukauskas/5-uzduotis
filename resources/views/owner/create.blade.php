@extends('layouts.app')

@section('content')

<div class="container">

    @error('name')
        <div class="alert alert-danger">
            {{$message}}
            {{-- <p>Pavadinimas neivestas</p> --}}
        </div>
    @enderror

    @error('surname')
        <div class="alert alert-danger">
            {{$message}}
            {{-- <p>Pavadinimas neivestas</p> --}}
        </div>
    @enderror

    @error('email')
        <div class="alert alert-danger">
            {{$message}}
            {{-- <p>Pavadinimas neivestas</p> --}}
        </div>
    @enderror

    @error('phone')
        <div class="alert alert-danger">
            {{$message}}
            {{-- <p>Pavadinimas neivestas</p> --}}
        </div>
    @enderror

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create owner') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('owner.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="owner_name" class="col-md-4 col-form-label text-md-right">{{ __(' Name ') }}</label>

                            <div class="col-md-6">
                                <input id="owner_name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  autofocus>
                                @error('name')
                                    <span role="alert" class="invalid-feedback">
                                        <strong>*{{$message}}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="owner_surname" class="col-md-4 col-form-label text-md-right">{{ __(' Surname ') }}</label>

                            <div class="col-md-6">
                                <input id="owner_surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname"  autofocus>
                                @error('surname')
                                    <span role="alert" class="invalid-feedback">
                                        <strong>*{{$message}}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="owner_email" class="col-md-4 col-form-label text-md-right">{{ __(' Email ') }}</label>

                            <div class="col-md-6">
                                <input id="owner_email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  autofocus>
                                @error('email')
                                    <span role="alert" class="invalid-feedback">
                                        <strong>*{{$message}}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="owner_phone" class="col-md-4 col-form-label text-md-right">{{ __(' Phone ') }}</label>

                            <div class="col-md-6">
                                <input id="owner_phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"  autofocus>
                                @error('phone')
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
@endsection
