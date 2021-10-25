
@extends('layouts.layouts')
@section('content')
<form action="{{route('editSubmit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$doctor->id}}">
        <input type="hidden" name="doc_name" value="{{$doctor->doc_name}}" class="form-control">
        <input type="hidden" name="dept" value="{{$doctor->dept}}" class="form-control">
        <input type="hidden" name="img" value="{{$doctor->img}}" class="form-control">
        <input type="hidden" name="password" value="{{$doctor->password}}" class="form-control">
        <input type="hidden" name="description" value="{{$doctor->description}}" class="form-control">

        <div class="col-md-4 form-group">
            <span>Available:</span>
           
            <input type="text" name="available" value="{{$doctor->available}}" class="form-control">
           
        </div>
      
        
        <input type="submit" class="btn btn-success" value="Update" >
    </form>
@endsection