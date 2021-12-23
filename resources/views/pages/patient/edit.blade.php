@extends('layouts.layouts')
@section('content')
<form action="{{route('patient.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$patient->id}}">
        <input type="hidden" name="username" value="{{$patient->username}}" class="form-control">
        <input type="hidden" name="gender" value="{{$patient->gender}}" class="form-control">
        <input type="hidden" name="age" value="{{$patient->age}}" class="form-control">
        <input type="hidden" name="phone_no" value="{{$patient->phone_no}}" class="form-control">
        <input type="hidden" name="doc_name" value="{{$patient->doc_name}}" class="form-control">
        <input type="hidden" name="time" value="{{$patient->time}}" class="form-control">

        <div class="col-md-5 form-group">
            <label class="fs-1" for="prescribe">select status:</label>


            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                <select  name="prescribe" value="{{$patient->prescribe}}" class="form-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option >Prescribed</option>
                 
                </select>
              </div>




           
        </div>

                  
      
        
        <input type="submit" class="btn btn-success" value="Update" >
    </form>
@endsection