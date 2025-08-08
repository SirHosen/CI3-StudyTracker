<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Progress Belajar</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css') ?>">
</head>
<body>

	<?php if ($this->session->flashdata('error')): ?>
		<div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 15px;">
			<?= $this->session->flashdata('error'); ?>
		</div>
	<?php endif; ?>

	<?php if ($this->session->flashdata('success')): ?>
		<div style="color: green; border: 1px solid green; padding: 10px; margin-bottom: 15px;">
			<?= $this->session->flashdata('success'); ?>
		</div>
	<?php endif; ?>

    <div class="container">
        <div class="auth-box">
            <h2>Masuk</h2>
            
            <form method="post" action="<?= base_url('auth/login') ?>">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                
                <button type="submit" class="btn-submit">Masuk</button>
            </form>
            
             <p class="link-text">
   			 Belum punya akun? <a href="<?= base_url('register') ?>">Daftar</a>
			</p>

            <a href="<?= base_url() ?>" class="btn-back">⬅ Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>
