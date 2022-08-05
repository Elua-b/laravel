<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popple.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="jumbotron text-center ">
    <h1>Add new Course</h1>
    <div class="float-right">
      <a href="" class=" btn btn-success" data-toggle="modal" data-target="#myModal">Add Course</a>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-2">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">Courses</a>
          <a href="#" class="list-group-item list-group-item-action">Students</a>
        </div>
      </div>
      <div class="col-10">
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
          <tbody>
            @foreach($courses as $c)
            <tr>
              <td>{{$c->id}}</td>
              <td>{{$c->Course_Name}}</td>
              <td>{{$c->Teacher_Name}}</td>
              <td>{{$c->Batch_Time}}</td>
              <td>{{$c->Teaching_Day}}</td>
              <td> <a href="javascript:void(0)" class="btn btn-warning showEditModal">Edit</a> </td>
              <td>
                <form action="course/{{$c->id}}" method="post">
                  @method('DELETE')
                  @csrf
                  <input type="submit" value="Delete" class="btn btn-danger">
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add Course</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            
            
            <!-- Modal footer -->
            <form action="course" method="POST" id="form">
              @csrf
              <div class="form-group">
                <label for="">Course_Name</label>
                <input type="text" class="form-control"  id='Course_Name' name="Course_Name">
              </div>
              <div class="form-group">
                <label for="">Teacher_Name</label>
                <input type="text" class="form-control"  id='Teacher_Name' name="Teacher_Name">
              </div>
              <div class="form-group">
                <label for="">Batch_Time</label>
                <input type="text" class="form-control"  id='Batch_Time' name="Batch_Time">
              </div>
              <div class="form-group">
                <label for="">Teaching_Day</label>
                <input type="text" class="form-control"  id='Teaching_Day' name="Teaching_Day">
              </div>
              <div class="form-group">
                
                <input type="submit" class="form-control btn btn-success" value="Add Course"  id='submit' name="submit">
              </div>
              
            </form>            
          </div>

        </div>
      </div>
    </div>

  </div>
<script>
  $('.showEditModal').click(function(e){

    Teaching_Day=e.target.parentElement.previousElementSibling.innerText
    Batch_Time=e.target.parentElement.previousElementSibling.previousElementSibling.innerText
    Teacher_Name=e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.innerText
    Course_Name=e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText
    id=e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText
    $('#myModal').modal('show');
    
    $('#Course_Name').val(Course_Name)
    $('#Teaching_Day').val(Teaching_Day)
    $('#Teacher_Name').val(Teacher_Name)
    $('#Batch_Time').val(Batch_Time)
      $('#myModal').modal('show');
  })
</script>
</body>

</html>