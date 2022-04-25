@extends('layouts.conquer2')

@section('content')
  <div class="container">
    <h2>List Medicines</h2>
    <!--p>The .table-striped class adds zebra-stripes to a table:</p-->            
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Form</th>
          <th>Restriction Formula</th>
          <th>Price</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        @foreach($listRaw as $li)
        <tr>
          <td>{{$li->generic_name}}</td>
          <td>{{$li->form}}</td>
          <td>{{$li->restriction_formula}}</td>
          <td>{{$li->price}}</td>
          <td>{{$li->description}}</td>
          <td>
        @endforeach

      <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">DISCLAIMER</h4>
        </div>
        <div class="modal-body">
          Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement. 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
   </div>
  </div>
  <a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>
@endsection