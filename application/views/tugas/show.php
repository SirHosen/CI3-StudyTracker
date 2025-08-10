<?php $this->load->view('templates/header', ['title' => 'Detail Tugas']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'tugas']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Detail Tugas</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <div class="detail-card">
            <div class="detail-header">
                <h2>Nama Tugas</h2>
                <div class="detail-actions">
                    <a href="<?= base_url('tugas/edit/'.$id) ?>" class="btn btn-secondary">Edit</a>
                    <a href="<?= base_url('tugas') ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            
            <div class="detail-body">
                <div class="detail-item">
                    <label>Mata Pelajaran:</label>
                    <p>-</p>
                </div>
                
                <div class="detail-item">
                    <label>Deadline:</label>
                    <p>-</p>
                </div>
                
                <div class="detail-item">
                    <label>Prioritas:</label>
                    <p>-</p>
                </div>
                
                <div class="detail-item">
                    <label>Status:</label>
                    <p>-</p>
                </div>
                
                <div class="detail-item">
                    <label>Keterangan:</label>
                    <p>-</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
