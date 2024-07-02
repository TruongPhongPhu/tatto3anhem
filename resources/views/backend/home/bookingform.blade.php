<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="frontend/Booking-form/booking.css">
    <link rel="stylesheet" href="frontend/Booking-form/reset.css">
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
         integrity="sha512-...your-integrity-hash..." />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
         integrity="sha512-...your-integrity-hash..." crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="panel panel-primary">
            @if (session('status'))
              <h5 class="alert alert-success">{{ session('status')}}</h5>
            @endif
        <div class="logo">
            <h1>Book Your Appointment</h1>
            <a href="home.html" title="David T Tattoist" class="">
                <video id="logoVideo" width="100%" height="150px" autoplay loop muted>
                    <source src="frontend/img/icon.mp4" type="video/mp4">
                </video>
            </a>
            
        </div>
        <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data" id="booking-form">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="service">Service:</label>
                <select id="service" name="service" required>
                    <option value="">Select a service</option>
                   @foreach (App\Enums\Service::cases() as $style)
                        <option value="{{ $style->value }}">{{ $style->value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="datetime">Date and Time:</label>
                <input type="datetime-local" id="datetime"  name="datetime" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message"  name="message"></textarea>
</div>
            <button type="submit">Book Now</button>
        </form>
    </div>


</body>

</html>