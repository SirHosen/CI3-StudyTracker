<?php $this->load->view('templates/header', ['title' => 'Dashboard']); ?>
<?php $this->load->view('templates/sidebar', ['active_menu' => 'dashboard']); ?>

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
        <!-- Dashboard content here -->
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
