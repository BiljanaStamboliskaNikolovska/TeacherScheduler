@extends('layout.layout')

@section('title', 'Edit a teacher card')

@section('content')

<div class="list-group-item list-group-item-info mt-5 mx-auto" style="width:40rem;">
<form method="POST" action="{{$teacher->id}}/update">
      @method("PATCH")
      @csrf
    <h1 class="bd-content-title mb-3">Edit teacher`s info card</h1>
<div class="input-group input-group-sm mx-auto mb-3 "style="width: 35rem;">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" >Name</span>
  </div>
  <input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" name="name" value="{{$teacher->name}}" > 
 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" >Speciality</span>
  </div>
  <input type="text" class="form-control"  aria-describedby="inputGroup-sizing-default" name="speciality" value="{{$teacher->speciality}}">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" >Institution</span>
  </div>
  <input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" name="institution" value="{{$teacher->institution}}">
</div>

<div class="form-check form-check-inline">
<div class="input-group-prepend">
    <span class="input-group-text" >Select if the teacher is active</span>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input ml-5" type="radio" name="is_active"  value="1"

  {{($teacher->is_active=1)?"checked":""}}>
  <label class="form-check-label" >Active</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="is_active"  value="0"
{{($teacher->is_active==0)?"checked":""}} >
  <label class="form-check-label" >Not active</label>
</div>
</div>

<div class="row mt-3">
  <div class="col-md-12 "style="width: 37rem;">
  @include('layout.errors')
  </div>
  </div>  

  <div class="d-flex justify-content-end col-md-12">      
    <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>
</div>
</div>
@endsection
