<!-- ke thua file master-->
@extends('student-layout.master')
<!-- thay doi noi dung don gian-->
@section('tilte', 'Title list')

@section('header', 'Header List extends')
<!-- thay doi noi dung phuc tap -->
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Class</th>
      <th scope="col">Is_active</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $value)
    <tr>
      <th scope="row">{{$value->name}}</th>
      <td>{{$value->age}}</td>
      <td>
      @if ($value->gender == 0)
          Femal
      @elseif($value->gender == 1)
          Male
      @else
      Nothing
      @endif
      </td>
      <td>{{$value->address}}</td>
      <td>{{$value->class}}</td>
      <td>{{$value->is_active}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
@section('footer' ,'Footer List extends')