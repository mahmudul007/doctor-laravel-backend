@extends('layouts.layouts')
@section('content')
    <html>
        <form action={{ route('doctorLogin') }}  method="post"  >
            {{ @csrf_field() }}


          <label  for="">username</label>
          <input name="doc_name" type="text"><br>
          <label for="">password</label>
          <input name="password"  type="password"><br>
          <input  type="submit" value="Log in">

        </form>
    </html>

@endsection