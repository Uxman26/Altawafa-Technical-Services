@extends('layout.app')
@section('section')
    <style>
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
    <!-- ================ Login section start ================= -->
    <div id="main" class="main-section">
        <div id="fullwidth" class="main-fullwidth main-col-full">
            <section class="wpb-content-wrapper">
                <div class="login-container">
                    <h2>Update Profile</h2>
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <span>{{ $message }}</span>
                        </div>
                        @elseif ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <span>{{ $message }}</span>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('update_profile') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" value="{{auth()->user()->name}}" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" value="{{auth()->user()->email}}" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Update Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="number">Phone Number</label>
                            <input type="text" id="number" value="{{auth()->user()->number}}" name="number" required>
                        </div>
                        <div class="form-group">
                            <label for="contact_email">Contact Email</label>
                            <input type="contact_email" id="contact_email" value="{{auth()->user()->contact_email}}" name="contact_email" required>
                        </div>
                        <button type="submit" style="color: white">Update</button>
                    </form>
                </div>
            </section>
        </div>
    </div>


    <!-- ================ Login section end ================= -->
@endsection
