<!DOCTYPE html>
<style>
    @import url('https://unpkg.com/css.gg@2.0.0/icons/css/arrow-left.css');
.container {
    display: flex;
    align-items: center; /* Center items vertically */
    justify-content: center; /* Center items horizontally */
    margin: 20px auto;
    max-width: 800px;
}

/* Styles for the card */
.custom-card {
    background-color: #c2c7d0;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 48%;
}


.card-text {
    font-family: 'Arial', sans-serif;
    font-size: 14px;
    color: #ffffff;
    text-align: center;
}


.btn-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .btn-users,
        .btn-doctors,
        .btn-majors,
        .btn-contact,
        .btn-booking,
        .btn-dashboard,
        .btn-view {
            width: 48%; /* Make the buttons 48% of the card width to fit two buttons side by side */
            margin-top: 10px; /* Adjust spacing between buttons */
            border-radius: 20px; /* Rounded button edges */
            background-color: #81868a; /* Button color */
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
        <div class="container">
    <div class="custom-card">
        <div class="card-text">
            {{ $card }}
            <div class="btn-container">
                <a href="{{ route('dashboard') }}" class="btn btn-dashboard"> Back to Dashboard</a>
            </div>
        </div>
    </div>
    </div>
