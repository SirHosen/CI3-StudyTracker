<?php $this->load->view('templates/header', ['title' => 'Jadwal']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'jadwal']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Jadwal Belajar</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <div class="content-header">
            <h2>Jadwal Mingguan</h2>
            <a href="<?= base_url('jadwal/add') ?>" class="btn btn-primary">Tambah Jadwal</a>
        </div>
        
        <!-- Calendar View -->
        <div class="calendar-wrapper">
            <table class="calendar-table">
                <thead>
                    <tr>
                        <th>Waktu</th>
                        <th>Senin</th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                        <th>Kamis</th>
                        <th>Jumat</th>
                        <th>Sabtu</th>
                        <th>Minggu</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Jadwal akan ditampilkan di sini -->
                </tbody>
            </table>
        </div>
        
        <!-- List View -->
        <div class="jadwal-list">
            <h3>Daftar Jadwal</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Kegiatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data akan ditampilkan di sini -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
