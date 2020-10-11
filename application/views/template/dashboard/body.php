<?php $this->load->view('template/dashboard/header', $title); ?>
<div class="dashboard">
    <nav id="sidebar" class="bg-dark">
        <ul class="menu">
            <li class="<?php echo menuAktif('dashboard'); ?>"><?php echo anchor('dashboard', 'Dashboard'); ?></li>
            <li class="<?php echo menuAktif('karyawan'); ?>"><?php echo anchor('dashboard/karyawan', 'Karyawan'); ?></li>
            <li><?php echo anchor('dashboard/gaji-dan-tunjungan', 'Gaji & Tunjangan'); ?></li>
            <li><?php echo anchor('dashboard/absensi', 'Absensi'); ?></li>
            <li><?php echo anchor('dashboard/posisi', 'Posisi'); ?></li>
            <li><?php echo anchor('dashboard/departemen', 'Departemen'); ?></li>

            <li>

                <a href="#administrasi" aria-expanded="false" class="dropdown-toggle dropdown-sidebar-weecom" data-toggle="collapse">
                    Administrasi
                </a>
                <ul id="administrasi" class="collapse menu">
                    <li><?php echo anchor('dashboard/administrasi/kategori', 'Kategori'); ?></li>
                </ul>
            </li>
            <li><?php echo anchor('logout', 'logout'); ?></li>
        </ul>
    </nav>
    <div id="content">
        <nav class="navbar navbar-expand bg-light">
            <button type="button" id="sidebarCollapse" class="btn btn-outline-dark">
                <i class="fa fa-align-justify"></i>
            </button>
            <a class="navbar-brand logo-dashboard" href="#">WEECOM</a>
        </nav>
        <div class="container-fluid">
            <!-- mengambil class yg diakses user kita -->
            <h3><?php echo $title; ?></h3>
            <!-- Ini adalah konten -->
            <?php $this->load->view($kontenDinamis); ?>
        </div>
    </div>
</div>
<?php $this->load->view('template/dashboard/footer', $title); ?>