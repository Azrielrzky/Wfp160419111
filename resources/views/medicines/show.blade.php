<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show Medicines</h2>
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
      <tr>
        <td>{{$message->generic_name}}</td>
        <td>{{$message->form}}</td>
        <td>{{$message->restriction_formula}}</td>
        <td>{{$message->price}}</td>
        <td>{{$message->description}}</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>