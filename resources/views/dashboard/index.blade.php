@extends('adminlte::page')
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

        .custom-card {
            background-color: rgba(49, 86, 104, 0.3);
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle box shadow */
            margin: 20px; /* Margin between cards */
            padding: 20px; /* Adjust padding for content */
            height: 180px; /* Set the height of the card */
            transition: transform 0.3s; /* Animation for scaling */
        }

        .custom-card:hover {
            transform: scale(0.95); /* Scale the card when hovered */
        }

        .inner-container {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-title {
            font-family: 'Arial', sans-serif; /* Specify a font family */
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #ffffff; /* Text color for the title */
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .btn-create,
        .btn-delete,
        .btn-update,
        .btn-view {
            width: 48%; /* Make the buttons 48% of the card width to fit two buttons side by side */
            margin-top: 10px; /* Adjust spacing between buttons */
            border-radius: 20px; /* Rounded button edges */
            background-color: #345671; /* Button color */
            opacity: 0.7; /* Transparent button (70% opacity) */
            color: #ffffff; /* Text color for buttons */
            text-align: center;
            text-decoration: none; /* Remove default underline for anchor tags */
            display: inline-block;
            padding: 10px; /* Adjust padding for buttons */
        }

        .btn {
            color: #ffffff;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="custom-card">
                <div class="inner-container">
                    <div class="card-title">Users</div>
                    <div class="btn-container">
                        <a href="{{ route('createuser') }}" class="btn btn-create">Create</a>
                        <a href="{{ route('users') }}" class="btn btn-view">View</a>
                    </div>
                    <div class="btn-container">
                        <a href="{{ route('removeuser') }}" class="btn btn-delete">Delete</a>
                        <a href="{{ route('updateuser') }}" class="btn btn-update">Update</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="custom-card">
                <div class="inner-container">
                    <div class="card-title">Doctors</div>
                    <div class="btn-container">
                        <a href="{{ route('createdoctor') }}" class="btn btn-create">Create</a>
                        <a href="{{ route('doctorsview') }}" class="btn btn-view">View</a>
                    </div>
                    <div class="btn-container">
                        <a href="{{ route('removedoctor') }}" class="btn btn-delete">Delete</a>
                        <a href="{{ route('updatedoctor') }}" class="btn btn-update">Update</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="custom-card">
                <div class="inner-container">
                    <div class="card-title">Majors</div>
                    <div class="btn-container">
                        <a href="{{ route('new_major') }}" class="btn btn-create">Create</a>
                        <a href="{{ route('majorsview') }}" class="btn btn-view">View</a>
                    </div>
                    <div class="btn-container">
                        <a href="{{ route('removemajor') }}" class="btn btn-delete">Delete</a>
                        <a href="{{ route('updatemajor') }}" class="btn btn-update">Update</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="custom-card">
                <div class="inner-container">
                    <div class="card-title">Booking</div>
                        <a href="{{ route('booking') }}" class="btn btn-view">View / Update Status</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 offset-md-3">
            <div class="custom-card">
                <div class="inner-container">
                    <div class="card-title">Contacts</div>
                        <a href="{{ route('contactsview') }}" class="btn btn-view">View / Remove</a>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
