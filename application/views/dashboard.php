<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Progress Belajar</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h3>Progress Belajar</h3>
        </div>
        
        <nav class="sidebar-nav">
            <a href="#" class="nav-item active">Dashboard</a>
            <a href="#" class="nav-item">Materi</a>
            <a href="#" class="nav-item">Tugas</a>
            <a href="#" class="nav-item">Progress</a>
            <a href="#" class="nav-item">Jadwal</a>
        </nav>
        
        <div class="sidebar-footer">
            <a href="<?= base_url('welcome') ?>" class="nav-item">Keluar</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header class="header">
            <h1>Dashboard</h1>
            <div class="user-info">
                <span class="user-avatar">U</span>
            </div>
        </header>

        <!-- Content Area -->
        <div class="content-area">
            <!-- Konten dashboard akan ditampilkan di sini -->
        </div>
    </div>

    <!-- Mobile Menu Toggle -->
    <button class="mobile-menu-toggle" onclick="toggleSidebar()">☰</button>

    <script>
        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('active');
        }
    </script>
</body>
</html>
