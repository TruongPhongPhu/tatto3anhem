<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/Pepper-Grinder/jquery-ui.css">

	
	

	

	
	

    
    
    
    
    
    
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
      @if (session('status'))
        <h5 class="alert alert-success">{{ session('status')}}</h5>
      @endif
			<div class="panel-heading">
				<h2 class="text-center">Update<a href="{{ route('booking.customer')}}"
          class="btn btn-danger float-end">BACK</a></h2>
			</div>
			<div class="panel-body">
                @php 
                    $index = 0;
                @endphp
                @if($booking)
                <form action="{{ route('booking.update', ['booking_id' => $booking->booking_id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input required="true" type="text" class="form-control" id="username" value="{{ old('username', $booking->username) }}"name="username">
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Ảnh tác phẩm:</label>
                        <input required="true" type="file" class="form-control" id="image" value="{{ old('image', $booking->image) }}" name="image">
                    </div>
                    
                    <div class="form-group">
                        <div class="check-in-out">
                            <div class="input-group">
                        
                            
                                <label for="start_datetime">Start Datetime</label>
                                <input type="datetime-local" autocomplete="off" class="date-picker" id="start_datetime" 
           value="{{ old('start_datetime', \Carbon\Carbon::parse($booking->start_datetime)->format('Y-m-d\TH:i')) }}" 
           name="start_datetime" placeholder="YYYY-MM-DD HH:MM">
                                {{-- <input type="datetime-local" id="start_datetime" autocomplete="off" class="date-picker" value="{{ old('start_datetime', $booking->start_datetime) }}" name="start_datetime" placeholder="YYYY-MM-DD HH:MM:SS" > --}}
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <strong>Style Customer:</strong>
<select class="form-select" name="style_customer"value="{{ old('style_customer', $booking->style_customer) }}" >
                            <option selected>Choose...</option>
                            @foreach (App\Enums\StyleCustomer::cases() as $style)
                                <option value="{{ $style->value }}" {{ old('style_customer', $booking->style_customer) == $style->value ? 'selected' : '' }}>{{ $style->value }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <strong>Social Type:</strong>
                        <select class="form-select" name="social_type" value="{{ old('social_type', $booking->social_type) }}">
                            <option selected>Choose...</option>
                            @foreach (App\Enums\SocialType::cases() as $style)
                                <option value="{{ $style->value }}" {{ old('social_type', $booking->social_type) == $style->value ? 'selected' : '' }}>{{ $style->value }}</option>
                            @endforeach
                            
                            
                            
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="username">Contact:</label>
                        <input required="true" type="text" class="form-control" id="contact"  value="{{ old('contact', $booking->contact) }}"name="contact">
                    </div>
                    <div class="form-group">
                        <strong>Status Payment</strong>
                        <select class="form-select" name="status_payment" value="{{ old('status_payment', $booking->status_payment) }}">
                            <option selected>Choose...</option>
                           
                            @foreach (App\Enums\StatusPayment::cases() as $style)
                                <option value="{{ $style->value }}" {{ old('status_payment', $booking->status_payment) == $style->value ? 'selected' : '' }}>{{ $style->value }}</option>
                           @endforeach
                           
                        </select>
                      </div>


                    
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
                @endif
                               
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="vendors/scripts/bookingadmin.js"></script>
    
    
</body>
</html>