@extends('layout.layout')

@section('title', 'Show a teacher')

@section('content')


<div class="list-group-item list-group-item-info ml-5 mt-5 mb-2  float-left " style="width: 20rem;">
  <h4 class="mt-3 ml-3">Teacher {{$teacher->name}}`s info card</h4>

 
  <div class="list-group  mt-3 mx-auto "style="width: 17rem;" >  
  <ul class="list-group list-group-horizontal-sm  "style="width: 17rem;">
  <li class="list-group-item list-group-item-secondary " style="width: 7rem; ">Name</li>
  <li class="list-group-item" style="width: 10rem;">{{$teacher->name}}</li>
  </ul>

  <ul class="list-group list-group-horizontal-sm "style="width: 17rem;">
  <li class="list-group-item list-group-item-secondary" style="width: 7rem;">Speciality</li>
  <li class="list-group-item"style="width: 10rem;">{{$teacher->speciality}}</li>
  </ul>

  <ul class="list-group list-group-horizontal-sm "style="width: 17rem;">
  <li class="list-group-item list-group-item-secondary" style="width: 7rem;">Institution</li>
  <li class="list-group-item"style="width: 10rem;">{{$teacher->institution}}</li>
  </ul>
  <ul class="list-group list-group-horizontal-sm "style="width: 17rem;">
  <li class="list-group-item list-group-item-secondary" style="width: 7rem;">Availibility</li>
  <li class="list-group-item"style="width: 10rem;">{{($teacher->is_active=1)?"Available":"Not available"}}</li>
  </ul>
  
  <div class=" d-flex justify-content-end ">
      
 <form method="get" action="/edit/{{$teacher->id}}">
 @csrf

  <button class="btn btn-info mt-4" type="submit">Edit</button>
 </form>
  <form method="POST" action="{{$teacher->id}}/delete">
    @method('DELETE')
    @csrf
  <button class="btn  btn btn-info mt-4 ml-3" type="submit">Delete</button>
  </form>
  </div>
  </div>
  </div>


<div class="list-group-item list-group-item-info float-right mt-5 mr-5" style="width: 45rem;">
  @if(count($teacher->subjects)==0) 
  <h2 class="mt-3 ml-3 mb-3">There are no scheduled classes!!</h2>

  <div class="d-flex justify-content-end ">  
  <form method="get" action="/createSubjectForTeacher/{{$teacher->id}}">
@csrf    
      <button type="submit" class="btn btn-primary btn-bg">Create a subject</button>    
      </form>    
    </div> 
  @else
  <h2 class="mt-3 ml-3">List of scheduled classes</h2>  

    
  <div class="list-group ml-3 mt-3" style="width: 40rem;">
  <ul class="list-group list-group-horizontal-sm "style="width: 40rem;">
  <li class="list-group-item list-group-item-secondary" style="width: 10rem; ">Date</li>
  <li class="list-group-item list-group-item-secondary" style="width: 10rem;">Room name</li>
  <li class="list-group-item list-group-item-secondary" style="width: 10rem;">Time from</li>
  <li class="list-group-item list-group-item-secondary" style="width: 10rem;">Time to</li>
  </ul>
  @foreach ($teacher->subjects as $subject)
  <a href="/showSubject/{{$subject->id}}">
  <ul class="list-group list-group-horizontal-sm"style="width: 40rem;">
   <li class="list-group-item" style="width: 10rem;">{{$subject->date}}</li>
  <li class="list-group-item"style="width: 10rem;">{{$subject->room_name}}</li>
  <li class="list-group-item"style="width: 10rem;">{{$subject->time_from}}</li>
  <li class="list-group-item"style="width: 10rem;">{{$subject->time_to}}</li>  
</ul>
  </a>  
  @endforeach

  <div class=" d-flex justify-content-start mt-2 mb-2">
  <small id="emailHelp" class="form-text text-muted">Click to see a subject info card</small>
  </div>
  <div class=" d-flex justify-content-end">

  <div class="d-flex justify-content-end ">  
  <form method="get" action="/createSubjectForTeacher/{{$teacher->id}}">
@csrf    
      <button type="submit" class="btn btn-primary">Create a subject</button>    
      </form>    
    </div>
  @endif

  

  
</div>
      
 
  </div>
  </div>


@endsection