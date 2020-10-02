<div class="dashboard">
    <nav id="sidebar" class="bg-dark">
        <ul class="menu">
            <li><?php echo anchor('dashboard', 'Dashboard'); ?></li>
            <li><?php echo anchor('dashboard/karyawan', 'Karyawan'); ?></li>
            <li><?php echo anchor('dashboard/gaji-dan-tunjungan', 'Gaji & Tunjangan'); ?></li>
            <li><?php echo anchor('dashboard/absensi', 'Absensi'); ?></li>
            <li><?php echo anchor('dashboard/posisi', 'Posisi'); ?></li>
            <li><?php echo anchor('dashboard/departemen', 'Departemen'); ?></li>
            <li><?php echo anchor('logout', 'logout'); ?></li>
        </ul>
    </nav>
    <div id="content">
        <nav class="navbar navbar-expand bg-light">
            <button type="button" id="sidebarCollapse" class="btn btn-outline-dark">
                <i class="fa fa-align--justify"></i>
            </button>
            <a class="navbar-brand logo-dashboard" href="#">WEECOM</a>
        </nav>
        <div class="container-fluid">
            <!-- Ini adalah konten -->
        </div>
    </div>
</div>