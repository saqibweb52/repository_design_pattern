<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Bootstrap Form Example</title>
</head>
<body>





  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2>Student Registration Form</h2>
        @if(isset($stu))
        <form  action="{{ route('update', $stu->id) }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" value="{{$stu->name}}" name="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" value="{{$stu->email}}" name="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" value="{{$stu->password}}" name="password" placeholder="Enter your password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
          
      @else
 
      <form method="POST" action="{{url('/students')}}">
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" name="password" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>  
      
        <br>
        <h2>Student List</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

            @if(isset($students))
            @foreach ($students as $student)
              <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->password }}</td>
           
                <td>
               
                  <a href="#" class="btn btn-info btn-sm">View</a>
                  <a href="student/{{$student->id}}" class="btn btn-warning btn-sm">Edit</a>
                  <a href="studentdelete/{{$student->id}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
            @endforeach
          @else
            <tr>
              <td colspan="4" class="text-center">No students found.</td>
            </tr>
          @endif
          
          </tbody>
        </table>
        @endif
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
