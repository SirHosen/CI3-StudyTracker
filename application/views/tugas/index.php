<?php $this->load->view('templates/header', ['title' => 'Tugas']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'tugas']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Tugas</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <div class="content-header">
            <h2>Daftar Tugas</h2>
            <a href="<?= base_url('tugas/add') ?>" class="btn btn-primary">Tambah Tugas</a>
        </div>
        
        <div class="table-wrapper">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tugas</th>
                        <th>Mata Pelajaran</th>
                        <th>Deadline</th>
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
