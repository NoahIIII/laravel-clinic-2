@extends('adminlte::page')
@section('title','Update Users')
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
        </style>
</head>
<body>
    <x-card card="Here You can Update Users Data in the Database using ID" />
    <div class="container mt-5">
        <div class="row justify-content-center">
            @if(session('suc'))
            <div class="alert alert-success">
                {{ session('suc') }}
                @endif
            </div>
            <div class="col-md-6">

        </div>
        <form class="custom-form" action="{{ route('edituser') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-title">Edit Users Data</div>
            <div class="form-group">
                <label for="id" class="form-label">ID</label>
                @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" id="id" name="id" class="form-control" required placeholder="enter the user id you want to update">
                </div>
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" id="name" name="name" class="form-control" required placeholder="enter the  new name ">
            </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="email" id="email" name="email" class="form-control" required placeholder="enter the  new email">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" id="phone" name="phone" class="form-control" required placeholder="enter the  new phone ">
                </div>
                <div class="form-group">
                    <label for="image" class="form-label">Image</label>
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="file" id="image" name="image" class="form-control" required placeholder="enter the  new phone ">
                </div>
                <button type="submit" class="btn btn-submit">Update</button>
            </form>
        </div>
</body>
</html>
@endsection
