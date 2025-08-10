<?php $this->load->view('templates/header', ['title' => 'Progress']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'progress']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Progress Belajar</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <div class="content-header">
            <h2>Ringkasan Progress</h2>
            <a href="<?= base_url('progress/add') ?>" class="btn btn-primary">Tambah Progress</a>
        </div>
        
        <!-- Progress Summary Cards -->
        <div class="progress-summary">
            <div class="summary-card">
                <h3>Total Jam Belajar</h3>
                <p class="summary-value">0 Jam</p>
            </div>
            
            <div class="summary-card">
                <h3>Materi Selesai</h3>
                <p class="summary-value">0</p>
            </div>
            
            <div class="summary-card">
                <h3>Tugas Selesai</h3>
                <p class="summary-value">0</p>
            </div>
            
            <div class="summary-card">
                <h3>Rata-rata Progress</h3>
                <p class="summary-value">0%</p>
            </div>
        </div>
        
        <!-- Progress List -->
        <div class="progress-list">
            <h3>Riwayat Progress</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Materi/Tugas</th>
                        <th>Durasi</th>
                        <th>Progress</th>
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
