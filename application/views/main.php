<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>


<!-- Main content -->
<section class="content" style="min-height: 530px; background-image: url('<?php echo base_url('assets/background-20.png') ?>');
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  background-position: center;">									
									
    <div class="container" style="width:100%;">
    <div align="center">
        
        <div>
        <img  style="width:140px;" src="<?php echo base_url('assets/icon.png') ?>">
        
        <h1 style="font-size:16pt; color:#000000;">
        Selamat Datang di E-DOKUMEN 
        <br><b style="font-size:18pt; font-family:'Helvetica';">Kabupaten Sukoharjo</b></h1>
        
        
		</div>
		
		
		
		<div style="max-width:960px">

		<br>	
		
		
		
                   
		<div class="row">
		       
			   
						<?php 
			
						
						if($this->session->userdata('status') != "login"){ ?>
			   
						
						 <a href="<?php echo base_url('auth') ?>"><div class="col-lg-12 col-xs-12">
						
							<div class="small-box bg-green">
								<div class="inner">
									<h4><b>
									SIGN IN
									</b></h4>
								</div>
							</div>
						</div><!-- ./col --></a>
        
		
						
						
						<?php }else{
						
						
						
						
						if($this->session->userdata('level') == "admin"){
						
						?>
	
						 <a href="<?php echo base_url('data_pegawai') ?>"><div class="col-lg-6 col-xs-6">
						
							<div class="small-box bg-blue">
								<div class="inner">
									<h4><b>
									DAFTAR PEGAWAI
									</b></h4>
								</div>
							</div>
						</div><!-- ./col --></a>
	
						<?php }else{
						
						?>
	
						 <a href="<?php echo base_url('data_pribadi') ?>"><div class="col-lg-6 col-xs-6">
						
							<div class="small-box bg-blue">
								<div class="inner">
									<h4><b>
									DATA PRIBADI
									</b></h4>
								</div>
							</div>
						</div><!-- ./col --></a>
	
	
						<?php }
						
						?>
	
						 <a href="<?php echo base_url('auth/logout') ?>"><div class="col-lg-6 col-xs-6">
						
							<div class="small-box bg-red">
								<div class="inner">
									<h4><b>
									SIGN OUT
									</b></h4>
								</div>
							</div>
						</div><!-- ./col --></a>
	
						<?php }
						?>
		
		
					</div>
					
				
					
					
					
					

</div> 
		

    </div>
    </div>


<!-- Bootstrap modal -->

<!-- End Bootstrap modal -->


</section><!-- /.content -->

<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('template/foot');
?>