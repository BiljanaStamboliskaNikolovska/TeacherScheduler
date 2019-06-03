@extends('layout.layout')

@section('title', 'CreateSubject')

@section('content')

<div class="list-group-item list-group-item-info mt-5 mx-auto" style="width:40rem;">
    <h1 class="bd-content-title mb-3">Create a subject</h1>

   
    <form method="POST" action="/storeSubject">
@csrf
<div class="input-group mb-3 ">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Choose a teacher</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="teacher_id">
  @foreach($teachers as $teacher)
    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
    @endforeach
  </select>
</div>

<form method="POST" action="/storeSubject">
@csrf
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Room name</span>
  </div> 
  <input type="text" class="form-control"  aria-describedby="inputGroup-sizing-default" name="room_name"> 
</div>


<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
    </div>

    <input type="date" class="form-control" id="datepicker" data-date-days-of-week-disabled="0,6" name="date">
    
       
</div>
<div class="input-group mb-3 input-group-inline" >
    <div class="input-group-prepend">
        <span class="input-group-text">Time from</span>
    </div>
        <input type="time" class="form-control" aria-describedby="inputGroup-sizing-default" name="time_from" id="timeFrom">

    <div class="input-group-prepend ml-3"  >
        <span class="input-group-text">Time to</span>
     </div>
         <input type="time" class="form-control bg-white" readonly  aria-describedby="inputGroup-sizing-default" name="time_to" id="timeTo">
 </div>


<div class="form-check form-check-inline mb-3 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Class has occured</span>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input ml-5"  type="radio" name="has_occured" value="1">
  <label class="form-check-label" >Occured</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input"  type="radio" name="has_occured"  value="0" checked>
  <label class="form-check-label" >Not occured</label>
</div>
</div>

<div class="row">
  <div class="col-md-12" style="width: 37rem;" >
  @include('layout.errors')
  </div>
  </div>

  <div class="d-flex justify-content-end col-md-12">  
  <form method="POST" action="/storeSubject">
@csrf    
      <button type="submit" class="btn btn-primary">Save</button>    
      </form>    
    </div>
</div>
@endsection

<!-- <script src="../resources/js/editTime.js"></script> -->

@push('scripts')
<script type="text/javascript">
  var startElement = document.getElementById('timeFrom');
  var endElement = document.getElementById('timeTo');

  startElement.addEventListener('input', function() {
    const newStartValue = startElement.value;
    const startValueParsed = new Date('1970-01-01T' + newStartValue  + ':00' + 'Z');
    const endTimeHours = startValueParsed.getHours(); // ova e vrednosta za vo endTime
    const endTime = endTimeHours - 1 + ':45';
    endElement.value = endTime;
    debugger;
  });

</script>
@endpush