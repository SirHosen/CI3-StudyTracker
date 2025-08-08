<?php $this->load->view('templates/header', ['title' => 'Edit Materi']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'materi']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Edit Materi</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <div class="form-card">
            <form action="<?= base_url('materi/update/'.$id) ?>" method="POST">
                <div class="form-group">
                    <label for="judul">Judul Materi</label>
                    <input type="text" id="judul" name="judul" value="" required>
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
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
