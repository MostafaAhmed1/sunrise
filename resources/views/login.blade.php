@extends('layouts.main_layout')


@section('style')
    <style>
        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input:invalid,
        select:invalid {
            border-color: #ff5b5b;
        }

        input:valid,
        select:valid {
            border-color: #4caf50;
        }

        .error-message {
            color: #ff5b5b;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
@endsection


@section('cnt')


    <div class="mt-5 pt-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">

                    @if (session('error'))
                        <h4 class="alert alert-danger text-center">{{ session('error') }}</h4>
                    @endif

                    <form class="col-12" action="{{ route('login') }}" method="POST">

                        @csrf

                        <label for="fullName">User Name:</label>
                        <input type="text" id="fullName" name="fullName" placeholder="Enter your Name:" required>
                        <p class="error-message" id="fullNameError"></p>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>

                        <button type="submit">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
