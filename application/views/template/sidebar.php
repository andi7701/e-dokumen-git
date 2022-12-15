<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            

            <li>
                <a href="<?php echo base_url('') ?>">
                    <i class="fa fa-home"></i> <span>Beranda</span>
                </a>       
            </li>    
            
			<?php
			if($this->session->userdata('level') == "admin"){
			?>
            
            <li>
                <a href="<?php echo base_url('data_pegawai') ?>">
                    <i class="fa fa-users"></i> <span>Daftar Pegawai</span>
                </a>       
            </li>    
            
            <!-- <li>
                <a href="<?php echo base_url('dokumen') ?>">
                    <i class="fa fa-file"></i> <span>Daftar Dokumen</span>
                </a>       
            </li>  
            <li>
                <a href="<?php echo base_url('usul_dokumen') ?>">
                    <i class="fa fa-file"></i> <span>Daftar Usulan</span>
                </a>       
            </li> -->

            <li class="treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Dokumen</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('dokumen') ?>"><i class="fa fa-circle-o"></i> Daftar Dokumen</a></li>
                <li><a href="<?php echo base_url('usul_dokumen') ?>"><i class="fa fa-circle-o"></i> Usul Dokumen</a></li>
                <li><a href="<?php echo base_url('data_rekap') ?>"><i class="fa fa-circle-o"></i> Rekap Dokumen</a></li>
              </ul>
            </li>

            <!-- <li>
                <a href="<?php echo base_url('data_rekap') ?>">
                    <i class="fa fa-user"></i> <span>Menu Rekapitulasi</span>
                </a>       
            </li>  -->
			<li>
                <a href="<?php echo base_url('unor') ?>">
                    <i class="fa fa-file"></i> <span>Daftar Unit/OPD</span>
                </a>       
            </li>
			<?php
			}
			elseif($this->session->userdata('level') == "user"){
			?>
            
			<li>
                <a href="<?php echo base_url('data_pribadi') ?>">
                    <i class="fa fa-user"></i> <span>Data Pribadi</span>
                </a>       
            </li>  
            <li>
                <a href="<?php echo base_url('dok_pribadi') ?>">
                    <i class="fa fa-user"></i> <span>Dokumen</span>
                </a>       
            </li> 
			<?php
			}
			?>
            
             
        </ul>
        
        
        
    </section>
    <!-- /.sidebar -->
</aside>


<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">