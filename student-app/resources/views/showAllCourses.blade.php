<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Add new Course</h1>
  <div class="float-left">
      <a href="" class=" btn btn-success" data-toggle="modal"  data-target="#myModal">Add Course</a>
  </div>
</div>
  
<div class="container">
  
<table class="table">
  <thead>
    <tr>
      <td>id</td>
      <td>Course_Name</td>
      <td>Teacher_Name</td>
      <td>Batch_Time</td>
      <td>Teaching_Day</td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>
  </thead>
</table>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</div>

</body>
</html>
