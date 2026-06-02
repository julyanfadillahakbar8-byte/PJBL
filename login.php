<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/auth.php';

if (admin_logged_in()) {
    header('Location: admin.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Username dan password wajib diisi.';
    } else {
        try {
            $stmt = db()->prepare('SELECT * FROM admin_users WHERE username = :username LIMIT 1');
            $stmt->execute(['username' => $username]);
            $admin = $stmt->fetch();

            if ($admin && password_verify($password, $admin['password_hash'])) {
                session_regenerate_id(true);
                $_SESSION['admin_id'] = (int)$admin['id'];
                $_SESSION['admin_name'] = $admin['name'];
                header('Location: admin.php');
                exit;
            }

            $error = 'Username atau password salah.';
        } catch (Throwable $exception) {
            $error = 'Database belum siap. Import file database/karyanusa.sql terlebih dahulu.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Admin - KaryaNusa</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Lato:wght@400;600;700;800&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<link rel="stylesheet" href="login.css"/>
<link rel="stylesheet" href="responsive.css"/>
</head>
<body>
  <main class="login-page">
    <section class="login-visual">
      <a href="index.php" class="brand">Karya<span>Nusa</span></a>
      <div>
        <p class="eyebrow">Area Admin</p>
        <h1>Masuk untuk mengelola katalog kerajinan Nusantara.</h1>
      </div>
    </section>

    <section class="login-panel">
      <form method="post" class="login-card">
        <div class="login-head">
          <p class="eyebrow">Login</p>
          <h2>Admin KaryaNusa</h2>
          <p>Gunakan akun admin yang ada di database.</p>
        </div>

        <?php if ($error !== ''): ?>
          <div class="alert"><i class="fas fa-circle-exclamation"></i><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>

        <label>Username
          <input type="text" name="username" autocomplete="username" required placeholder="username"/>
        </label>
        <label>Password
          <input type="password" name="password" autocomplete="current-password" required placeholder="masukkan password"/>
        </label>
        <button type="submit"><i class="fas fa-right-to-bracket"></i> Masuk Dashboard</button>
        <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Kembali ke website</a>
      </form>
    </section>
  </main>
</body>
</html>
