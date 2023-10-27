@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <a class="btn btn-primary my-3" href="{{ route('admin.projects.index') }}">Torna ai progetti</a>

    <h1> {{ $project->title }} </h1>

    <ul class="list-group list-group-flush">
        <li class="list-group-item"> 
            <b> Categoria: </b> {!! $project->getCategoryBadge() !!} 
        </li>
        <li class="list-group-item">
            <b> Descrizione: </b>  {{ $project->description }}
        </li>
        <li class="list-group-item">
            <b> Link: </b> {{ $project->link}}
            </li>
        <li class="list-group-item">
            <b> Data di pubblicazione: </b>  {{ $project->date }}
            </li>
      </ul>

</div>
@endsection