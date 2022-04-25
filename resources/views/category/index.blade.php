@extends('layouts.conquer2')


@section('content')
  <h2>List Medicines</h2>
  <!--p>The .table-striped class adds zebra-stripes to a table:</p-->            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
    </thead>
    <tbody>
      @foreach($datas as $li)
      <tr>
        <td>{{$li->name}}</td>
        <td>{{$li->description}}</td>
        <td>{{$li->created_at}}</td>
        <td>{{$li->updated_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection