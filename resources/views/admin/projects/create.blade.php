@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <a class="btn btn-primary my-3" href="{{ route('admin.projects.index') }}">Torna ai progetti</a>

    <h1> Titolo </h1>

    @if($errors->any())
    <div class="alert alert-danger">
        Correggi i seguenti errori:
        <ul>
            @foreach($errors->all() as $error)
            <li> {{ $error}} </li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('admin.projects.store') }}" class="row"> 
        @csrf

        <div class="col-12"> 
            <label for="title" class="form-label " value={{ old('title') }}>Titolo</label>
            <input type="text" name="title" id="title" class="form-control @error('title')is-invalid @enderror">
            @error('title')
            <div class="invalid-feedback">
                {{$message }}
            </div>
            @enderror
        </div> 
        <div class="col-12"> 
            <label for="description" class="form-label">Descizione</label>
            <textarea name="description" id="description"  class="form-control" rows="5"> </textarea>
        </div> 

        <div class="col-12">
            <button class="btn btn-success">Salva</button>
        
        </div>
        

    </form>



</div>
@endsection