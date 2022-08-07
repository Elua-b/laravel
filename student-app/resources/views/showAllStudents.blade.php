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
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
</head>

<body>

  <div class="jumbotron text-center ">
    <h1>Add new Student</h1>
    <div class="float-right">
      <a href="" class=" btn btn-success" data-toggle="modal" data-target="#myModal">Add Student</a>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-2">
        <div class="list-group">
          <a href="/course" class="list-group-item list-group-item-action">Courses </a>
          <a href="/student" class="list-group-item list-group-item-action">Students</a>
        </div>
      </div>
      <div class="col-10">
        <table class="table" id="myTable">
          <thead>
            <tr>
              <td>id</td>
              <td>Name</td>
              <td>Phone</td>
              <td>Course_id</td>
              
              <td>Edit</td>
              <td>Delete</td>
            </tr>
          </thead>
          <tbody>
            @foreach($students as $c)
            <tr>
              <td>{{$c->id}}</td>
              <td>{{$c->name}}</td>
              <td>{{$c->phone}}</td>
              <td>{{$c->course_id}}</td>
              
              <td> <a href="javascript:void(0)" class="btn btn-warning showEditModal">Edit</a> </td>
              <td>
                <form action="student/{{$c->id}}" method="post">
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
            <h4 class="modal-title">Add Student</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            
            
            <!-- Modal footer -->
            <form action="student" method="POST" id="form">
              @csrf
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control"  id='name' name="name">
              </div>
              <div class="form-group">
                <label for="">Phone</label>
                <input type="tel" class="form-control"  id='phone' name="phone">
              </div>
              <div class="form-group">
                <label for="">Course_id</label>
                <input type="number" class="form-control"  id='course_id' name="course_id">
              </div>
              
              <div class="form-group">
                
                <input type="submit" class="form-control btn btn-success" value="Add Student"  id='submit' name="submit">
              </div>
              
            </form>            
          </div>

        </div>
      </div>
    </div>

  </div>
<script>
  $(document).ready(function(){
    $('#myTable').DataTable();
  })
  $('.showEditModal').click(function(e){

    course_id=e.target.parentElement.previousElementSibling.innerText
    phone=e.target.parentElement.previousElementSibling.previousElementSibling.innerText
    name=e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.innerText
    
    id=e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText
    $('#myModal').modal('show');
    
    $('#name').val(name)
    $('#phone').val(phone)
    $('#course_id').val(course_id)
   
    $('#submit').val('Edit Student')
    $('.modal-title').text('Edit Student')
    $('form').attr('action','student/'+id)
    $('form').append('<input type="hidden" name="_method" value="PUT">')        
      $('#myModal').modal('show');
  })
</script>
</body>

</html>