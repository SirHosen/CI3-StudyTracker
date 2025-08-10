<?php $this->load->view('templates/header', ['title' => 'Pengaturan']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'pengaturan']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Pengaturan</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <!-- Profile Settings -->
        <div class="settings-section">
            <h2>Profil Pengguna</h2>
            <form action="<?= base_url('pengaturan/update_profile') ?>" method="POST">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" value="">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="">
                </div>
                
                <div class="form-group">
                    <label for="telepon">No. Telepon</label>
                    <input type="tel" id="telepon" name="telepon" value="">
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan Profil</button>
            </form>
        </div>
        
        <!-- Password Settings -->
        <div class="settings-section">
            <h2>Ubah Password</h2>
            <form action="<?= base_url('pengaturan/update_password') ?>" method="POST">
                <div class="form-group">
                    <label for="password_lama">Password Lama</label>
                    <input type="password" id="password_lama" name="password_lama" required>
                </div>
                
                <div class="form-group">
                    <label for="password_baru">Password Baru</label>
                    <input type="password" id="password_baru" name="password_baru" required>
                </div>
                
                <div class="form-group">
                    <label for="konfirmasi_password">Konfirmasi Password Baru</label>
                    <input type="password" id="konfirmasi_password" name="konfirmasi_password" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Ubah Password</button>
            </form>
        </div>
        
        <!-- Notification Settings -->
        <div class="settings-section">
            <h2>Notifikasi</h2>
            <form action="<?= base_url('pengaturan/update_notification') ?>" method="POST">
                <div class="form-check">
                    <input type="checkbox" id="notif_email" name="notif_email">
                    <label for="notif_email">Kirim notifikasi melalui email</label>
                </div>
                
                <div class="form-check">
                    <input type="checkbox" id="notif_deadline" name="notif_deadline">
                    <label for="notif_deadline">Ingatkan deadline tugas</label>
                </div>
                
                <div class="form-check">
                    <input type="checkbox" id="notif_jadwal" name="notif_jadwal">
                    <label for="notif_jadwal">Ingatkan jadwal belajar</label>
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
