<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url("img/coffee.jpg");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative; /* Untuk overlay */
        }

        /* Overlay untuk menggelapkan background utama */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Warna hitam dengan opacity 50% */
            z-index: 1; /* Pastikan overlay di atas background */
        }

        .login-container {
            display: flex;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 800px;
            position: relative; /* Untuk memastikan container di atas overlay */
            z-index: 2; /* Pastikan container di atas overlay */
        }

        .login-image {
            flex: 1;
            background-image: url("img/kopilife.jpg"); /* Ganti dengan gambar Anda */
            background-size: cover;
            background-position: 28% 31%; /* Geser gambar 20% ke kanan dan 50% ke bawah */
        }

        .login-form {
            flex: 1;
            padding: 2rem;
        }

        .login-form h2 {
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 5px;
            padding: 0.75rem;
            margin-bottom: 1rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 0.75rem;
            border-radius: 5px;
            width: 100%;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .signup-link {
            text-align: center;
            margin-top: 1rem;
        }

        .signup-link a {
            color: #007bff;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-image"></div>
        <div class="login-form">
            <h2>Welcome To Cafe Code</h2>
            <form method="post" action="login.php">
                <div class="form-group">
                    <input type="text" class="form-control" id="InputUsername" name="txtusername" placeholder="Enter Username...">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="InputPassword" name="txtpassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>