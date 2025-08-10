<?php $this->load->view('templates/header', ['title' => 'Edit Tugas']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'tugas']); ?>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header class="header">
        <h1>Edit Tugas</h1>
        <div class="user-info">
            <span class="user-avatar">U</span>
        </div>
    </header>

    <!-- Content Area -->
    <div class="content-area">
        <div class="form-card">
            <form action="<?= base_url('tugas/update/'.$id) ?>" method="POST">
                <div class="form-group">
                    <label for="nama_tugas">Nama Tugas</label>
                    <input type="text" id="nama_tugas" name="nama_tugas" value="" required>
                </div>
                
                <div class="form-group">
                    <label for="mata_pelajaran">Mata Pelajaran</label>
                    <input type="text" id="mata_pelajaran" name="mata_pelajaran" value="" required>
                </div>
                
                <div class="form-group">
                    <label for="deadline">Deadline</label>
                    <input type="date" id="deadline" name="deadline" value="" required>
                </div>
                
                <div class="form-group">
                    <label for="prioritas">Prioritas</label>
                    <select id="prioritas" name="prioritas">
                        <option value="rendah">Rendah</option>
                        <option value="sedang">Sedang</option>
                        <option value="tinggi">Tinggi</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        <option value="belum">Belum Dikerjakan</option>
                        <option value="proses">Sedang Dikerjakan</option>
                        <option value="selesai">Selesai</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" rows="4"></textarea>
                </div>
                
                <div class="form-actions">
                    <a href="<?= base_url('tugas') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
