<?php $this->load->view('templates/header', ['title' => 'Materi']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'materi']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Materi</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <div class="content-header">
            <h2>Daftar Materi</h2>
            <a href="<?= base_url('materi/add') ?>" class="btn btn-primary">Tambah Materi</a>
        </div>
        
        <div class="table-wrapper">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Materi</th>
                        <th>Kategori</th>
                        <th>Status</th>
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
