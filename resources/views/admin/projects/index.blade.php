@extends('layouts.app')

@section('content')

<div class="container mt-5">

  <h1> I miei progetti </h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col"></th>
      <th scope="col">Dettagli</th>
    </tr>
  </thead>
  <tbody>
    @forelse($projects as $project)
    <tr>
      <th scope="row"> {{ $project->id}} </th>
      <td> {{ $project->title }}  </td>
      <td></td>
      <td> 
        <a href="{{ route('admin.projects.show', $project)}}" class=""> Show </a>
        <a href="{{ route('admin.projects.create')}}" class=""> Crea </a>
        <a href="{{ route('admin.projects.edit', $project)}}" class=""> Modifica </a>
      </td>
    </tr>
    @empty
      @endforelse
      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      
      <tr>
        <th scope="row"></th>
        <td colspan="2"></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  
  
  
</div>
  @endsection