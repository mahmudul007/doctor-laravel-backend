@extends('layouts.layouts')
@section('content')
<div style="border:solid 3px; padding:20px;boder-radius:30px;box-shadow:blue 0px 22px 70px 4px; text-allign:center;">
<form  action="{{ (route('createSubmit')) }}"  method="post" >
    {{ csrf_field() }}

    <div class="col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-text">Name:</span>
            <input placeholder="enter your name" type="text" class="form-control" value="{{ old('username') }}" name="username"  >
            @error('username')
            <span class="text-danger">{{$message}}</span>
        @enderror
           
            
          </div>

    </div>
    <br>
    <div class="col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-text">AGE:</span>
            <input placeholder="enter your valid age" type="number" value="{{ old('age') }}" class="form-control" name="age"   >
            @error('age')
            <span class="text-danger">{{$message}}</span>
        @enderror
            
          </div>

    </div>

    <br>
    <div class="col-md-4 form-group">
        <div class="input-group">
       

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Gender:</label>
                <select  name="gender" value="{{ old('gender') }}" class="form-select" id="inputGroupSelect01">
                 <option selected>Select your gender</option>
                 
                  <option >Male</option>
                  <option >Female</option>
                  <option >Other..</option>
                  @error('gender')
                  <span class="text-danger">{{$message}}</span>
              @enderror
                 
                </select>
                
              </div>
            
          </div>

    </div>
    <br>
    <div class="col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-text">Phone:</span>
            <input placeholder="enter your valid phone no" value="{{ old('phone_no') }}" type="number" class="form-control" name="phone_no" required>
            @error('phone_no')
            <span class="text-danger">{{$message}}</span>
        @enderror
            
          </div>

    </div>
    <br>
    <div class="col-md-4 form-group">
      
            
            
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Doctor:</label>
                <select  name="doc_name" value="{{ old('doc_name') }}" class="form-select" id="inputGroupSelect01">
                    <option selected>Select your doctor</option>
                  @foreach ($doctors as $item )
                  <option >{{ $item->doc_name }}</option>
                  @endforeach
                  @error('doc_name')
                  <span class="text-danger">{{$message}}</span>
              @enderror
                 
                </select>
              </div>
           
              
           
            
        

    </div>
    <br>
    <div class="col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-text">Booked for:</span>
            <input type="text" placeholder="enter when you come" value="{{ old('booked_for') }}"class="form-control" name="booked_for"  >
            {{-- @error('booked_for')
            <span class="text-danger">{{$message}}</span>
        @enderror --}}
            
          </div>

    </div>
    <br>
    <div class="col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-text">Date:</span>
            <input type="date" placeholder="enter date" value="{{ old('book_date') }}"  class="form-control" name="book_date"  >
            
          </div>

    </div>
    <br>
    <div class="col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-text">Time:</span>
            <input placeholder="enter appoint time" type="time" value="{{ old('time') }}" class="form-control" name="time"  >
            
          </div>

    </div>
    <br>
    <input type="submit" class="btn btn-danger txt-center" value="Book appointment">
</form>
</div>
@endsection
