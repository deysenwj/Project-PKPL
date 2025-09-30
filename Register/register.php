<?php include("../config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            margin: 0;
        }

        .register-box {
            background: #fff;
            width: 400px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            transform: translateX(100%);
            animation: slideIn 0.5s forwards;
        }

        @keyframes slideIn {
            from { transform: translateX(100%); }
            to { transform: translateX(0); }
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #e6b400;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 5px;
            transition: background 0.3s;
        }

        button:hover {
            background: #d19e00;
        }

        .link-box {
            text-align: center;
            margin-top: 15px;
        }

        .link-box a {
            color: #e6b400;
            text-decoration: none;
            cursor: pointer;
        }

        .link-box a:hover {
            text-decoration: underline;
        }

        .error { color: red; text-align: center; }
        .success { color: green; text-align: center; }
    </style>
</head>
<body>

    <div class="register-box">
        <h2>Daftar Akun</h2>
        <?php if (isset($_GET['error'])): ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php endif; ?>
        <?php if (isset($_GET['success'])): ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php endif; ?>
        <form method="POST" action="proses_register.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
            <button type="submit">Daftar</button>
        </form>
        <div class="link-box">
            <p>Sudah punya akun? <a href="../Login/login.php">Login</a></p>
        </div>
    </div>

</body>
</html>
