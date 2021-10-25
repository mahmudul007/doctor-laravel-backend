@extends('layouts.layouts')
@section('content')
<table class="table table-success">

    <tr class="table-primary">
       
        <td>Id</td>
        <td>Name</td>
        <td>gender</td>
        <td>age</td>
        <td>phone</td>
        <td>doctor</td>
        <td>Period</td>
        <td>date</td>
        <td>time</td>
        <td>Prescribe</td>
    </tr>
    @foreach ($patients as $item )
    <tr>
     <td>{{ $item->id }}</td>
     <td>{{ $item->username }}</td>
     <td>{{ $item->gender }}</td>
     <td>{{ $item->age }}</td>
     <td>{{ $item->phone_no }}</td>
     <td>{{ $item->doc_name }}</td>
     <td>{{ $item->booked_for}}</td>
     <td>{{ $item->book_date }}</td>
     <td>{{ $item->time}}</td>
     <td><a  href="/patient/edit/{{$item->id}}">Status::{{ $item->prescribe }}</a></td>
    </tr>
        
    @endforeach

</table>
    
@endsection