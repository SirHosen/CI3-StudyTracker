<?php $this->load->view('templates/header', ['title' => 'Tambah Progress']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'progress']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Tambah Progress</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <div class="form-card">
            <form action="<?= base_url('progress/store') ?>" method="POST">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" required>
                </div>
                
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select id="jenis" name="jenis" required>
                        <option value="">Pilih Jenis</option>
                        <option value="materi">Materi</option>
                        <option value="tugas">Tugas</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" id="nama_kegiatan" name="nama_kegiatan" required>
                </div>
                
                <div class="form-group">
                    <label for="durasi">Durasi (menit)</label>
                    <input type="number" id="durasi" name="durasi" min="1" required>
                </div>
                
                <div class="form-group">
                    <label for="progress">Progress (%)</label>
                    <input type="number" id="progress" name="progress" min="0" max="100" required>
                </div>
                
                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <textarea id="catatan" name="catatan" rows="4"></textarea>
                </div>
                
                <div class="form-actions">
                    <a href="<?= base_url('progress') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
