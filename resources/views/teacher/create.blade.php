@extends('layout.layout')

@section('title', 'Create a teacher')

@section('content')


<div class="list-group-item list-group-item-info mt-5 mx-auto" style="width:40rem;">
    <h1 class="bd-content-title mb-3">Create a teacher</h1>


<form method="POST" action="/store">
@csrf
<div class="input-group input-group-sm mx-auto mb-3 "style="width: 35rem;">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
  </div>
  <input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" name="name"> 
 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Speciality</span>
  </div>
  <input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" name="speciality">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Institution</span>
  </div>
  <input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" name="institution" >
</div>

<div class="form-check form-check-inline ">
<div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Select if the teacher is active</span>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input ml-5" type="radio" name="is_active" value="1" checked>
  <label class="form-check-label" >Active</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="is_active"  value="0" >
  <label class="form-check-label" >Not active</label>
</div>
</div>

<div class="row mt-3">
  <div class="col-md-12 "style="width: 37rem;" ">
  @include('layout.errors')
  </div>
  </div>


  <div class="d-flex justify-content-end col-md-12">
      
      <button type="submit" class="btn btn-primary">Save</button>
        
    </div>
  </div>
</form>
@endsection


