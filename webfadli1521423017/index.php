<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #D1E8E2, #85a947);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            transform: scale(0.9);
            opacity: 0;
            animation: fadeIn 0.6s ease-in-out forwards;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        /* body.swal2-height-auto {
            height: 100vh !important;
        } */

        .login-container {
            background: #efe3c2;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3), 
                -5px -5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            transition: transform 0.3s ease;
        }

        @keyframes fadeIn {
            form {
                transform: scale(0.7);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .login-container:hover {
            transform: scale(1.05);
            box-shadow: 8px 8px 20px rgba(0, 0, 0, 0.4), 
                -8px -8px 20px rgba(0, 0, 0, 0.4);
        }

        .login-container img {
            width: 250px;
        }

        .login-container h2 {
            margin-top: 20px;
            margin-bottom: 20px;
            color: #333;
        }

        .login-container input {
            width: 330px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            background:rgb(226, 225, 221);
            border-radius: 20px;
        }

        .login-container button {
            width: 350px;
            padding: 10px;
            margin: 10px;
            background: #85a947;
            border: none;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .login-container button:hover {
            background: #123524;
        }

        .login-container input:hover {
            background: rgb(206, 204, 199);
        }

        .login-container input:not(:placeholder-shown) {
            background: rgb(206, 204, 199);
        }

        .login-container input:-webkit-autofill,
        .login-container input:-webkit-autofill:hover, 
        .login-container input:-webkit-autofill:focus, 
        .login-container input:-webkit-autofill:active {
            background: rgb(206, 204, 199);
            color: #000;
            -webkit-box-shadow: 0 0 0px 1000px rgb(206, 204, 199) inset;
            transition: background-color 5000s ease-in-out 0s;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        } 
    </style>
</head>
<body>
    
    <div class="login-container">
        <img src="Logo.png" alt="Logo">
        <h2>Welcome Back!</h2>
        <form action="include/login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "showDuration": "500",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>

    <?php if (isset($_SESSION['error'])): ?>
        <script>
            toastr.error("<?php echo $_SESSION['error']; ?>");
        </script>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
        <script>
            toastr.success("<?php echo $_SESSION['success']; ?>");
        </script>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>
    
</body>
</html>