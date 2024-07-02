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
				<h2 class="text-center">Update<a href="{{ route('home.bookingadmin')}}"
          class="btn btn-danger float-end">BACK</a></h2>
			</div>
			<div class="panel-body">
                @php 
                    $index = 0;
                @endphp
                @if($bookingtype)
                <form action="{{ route('home.update', ['bookingtype_id' => $bookingtype->bookingtype_id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" value="{{ old('name', $bookingtype->name) }}" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" value="{{ old('email', $bookingtype->email) }}" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="tel" id="phone" value="{{ old('phone', $bookingtype->phone) }}" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="service">Service:</label>
                        <select id="service" name="service" required>
                            <option value="">Select a service</option>
                            <option value="advise" {{ $bookingtype->service == 'advise' ? 'selected' : '' }}>Advise</option>
                            <option value="tattoo" {{ $bookingtype->service == 'tattoo' ? 'selected' : '' }}>Tattoo</option>
                            <option value="pain" {{ $bookingtype->service == 'pain' ? 'selected' : '' }}>pain</option>
                            <option value="aftercare" {{ $bookingtype->service == 'aftercare' ? 'selected' : '' }}>Image warranty after tattoo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="datetime">Date and Time:</label>
                        <input type="datetime-local" id="datetime"  value="{{ old('datetime', \Carbon\Carbon::parse($bookingtype->datetime)->format('Y-m-d\TH:i')) }}" name="datetime" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" value="{{ old('message', $bookingtype->message ) }}" name="message"></textarea>
                    </div>
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                 
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   

                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
            
                   
                   
                   
                   


                    
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
                @endif
            </div>
            
            
            
            
            
        
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
                
                  
               
                  
                
                
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            </div>
        </div>
     
	</div>
    <script src="vendors/scripts/homepage.js"></script>
</body>
</html>