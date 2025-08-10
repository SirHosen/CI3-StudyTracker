<?php $this->load->view('templates/header', ['title' => 'Tambah Jadwal']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'jadwal']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Tambah Jadwal</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <div class="form-card">
            <form action="<?= base_url('jadwal/store') ?>" method="POST">
                <div class="form-group">
                    <label for="hari">Hari</label>
                    <select id="hari" name="hari" required>
                        <option value="">Pilih Hari</option>
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</option>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="waktu_mulai">Waktu Mulai</label>
                    <input type="time" id="waktu_mulai" name="waktu_mulai" required>
                </div>
                
                <div class="form-group">
                    <label for="waktu_selesai">Waktu Selesai</label>
                    <input type="time" id="waktu_selesai" name="waktu_selesai" required>
                </div>
                
                <div class="form-group">
                    <label for="kegiatan">Kegiatan</label>
                    <input type="text" id="kegiatan" name="kegiatan" required>
                </div>
                
                <div class="form-group">
                    <label for="pengulangan">Pengulangan</label>
                    <select id="pengulangan" name="pengulangan">
                        <option value="sekali">Sekali</option>
                        <option value="mingguan">Setiap Minggu</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" rows="3"></textarea>
                </div>
                
                <div class="form-actions">
                    <a href="<?= base_url('jadwal') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
