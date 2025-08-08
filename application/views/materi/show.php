<?php $this->load->view('templates/header', ['title' => 'Detail Materi']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'materi']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Detail Materi</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <div class="detail-card">
            <div class="detail-header">
                <h2>Judul Materi</h2>
                <div class="detail-actions">
                    <a href="<?= base_url('materi/edit/'.$id) ?>" class="btn btn-secondary">Edit</a>
                    <a href="<?= base_url('materi') ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            
            <div class="detail-body">
                <div class="detail-item">
                    <label>Kategori:</label>
                    <p>-</p>
                </div>
                
                <div class="detail-item">
                    <label>Status:</label>
                    <p>-</p>
                </div>
                
                <div class="detail-item">
                    <label>Deskripsi:</label>
                    <p>-</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
