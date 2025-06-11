<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin - Isbon</title>
    <link rel="stylesheet" href="../asset/style.css">
</head>
<body>
    <h2>Login Admin</h2>
    <form method="post" action="login_admin.php" id="formLogin">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>

    <div id="msg" style="color:red;"></div>

    <script>
    document.getElementById('formLogin').onsubmit = async function(e) {
        e.preventDefault();
        const form = new FormData(this);
        const res = await fetch('login_admin.php', {
            method: 'POST',
            body: form
        });
        const data = await res.json();
        if (data.status === 'success') {
            window.location.href = 'dashboard.php';
        } else {
            document.getElementById('msg').innerText = data.message;
        }
    };
    </script>
</body>
</html>
