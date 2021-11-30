@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit owner') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('owner.update', [$owner]) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="owner_name" class="col-md-4 col-form-label text-md-right">{{ __(' Name ') }}</label>

                            <div class="col-md-6">
                                <input id="owner_name" type="text" class="form-control" name="name" value="{{$owner->name}}" required autofocus>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="owner_surname" class="col-md-4 col-form-label text-md-right">{{ __(' Surname ') }}</label>

                            <div class="col-md-6">
                                <input id="owner_surname" type="text" class="form-control" name="surname" value="{{$owner->surname}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="owner_email" class="col-md-4 col-form-label text-md-right">{{ __(' Email ') }}</label>

                            <div class="col-md-6">
                                <input id="owner_email" type="email" class="form-control" name="email" value="{{$owner->email}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="owner_phone" class="col-md-4 col-form-label text-md-right">{{ __(' Phone ') }}</label>

                            <div class="col-md-6">
                                <input id="owner_phone" type="number" class="form-control" name="phone" value="{{$owner->phone}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
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
