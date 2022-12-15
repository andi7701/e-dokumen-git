<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->


	<style type="text/css">
.kontainer {
width:100%;    /* penuh layar atau fluid/flexible, gunakan ukuran px untuk fixed width */
margin:0 auto; /* opsional, supaya table berada di tengah jika dalam mode fixed,*/
               /* bertindak seperti <table align="center">*/
}
.baris {
width: 100%    /* harus 100% supaya penuh ke area table */
}
.kolom {
width: 34%; /* pembagian 100% dengan 8 kolom, seharusnya 12.5%, */
              /* diberikan kompensasi seperlunya karena penggunaan margin,*/
              /* padding maupun border nantinya akan mempengaruhi lebar kolom */
float: left;  /* kolom yang lebih duluan akan ditempatkan di kiri, begitu seterusnya */
}
</style>

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


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <a href="<?php echo base_url('norma') ?>"><b>Norma Penilaian</b></a>
    </h1>

</section>
<!-- Main content -->
<section class="content">
   
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 ">
            <!-- Custom tabs (Charts with tabs)-->
          

          

            <!-- quick email widget -->
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title"><b>Norma Penilaian Hasil Tes Sport Search Usia 11 Putera</b></h3>
                    <!-- tools box -->
                    
                </div>
                <div class="box-body">
                 
					<div class="table-responsive">
                        <table class="table no-margin" style="width:100%;">
                            <thead>
                                <tr style="background-color:#FFFF99;">
                                    <th style="text-align:center;">KATEGORI</th>
                                    <th style="text-align:center;">KECEPATAN (s)</th>
                                    <th style="text-align:center;">KELINCAHAN (s)</th>
                                    <th style="text-align:center;">KOORDINASI (x)</th>
                                    <th style="text-align:center;">KEKUATAN (M)</th>
                                    <th style="text-align:center;">POWER (cm)</th>
                                    <th style="text-align:center;">VO2 MAX</th>
                                </tr>
                            </thead>
                            <tbody>
							
							<tr>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													<6.78
											</td>
											<td style="text-align:center;">
													<18.02
											</td>
											<td style="text-align:center;">
													>17
											</td>
											<td style="text-align:center;">
													>5.90
											</td>
											<td style="text-align:center;">
													>39
											</td>
											<td style="text-align:center;">
													>8.08
											</td>
							</tr>
							
							<tr>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													6.79-7.59 
											</td>
											<td style="text-align:center;">
													18.03-20.71 
											</td>
											<td style="text-align:center;">
													14-16 
											</td>
											<td style="text-align:center;">
													5.10-5.85 
											</td>
											<td style="text-align:center;">
													33-38 
											</td>
											<td style="text-align:center;">
													6.05-8.07 
											</td>
							</tr>
							<tr>
											<td style="text-align:center;">
													3
											</td>
											<td style="text-align:center;">
													7.60-8.40
											</td>
											<td style="text-align:center;">
													20.72-23.42
											</td>
											<td style="text-align:center;">
													10-13
											</td>
											<td style="text-align:center;">
													4.35-5.05
											</td>
											<td style="text-align:center;">
													26-32
											</td>
											<td style="text-align:center;">
													4.02-6.04
											</td>
							</tr>
							
							<tr>
											<td style="text-align:center;">
													2
											</td>
											<td style="text-align:center;">
													8.41-9.21 
											</td>
											<td style="text-align:center;">
													23.43-26.13 
											</td>
											<td style="text-align:center;">
													4-7 
											</td>
											<td style="text-align:center;">
													3.35-.4.30 
											</td>
											<td style="text-align:center;">
													19-25 
											</td>
											<td style="text-align:center;">
													2.08-4.02
											</td>
							</tr>
							<tr>
											<td style="text-align:center;">
													1
											</td>
											<td style="text-align:center;">
													>9.22 
											</td>
											<td style="text-align:center;">
													>26.14 
											</td>
											<td style="text-align:center;">
													<3 
											</td>
											<td style="text-align:center;">
													<3.30 
											</td>
											<td style="text-align:center;">
													<18 
											</td>
											<td style="text-align:center;">
													<2.07
											</td>
							</tr>
							
							
							
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->
                   
		            
		            
                </div>
            </div>
            
            
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title"><b>Norma Penilaian Hasil Tes Sport Search Usia 11 Puteri</b></h3>
                    <!-- tools box -->
                    
                </div>
                <div class="box-body">
                 
					<div class="table-responsive">
                        <table class="table no-margin" style="width:100%;">
                            <thead>
                                <tr style="background-color:#FFFF99;">
                                    <th style="text-align:center;">KATEGORI</th>
                                    <th style="text-align:center;">KECEPATAN (s)</th>
                                    <th style="text-align:center;">KELINCAHAN (s)</th>
                                    <th style="text-align:center;">KOORDINASI (x)</th>
                                    <th style="text-align:center;">KEKUATAN (M)</th>
                                    <th style="text-align:center;">POWER (cm)</th>
                                    <th style="text-align:center;">VO2 MAX</th>
                                </tr>
                            </thead>
                            <tbody>
							
							<tr>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													<6.81
											</td>
											<td style="text-align:center;">
													<19.75
											</td>
											<td style="text-align:center;">
													>15
											</td>
											<td style="text-align:center;">
													>5.25
											</td>
											<td style="text-align:center;">
													>35
											</td>
											<td style="text-align:center;">
													>7.02
											</td>
							</tr>
							
							<tr>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													6.82-7.76
											</td>
											<td style="text-align:center;">
													19.76-22.24
											</td>
											<td style="text-align:center;">
													10-14 
											</td>
											<td style="text-align:center;">
													4.40-5.20
											</td>
											<td style="text-align:center;">
													29-34
											</td>
											<td style="text-align:center;">
													5.02-7.01
											</td>
							</tr>
							<tr>
											<td style="text-align:center;">
													3
											</td>
											<td style="text-align:center;">
													7.77-8.71
											</td>
											<td style="text-align:center;">
													22.25-24.73 
											</td>
											<td style="text-align:center;">
													6-9
											</td>
											<td style="text-align:center;">
													3.50-4.335 
											</td>
											<td style="text-align:center;">
													13-28 
											</td>
											<td style="text-align:center;">
													3.03-5.01 
											</td>
							</tr>
							
							<tr>
											<td style="text-align:center;">
													2
											</td>
											<td style="text-align:center;">
													8.72-9.66
											</td>
											<td style="text-align:center;">
													24.74-27.22
											</td>
											<td style="text-align:center;">
													3-5 
											</td>
											<td style="text-align:center;">
													2.70-3.45
											</td>
											<td style="text-align:center;">
													17-22
											</td>
											<td style="text-align:center;">
													2.03-3.02
											</td>
							</tr>
							<tr>
											<td style="text-align:center;">
													1
											</td>
											<td style="text-align:center;">
													>9.67
											</td>
											<td style="text-align:center;">
													>27.23 
											</td>
											<td style="text-align:center;">
													<2 
											</td>
											<td style="text-align:center;">
													<2.65 
											</td>
											<td style="text-align:center;">
													<16 
											</td>
											<td style="text-align:center;">
													<2.03 
											</td>
							</tr>
							
							
							
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->
                   
		            
		            
		            
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title"><b>Komponen Kebutuhan Cabang Olahraga</b></h3>
                    <!-- tools box -->
                    
                </div>
                <div class="box-body">
                 
					<div class="table-responsive">
                        <table class="table no-margin" style="width:100%;">
                            <thead>
                                <tr style="background-color:#FFFF99;">
                                    <th style="text-align:center;">KATEGORI</th>
                                    <th style="text-align:center;">KECEPATAN</th>
                                    <th style="text-align:center;">KELINCAHAN</th>
                                    <th style="text-align:center;">KOORDINASI</th>
                                    <th style="text-align:center;">KEKUATAN</th>
                                    <th style="text-align:center;">POWER</th>
                                    <th style="text-align:center;">VO2 MAX</th>
                                </tr>
                            </thead>
                            <tbody>
							
							<tr>
											<td style="text-align:center;">
													Bola Basket
													<br>
                                                    <img style="width:100px;" src="<?php echo base_url('assets/basket.jpg') ?>">
											</td>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													4
											</td>
							</tr>
							
							<tr>
											<td style="text-align:center;">
													Bola Voli
													<br>
                                                    <img style="width:100px;" src="<?php echo base_url('assets/voli.jpg') ?>">
											</td>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													4
											</td>
							</tr>
							<tr>
											<td style="text-align:center;">
													Bulutangkis
													<br>
                                                    <img style="width:100px;" src="<?php echo base_url('assets/bulutangkis.jpg') ?>">
											</td>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													5 
											</td>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													5 
											</td>
											<td style="text-align:center;">
													5 
											</td>
											<td style="text-align:center;">
													5 
											</td>
							</tr>
							
							<tr>
											<td style="text-align:center;">
													Sepakbola
													<br>
                                                    <img style="width:100px;" src="<?php echo base_url('assets/sepakbola.jpg') ?>">
											</td>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													4 
											</td>
											<td style="text-align:center;">
													3
											</td>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													4
											</td>
							</tr>
							<tr>
											<td style="text-align:center;">
													Beladiri
													<br>
                                                    <img style="width:100px;" src="<?php echo base_url('assets/beladiri.jpg') ?>">
											</td>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													5 
											</td>
											<td style="text-align:center;">
													4 
											</td>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													4
											</td>
							</tr>
							
							
							
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->
                   
		            
		            
		            
                </div>
            </div>
            
            
            
            
            
            
            
          

          

            <!-- quick email widget -->
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title"><b>Klasifikasi Potensi Anak</b></h3>
                    <!-- tools box -->
                    
                </div>
                <div class="box-body">
                 
					<div class="table-responsive">
                        <table class="table no-margin" style="width:100%;">
                            <thead>
                                <tr style="background-color:#FFFF99;">
                                    <th style="text-align:center;">NO</th>
                                    <th style="text-align:center;">KLASIFIKASI</th>
                                    <th style="text-align:center;">SKOR</th>
                                </tr>
                            </thead>
                            <tbody>
							
							<tr>
											<td style="text-align:center;">
													1
											</td>
											<td style="text-align:center;">
													Sangat Potensial
											</td>
											<td style="text-align:center;">
													≥ 27
											</td>
							</tr>
							<tr>
											<td style="text-align:center;">
													2
											</td>
											<td style="text-align:center;">
													Potensial
											</td>
											<td style="text-align:center;">
													23 - 26
											</td>
							</tr>
							<tr>
											<td style="text-align:center;">
													3
											</td>
											<td style="text-align:center;">
													Cukup Potensial
											</td>
											<td style="text-align:center;">
													19 - 22
											</td>
							</tr>
							<tr>
											<td style="text-align:center;">
													4
											</td>
											<td style="text-align:center;">
													Kurang Potensial
											</td>
											<td style="text-align:center;">
													15 - 18
											</td>
							</tr>
							<tr>
											<td style="text-align:center;">
													5
											</td>
											<td style="text-align:center;">
													Tidak Potensial
											</td>
											<td style="text-align:center;">
													≤ 14
											</td>
							</tr>
							
							
							
							
							
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->
                   
		            
		            
                </div>
            </div>
            
            
            
            

        </section><!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
    </div><!-- /.row (main row) -->
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