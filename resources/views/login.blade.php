<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light grey background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #ffffff; /* White background for the card */
            max-width: 400px;
            width: 100%;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .card img {
            border-radius: 50%;
            max-width: 100px;
            height: auto;
            margin-bottom: 1rem;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .form-footer {
            text-align: center;
            margin-top: 1rem;
        }
        .form-footer a {
            color: #007bff;
            text-decoration: none;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="card text-center">
        <div class="card-body">
            <img src="asset/assets/img/logo smk3.jpeg" alt="Logo" class="img-fluid">
            <h2 class="h5 mb-4">Sign in to your account</h2>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email address" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <button class="btn btn-primary w-100" type="submit">Log in</button>
            </form>
            <div class="form-footer">
                <p class="mt-3 mb-0">Don't have an account? <a href="#!">Sign up</a></p>
            </div>
        </div>
    </div>
</body>
</html>
