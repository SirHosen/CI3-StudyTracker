<?php $this->load->view('templates/header', ['title' => 'Tambah Materi']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'materi']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Tambah Materi</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <div class="form-card">
            <form action="<?= base_url('materi/store') ?>" method="POST">
                <div class="form-group">
                    <label for="judul">Judul Materi</label>
                    <input type="text" id="judul" name="judul" required>
                </div>
                
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" name="kategori" required>
                        <option value="">Pilih Kategori</option>
                        <option value="programming">Programming</option>
                        <option value="database">Database</option>
                        <option value="design">Design</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4"></textarea>
                </div>
                
                <div class="form-actions">
                    <a href="<?= base_url('materi') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
