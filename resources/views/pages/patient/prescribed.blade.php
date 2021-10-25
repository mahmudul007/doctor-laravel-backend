@extends('layouts.layouts')
@section('content')
<table class="table  table-striped">

    <tr class="table-danger">
       
        <td>Id</td>
        <td>Name</td>
        <td>gender</td>
        <td>age</td>
        <td>phone</td>
      
    
        <td>Doctor</td>
        <td>Prescribe date</td>
    </tr>
    @foreach ($patient as $item )
    <tr>
     <td>{{ $item->id }}</td>
     <td>{{ $item->username }}</td>
     <td>{{ $item->gender }}</td>
     <td>{{ $item->age }}</td>
     <td>{{ $item->phone_no }}</td>
    
     <td>{{ $item->doc_name }}</td>
     <td>{{ $item->updated_at}}</td>

    </tr>
        
    @endforeach

</table>
    
@endsection