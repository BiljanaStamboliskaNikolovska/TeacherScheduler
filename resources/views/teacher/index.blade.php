@extends('layout.layout')

@section('title', 'Home Page')

@section('content')

<div class="list-group-item list-group-item-info mt-5 mx-auto" style="width: 65rem;">
  <h1>List of active teachers</h1>
  
 @if(count($teachers)>0)
  <div class="list-group ml-3 mt-3" style="width: 70rem;">
  <ul class="list-group list-group-horizontal-sm "style="width: 70rem;">
  <li class="list-group-item list-group-item-secondary" style="width: 20rem; ">Name</li>
  <li class="list-group-item list-group-item-secondary" style="width: 20rem;">Speciality</li>
  <li class="list-group-item list-group-item-secondary" style="width: 20rem;">Institution</li>
  </ul>
  @foreach ($teachers as $teacher)
  <a href="show/{{$teacher->id}}"> <ul class="list-group list-group-horizontal-sm"style="width: 70rem;">
   <li class="list-group-item" style="width: 20rem;">{{$teacher->name}}</li>
  <li class="list-group-item"style="width: 20rem;">{{$teacher->speciality}}</li>
  <li class="list-group-item"style="width: 20rem;">{{$teacher->institution}}</li>
</ul></a>
@endforeach
  </div>
  <div class=" d-flex justify-content-end mt-2">
  <small  class="form-text text-muted">Click to see a teacher`s info card</small>
  </div>
  @else
  <h4 class="mt-3 ml-3">There is no available teacher.</h4> 
  @endif
  
</div>
  
@endsection