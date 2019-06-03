@extends('layout.layout')

@section('title', 'ShowSubject')

@section('content')

<div class="list-group-item list-group-item-info mt-5 mx-auto" style="width:40rem;">
    <h1 class="bd-content-title mb-3">Subject show card</h1>

   
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Teacher`s name</span>
  </div>
  <input type="text" class="form-control bg-white" readonly aria-describedby="inputGroup-sizing-default" name="name" value="{{$subject->teacher->name}} ">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Teacher`s speciality</span>
  </div>
  <input type="text" class="form-control bg-white" readonly  aria-describedby="inputGroup-sizing-default" name="name" value="{{$subject->teacher->speciality}} ">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
    </div>

    <input type="date" class="form-control bg-white" readonly id="datetimepicker2" data-date-format="DD MMMM YYYY" data-date-view-mode="months" data-date-days-of-week-disabled="[1,2,3,4,5]" name="date" value="{{$subject->date}}"> 
    </div>
       

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Room name</span>
  </div>
  <input type="text" class="form-control bg-white" readonly aria-describedby="inputGroup-sizing-default" name="room_name" value="{{$subject->room_name}}"> 
</div>




<div class="input-group mb-3 input-group-inline" >
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Time from</span>
    </div>
        <input type="time" class="form-control bg-white" readonly  aria-describedby="inputGroup-sizing-default" name="time_from" value="{{$subject->time_from}}">

    <div class="input-group-prepend ml-3"  >
        <span class="input-group-text" id="inputGroup-sizing-default">Time to</span>
     </div>
         <input type="time" class="form-control bg-white" readonly  aria-describedby="inputGroup-sizing-default" name="time_to" value="{{$subject->time_to}}">
 </div>


<div class="form-check form-check-inline mb-3 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Class has occured</span>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input ml-5"  type="radio" name="has_occured" value="1" {{($subject->has_occured=1)?"checked":""}}>
  <label class="form-check-label" >Occured</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input"  type="radio" name="has_occured"  value="0" {{$subject->has_occured=0?"":"checked"}} >
  <label class="form-check-label" >Not occured</label>
</div>
</div>

<div class="row">
  <div class="col-md-12" style="width: 37rem;" >
  @include('layout.errors')
  </div>
  </div>

  
  <div class="d-flex justify-content-end col-md-12">    
      <form method="get" action="/editSubject/{{$subject->id}}">
      @csrf  
      <button type="submit" class="btn btn-primary mr-3">Edit</button>        
</form>

    <div>
      <form method="post"  action="/showSubject/{{$subject->id}}/delete">
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-primary">Delete</button>    
      </form>    
    </div>
</div>
  

@endsection
