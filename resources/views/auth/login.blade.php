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
                    <h2>Login</h2>
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <span>{{ $message }}</span>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login_post') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit" style="color: white">Login</button>
                    </form>
                </div>
            </section>
        </div>
    </div>


    <!-- ================ Login section end ================= -->
@endsection
