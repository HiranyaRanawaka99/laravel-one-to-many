@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <a class="btn btn-primary my-3" href="{{ route('admin.projects.index') }}">Torna alla lista progetti</a>
    <a class="btn btn-primary my-3" href="{{ route('admin.projects.show', $project) }}">Torna al progetto</a>

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

    <form method="POST" action="{{ route('admin.projects.update', $project) }}" class="row"> 
        @method("PATCH")
        @csrf

        <div class="col-12"> 
            <label for="title" class="form-label"></label>
            <input type="text" name="title" id="title" class="form-control" value=" {{  old('title') ?? $project->title}} ">
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