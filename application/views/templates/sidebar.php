<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-header">
        <h3>Progress Belajar</h3>
    </div>
    
    <nav class="sidebar-nav">
        <a href="<?= base_url('dashboard') ?>" class="nav-item <?= $active_menu == 'dashboard' ? 'active' : '' ?>">Dashboard</a>
        <a href="<?= base_url('materi') ?>" class="nav-item <?= $active_menu == 'materi' ? 'active' : '' ?>">Materi</a>
        <a href="<?= base_url('tugas') ?>" class="nav-item <?= $active_menu == 'tugas' ? 'active' : '' ?>">Tugas</a>
        <a href="<?= base_url('progress') ?>" class="nav-item <?= $active_menu == 'progress' ? 'active' : '' ?>">Progress</a>
        <a href="<?= base_url('jadwal') ?>" class="nav-item <?= $active_menu == 'jadwal' ? 'active' : '' ?>">Jadwal</a>
        <a href="<?= base_url('pengaturan') ?>" class="nav-item <?= $active_menu == 'pengaturan' ? 'active' : '' ?>">Pengaturan</a>
    </nav>
    
    <div class="sidebar-footer">
        <a href="<?= base_url('auth/logout') ?>" class="nav-item">Keluar</a>
    </div>
</div>

<!-- Mobile Menu Toggle -->
<button class="mobile-menu-toggle" onclick="toggleSidebar()">☰</button>
