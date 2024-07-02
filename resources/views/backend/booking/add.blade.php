<!DOCTYPE html>
<html>
<head>
    <title>Registration Form * Form Tutorial</title>
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
                <h2 class="text-center">Add New Booking
                    <a href="{{ route('booking.customer')}}" class="btn btn-danger float-end">BACK</a>
                </h2>
            </div>
            <div class="panel-body">
                <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input required="true" type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="image">Ảnh tác phẩm:</label>
                        <input required="true" type="file" class="form-control" id="image" name="image" multiple>
                    </div>
                    <div class="form-group">
                        <div class="check-in-out">
                            <div class="input-group">
                                <label for="start_datetime">Start Datetime</label>
                                <input type="datetime-local" id="start_datetime" autocomplete="off" class="date-picker" name="start_datetime" placeholder="YYYY-MM-DD HH:MM:SS">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <strong>Style Customer:</strong>
                        <select class="form-select" name="style_customer">
                            <option selected>Choose...</option>
                            @foreach (App\Enums\StyleCustomer::cases() as $style)
                                <option value="{{ $style->value }}">{{ $style->value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Social Type:</strong>
                        <select class="form-select" name="social_type">
                            <option selected>Choose...</option>
                            @foreach (App\Enums\SocialType::cases() as $social)
                                <option value="{{ $social->value }}">{{ $social->value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact:</label>
                        <input required="true" type="text" class="form-control" id="contact" name="contact">
                    </div>
                    <div class="form-group">
                        <strong>Status Payment:</strong>
                        <select class="form-select" name="status_payment">
                            <option selected>Choose...</option>
                            @foreach (App\Enums\StatusPayment::cases() as $status)
                                <option value="{{ $status->value }}">{{ $status->value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Add</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="vendors/scripts/bookingadmin.js"></script>
</body>
</html>
