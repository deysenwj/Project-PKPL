<?php include("../config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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

        .auth-container {
            position: relative;
            width: 400px;
            height: 440px;
            background: #fff;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            border-radius: 12px;
            overflow: hidden;
        }

        .slide-box {
            position: absolute;
            width: 100%;
            height: 100%;
            padding: 30px;
            box-sizing: border-box;
            transition: transform 0.5s ease-in-out;
        }

        .slide-box.hidden {
            transform: translateX(-100%);
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

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }

        /* Efek fade masuk register */
        .slide-box.slide-in {
            transform: translateX(0);
        }
    </style>
</head>
<body>

    <div class="auth-container">
        <!-- LOGIN -->
        <div class="slide-box" id="loginBox">
            <h2>Login</h2>
            <?php if (isset($_GET['error'])): ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php endif; ?>
            <form method="POST" action="proses_login.php">
                <input type="text" name="username" placeholder="Username / Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Masuk</button>
            </form>
            <div class="link-box">
                <p>Belum punya akun? <a id="toRegister">Daftar</a></p>
            </div>
        </div>

        <!-- REGISTER SLIDE -->
        <div class="slide-box hidden" id="registerSlide">
            <iframe src="../Register/register.php" style="width:100%;height:100%;border:none;"></iframe>
        </div>
    </div>

    <script>
        const loginBox = document.getElementById('loginBox');
        const registerSlide = document.getElementById('registerSlide');
        const toRegister = document.getElementById('toRegister');

        toRegister.addEventListener('click', () => {
            loginBox.classList.add('hidden');
            registerSlide.classList.remove('hidden');
            registerSlide.classList.add('slide-in');
        });
    </script>
</body>
</html>
