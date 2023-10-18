@extends('adminlte::page')
@section('title','create user')
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

        .container {
        display: flex;
        align-items: flex-start; /* Align items to the start (top) of the flex container */
        justify-content: space-between; /* Add space between the form and card */
        margin: 20px auto; /* Adjust margin for spacing */
        max-width: 800px; /* Set a maximum width for the container */
    }


        .custom-form {
            background-color: #c2c7d0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 0 auto; /* Center the form */
            padding: 20px;
            width: 300px;
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


        .custom-form {
            background-color: #c2c7d0;
            margin: 0 auto;
            padding: 20px;
            float: right;

        background-color: #c2c7d0;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 48%; /* Set width for the form */


        }
        </style>
</head>
<body>

</div>
<x-card card="Here You can Add Doctors to the Database" />
</div>
    <div class="container mt-5">
    <div class="row justify-content-center">
        @if(session('suc'))
        <div class="alert alert-success">
            {{ session('suc') }}
            @endif
        </div>
        <div class="col-md-6">

        </div>
        <form class="custom-form" action="{{ route('new_doctor') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-title">Create New Doctor</div>
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="major_id" class="form-label">Major ID</label>
                    @error('major_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" id="major_id" name="major_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="bio" class="form-label">bio</label>
                    @error('bio')
                    <div class="alert alert-danger">{{ $message }}</div>bio
                    @enderror
                    <input type="text" id="bio" name="bio" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image" class="form-label">image</label>
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>image
                    @enderror
                    <input type="file" id="image" name="image" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-submit">Submit</button>
            </form>
        </div>
</body>
</html>
@endsection
