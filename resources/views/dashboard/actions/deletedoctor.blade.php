@extends('adminlte::page')
@section('title','Delete doctor')
@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style>
            body {
                background-color: #f8f9fa; /* Background color for the entire page */
            }

            .custom-form {
                background-color: #c2c7d0; /* Form background color */
                border-radius: 10px; /* Rounded corners */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle box shadow */
                margin: 20px; /* Margin around the form */
                padding: 20px; /* Adjust padding for content */
                width: 300px; /* Set the width of the form */
            }

            .form-title {
                font-family: 'Arial', sans-serif; /* Specify a font family */
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 20px;
                color: #ffffff; /* Text color for the title */
                text-align: center;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-label {
                font-size: 14px;
                font-weight: bold;
                color: #ffffff; /* Text color for labels */
            }

            .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ffffff; /* Border color for input fields */
            border-radius: 5px; /* Rounded corners for input fields */
        }

        .form-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ffffff; /* Border color for select field */
            border-radius: 5px; /* Rounded corners for select field */
        }

        .btn-submit {
            width: 100%;
            border-radius: 20px; /* Rounded button edges */
            background-color: #c2c7d0; /* Button color */
            opacity: 0.7; /* Transparent button (70% opacity) */
            color: #ffffff; /* Text color for buttons */
            text-align: center;
            text-decoration: none; /* Remove default underline for anchor tags */
            display: inline-block;
            padding: 10px; /* Adjust padding for buttons */
        }
        .custom-card {
            background-color: #c2c7d0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            width: 400px;
        }

        .card-text {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            color: #ffffff;
            text-align: center;
        }

        .custom-form {
            background-color: #c2c7d0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            width: 300px;
            float: right;
        }
        </style>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <x-card card="Delete the doctor by ID, Make sure that the id exists"/>
            <div class="col-md-6">
                @if(session('suc'))
                <div class="alert alert-success">
                    {{ session('suc') }}
                    @endif
                </div>
                <form class="custom-form" action="{{ route('destroydoctor') }}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="form-title">Remove doctor</div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="id" class="form-label">ID</label>
                            @error('id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                        <input type="id" id="id" name="id" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-submit">Remove doctor</button>
                </form>
            </div>
        </div>
</div>
</body>
</html>

@endsection
