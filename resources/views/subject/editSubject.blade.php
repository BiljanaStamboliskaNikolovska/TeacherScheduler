@extends('layout.layout')

@section('title', 'EditSubject')

@section('content')

<div class="list-group-item list-group-item-info mt-5 mx-auto" style="width:40rem;">
    <h1 class="bd-content-title mb-3">Edit subject</h1>

    <form method="post" action="/update/{{$subject->id}}">
    @method('patch')    
    @csrf
 
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Teacher`s name</span>
  </div>
  <input type="text" class="form-control bg-white" readonly aria-describedby="inputGroup-sizing-default" name="room_name" value="{{$subject->teacher->name}}">
</div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Teacher`s speciality</span>
  </div>
  <input type="text" class="form-control bg-white" readonly aria-describedby="inputGroup-sizing-default" name="room_name" value="{{$subject->teacher->speciality}}">
</div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Room name</span>
  </div>
  <input type="text" class="form-control"  aria-describedby="inputGroup-sizing-default" name="room_name" value="{{$subject->room_name}}">
</div>


<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
    </div>

    <input type="date" class="form-control" id="datetimepicker2" data-date-format="DD MMMM YYYY" data-date-view-mode="months" data-date-days-of-week-disabled="[1,2,3,4,5]" name="date" value="{{$subject->date}}">
       
</div>
<div class="input-group mb-3 input-group-inline" >
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Time from</span>
    </div>
        <input type="time" class="form-control"  aria-describedby="inputGroup-sizing-default" id="timeFrom" name="time_from" value="{{$subject->time_from}}">

    <div class="input-group-prepend ml-3"  >
        <span class="input-group-text" id="inputGroup-sizing-default">Time to</span>
     </div>
         <input type="time" class="form-control bg-white" readonly  aria-describedby="inputGroup-sizing-default" id="timeTo" name="time_to" value="{{$subject->time_to}}">
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
<input class="form-check-input"  type="radio" name="has_occured"  value="0" {{($subject->has_occured=0)?"":"checked"}} >
  <label class="form-check-label" >Not occured</label>
</div>
</div>

<div class="d-flex justify-content-end ">     
      <button type="submit" class="btn btn-primary">Save</button>       
    </div>
    </form>
  </div>
  

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
@endsection

<script src="/public/js/editTime.js"></script>
