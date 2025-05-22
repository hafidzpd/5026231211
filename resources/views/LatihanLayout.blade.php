<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Page</title>

        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;

        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 50px;
            background: #fff;
            border-radius: 8px;
            text-align: center;
        }
        .logo {
            width: 150px;
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 10px;
        }
        .input-group-custom {
            position: relative;
            margin-bottom: 15px;
        }

        .input-group-custom .form-control {
            padding-left: 45px; /* biar ada space buat icon */
        }

        .form-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            opacity: 0.5;
        }
        .error-text {
            color: red;
            font-size: 0.9em;
            text-align: left;
        }
        .btn {
            background-color: #343a40;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 30px;
            width: 50%;
            cursor: pointer;
        }
        .a {
            color: black !important;
            text-decoration: none;
}
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: grey;
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            padding: 15px;
            color: white;
        }
        </style>
    </head>
    <body>

        <div class="login-container">
            <img src="foto/Logo CekDong 1.png" alt="Cek Dong Logo" class="logo">

            <div class="input-group-custom">
                <img src="foto/username.jpeg" alt="User Icon" class="form-icon">
                <input type="text" class="form-control" placeholder="Username">
            </div>
            
            <div class="input-group-custom">
                <img src="foto/password.jpeg" alt="Password Icon" class="form-icon">
                <input type="password" class="form-control" placeholder="Password">
            </div>
            
            <p class="error-text">Wrong Password!</p>
            <button class="btn">Login</button>
            <p><a href="#" style="color: black;">Forgot Password</a></p>
            <p><a href="#" style="color: black;">Login As Teknisi</a></p>
            
        </div>
        <p class="footer">Don't have an account yet? <a href="#">Create
            New</a></p>

    </body>
</html>