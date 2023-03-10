@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Animal Page</div>

                <div class="card-body">
                    <form method="POST" action="{{route('animal.update',$animal->id)}}" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{$animal->name}}" name="name" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="number" class="col-md-4 col-form-label text-md-end">{{ __('Number') }}</label>

                            <div class="col-md-6">
                                <input id="number" type="number" value="{{$animal->number}}" class="form-control @error('number') is-invalid @enderror" name="number">

                                @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
               

                        <div class="row mb-3">
                            <label for="note" class="col-md-4 col-form-label text-md-end">Farmer's Notes</label>

                            <div class="col-md-6">
                                <textarea class="form-control @error('note') is-invalid @enderror" name="note" id="note" rows="10" >
                                    {{$animal->note}}
                                </textarea>
                                @error('note')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>

                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Update Animal
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection