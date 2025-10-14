<?php include("../config.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Toko Emas Mekar</title>
    <style>
        /* ==== Seluruh desain dari versi modern kamu ==== */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex; justify-content: center; align-items: center;
            min-height: 100vh; padding: 20px; position: relative; overflow: hidden;
        }
        body::before, body::after {
            content: ''; position: absolute; border-radius: 50%; animation: float 6s ease-in-out infinite;
        }
        body::before { width: 500px; height: 500px; background: rgba(255,255,255,0.1); top: -250px; right: -250px; }
        body::after { width: 400px; height: 400px; background: rgba(255,255,255,0.08); bottom: -200px; left: -200px; animation-direction: reverse; }
        @keyframes float { 0%,100%{transform:translateY(0)}50%{transform:translateY(20px)} }

        .register-wrapper { position: relative; z-index: 1; width: 100%; max-width: 440px; }
        .register-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            overflow: hidden;
            padding: 50px 40px;
            animation: slideIn 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        @keyframes slideIn { from {opacity: 0; transform: translateY(30px);} to {opacity: 1; transform: translateY(0);} }
        .logo-section { text-align: center; margin-bottom: 35px; }
        .logo-icon {
            width: 70px; height: 70px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px; display: inline-flex; align-items: center; justify-content: center;
            margin-bottom: 15px; box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
            animation: pulse 2s ease-in-out infinite;
        }
        @keyframes pulse { 0%,100%{transform:scale(1)} 50%{transform:scale(1.05)} }
        .logo-icon::before { content: '✨'; font-size: 32px; }
        h2 { color: #2d3748; font-size: 28px; font-weight: 700; margin-bottom: 8px; }
        .subtitle { color: #718096; font-size: 14px; margin-bottom: 30px; }

        .input-group { margin-bottom: 20px; position: relative; }
        .input-group label { display: block; color: #4a5568; font-size: 14px; font-weight: 600; margin-bottom: 8px; }
        input {
            width: 100%; padding: 14px 16px; border-radius: 12px;
            border: 2px solid #e2e8f0; font-size: 15px; transition: all 0.3s ease; background: #fff;
        }
        input:focus { outline: none; border-color: #667eea; box-shadow: 0 0 0 3px rgba(102,126,234,0.1); }

        .password-box { position: relative; }
        .password-box input { padding-right: 45px; }
        .toggle-password {
            position: absolute; right: 14px; top: 50%; transform: translateY(-50%);
            cursor: pointer; font-size: 20px; user-select: none; transition: transform 0.2s;
        }
        .toggle-password:hover { transform: translateY(-50%) scale(1.1); }

        button {
            width: 100%; padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff; font-weight: 600; font-size: 16px;
            border: none; border-radius: 12px; cursor: pointer; margin-top: 10px;
            transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(102,126,234,0.4);
        }
        button:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(102,126,234,0.6); }

        .link-box { text-align: center; margin-top: 25px; padding-top: 25px; border-top: 1px solid #e2e8f0; }
        .link-box a { color: #667eea; text-decoration: none; font-weight: 600; cursor: pointer; }
        .link-box a:hover { color: #764ba2; text-decoration: underline; }

        .password-requirements {
            background: #edf2f7; padding: 12px; border-radius: 8px;
            margin-top: 8px; font-size: 12px; color: #4a5568;
        }
        .password-requirements ul { margin: 5px 0 0 20px; padding: 0; }
        .password-requirements li { margin: 3px 0; transition: color 0.3s; }
        .requirement-met { color: #2f855a; font-weight: 600; }
    </style>
</head>
<body>
    <div class="register-wrapper">
        <div class="register-container">
            <div class="logo-section">
                <div class="logo-icon"></div>
                <h2>Buat Akun Baru</h2>
                <p class="subtitle">Daftar untuk memulai perjalanan Anda</p>
            </div>

            <!-- ALERT PHP -->
            <?php if (isset($_GET['error'])): ?>
                <script>alert("❌ <?= $_GET['error']; ?>");</script>
            <?php endif; ?>
            <?php if (isset($_GET['success'])): ?>
                <script>alert("✅ <?= $_GET['success']; ?>");</script>
            <?php endif; ?>

            <!-- FORM SEBENARNYA -->
            <form method="POST" action="proses_register.php" onsubmit="return validatePassword()">
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Pilih username unik" required>
                </div>

                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="nama@email.com" required>
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <div class="password-box">
                        <input type="password" name="password" id="regPassword" placeholder="Buat password yang kuat" required oninput="checkPasswordStrength()">
                        <span class="toggle-password" onclick="togglePassword('regPassword')">👁️</span>
                    </div>
                    <div class="password-requirements">
                        <strong>Password harus memenuhi:</strong>
                        <ul>
                            <li id="req-length">Minimal 6 karakter</li>
                            <li id="req-letter">Mengandung huruf</li>
                            <li id="req-number">Mengandung angka</li>
                        </ul>
                    </div>
                </div>

                <div class="input-group">
                    <label>Konfirmasi Password</label>
                    <div class="password-box">
                        <input type="password" name="confirm_password" id="confirmPassword" placeholder="Ketik ulang password" required>
                        <span class="toggle-password" onclick="togglePassword('confirmPassword')">👁️</span>
                    </div>
                </div>

                <button type="submit">Daftar Sekarang</button>
            </form>

            <div class="link-box">
                <p>Sudah punya akun? <a href="../Login/login.php">Masuk Sekarang</a></p>
            </div>
        </div>
    </div>

    <script>
        // === SHOW/HIDE PASSWORD ===
        function togglePassword(id) {
            const field = document.getElementById(id);
            const icon = field.nextElementSibling;
            if (field.type === "password") {
                field.type = "text";
                icon.textContent = "🙈";
            } else {
                field.type = "password";
                icon.textContent = "👁️";
            }
        }

        // === VALIDASI PASSWORD (huruf+angka+konfirmasi) ===
        function validatePassword() {
            const pass = document.getElementById('regPassword').value;
            const confirm = document.getElementById('confirmPassword').value;
            const hasLength = pass.length >= 6;
            const hasLetter = /[A-Za-z]/.test(pass);
            const hasNumber = /\d/.test(pass);

            document.getElementById('req-length').className = hasLength ? 'requirement-met' : '';
            document.getElementById('req-letter').className = hasLetter ? 'requirement-met' : '';
            document.getElementById('req-number').className = hasNumber ? 'requirement-met' : '';

            if (!hasLength || !hasLetter || !hasNumber) {
                alert("❌ Password harus minimal 6 karakter dan mengandung huruf serta angka!");
                return false;
            }
            if (pass !== confirm) {
                alert("❌ Password dan konfirmasi password tidak cocok!");
                return false;
            }
            return true;
        }

        // === CEK KEKUATAN PASSWORD (visual bar) ===
        function checkPasswordStrength() {
            const pass = document.getElementById('regPassword').value;
            const hasLength = pass.length >= 6;
            const hasLetter = /[A-Za-z]/.test(pass);
            const hasNumber = /\d/.test(pass);

            document.getElementById('req-length').className = hasLength ? 'requirement-met' : '';
            document.getElementById('req-letter').className = hasLetter ? 'requirement-met' : '';
            document.getElementById('req-number').className = hasNumber ? 'requirement-met' : '';
        }
    </script>
</body>
</html>
