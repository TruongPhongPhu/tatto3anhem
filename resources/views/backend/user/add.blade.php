<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
      @if (session('status'))
        <h5 class="alert alert-success">{{ session('status')}}</h5>
      @endif
			<div class="panel-heading">
				<h2 class="text-center">Add New Customer<a href="{{ route('user.customer')}}"
          class="btn btn-danger float-end">BACK</a></h2>
			</div>
			<div class="panel-body">
                
               <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input required="true" type="text" class="form-control" id="username" name="username">
                      </div>
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input required="true" type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="form-group">
                        <strong>Gender:</strong>
                        <select class="form-select" name="gender">
                            <option selected>Choose...</option>
                            <option value="nam">Male</option>
                            <option value="nữ">Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="password">Password:</label>
                        <input required="true" type="password" class="form-control" id="password" name="password">
                      </div>
                      <div class="form-group">
                        <label for="phonenumber">Phone Number:</label>
                        <input type="text" class="form-control" id="phonenumber" name="phone">
                      </div>
                      <button type="submit" class="btn btn-success">Register</button>
                  </div>
                  
                </form>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            </div>
	</div>
</body>
</html>