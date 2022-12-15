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


	<?php				
										
										
										$this->db->select('username');
										$this->db->select('nama');
										$this->db->where('akun.id', $this->session->userdata('id'));											
										$ins = $this->db->get('akun');
										
										foreach($ins->result() as $row){
											
											$this->session->userdata('id');
											
											$username = $row->username;       
											$nama = $row->nama;                                 				
										}
							?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <a href="<?php echo base_url('profile') ?>"><b>Profil</b></a>
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
				<form action="#" id="form" method="post">
                <div class="box-header">
                    <h3 class="box-title">Ubah Akun</h3>
                    <!-- tools box -->
                    <div class="box-tools pull-right">
                    </div>
                    
                </div>
                <div class="box-body">
                    
                   <div class="form-group has-feedback"><b>Nama:</b><br>
                        <input style="width:600px; max-width:100%;" value="<?php echo $nama; ?>" name="nama" type="text" class="form-control" placeholder="Nama" maxlength="80"/>
	                </div>
					
	               
                   <div class="form-group has-feedback"><b>Username:</b><br>
                        <input style="width:600px; max-width:100%;" value="<?php echo $username; ?>" name="username" type="text" class="form-control" placeholder="Username" maxlength="20"/>
	                </div>

					
                   <div class="form-group has-feedback"><b>Password:</b><br>
                        <input style="width:600px; max-width:100%;" name="password" type="password" class="form-control" placeholder="Password" />
	                </div>
					
	               
                   <div class="form-group has-feedback"><b>Konfirmasi Password:</b><br>
                        <input style="width:600px; max-width:100%;" name="confirmpassword" type="password" class="form-control" placeholder="Konfirmasi Password"  />
	                </div>
					
					
					
					
					
					
                </div>
                <div class="box-footer clearfix">
                   
                    <button class="pull-right btn btn-info" onclick="save()" type="button">UPDATE <i class="fa fa-arrow-circle-right"></i></button>
                </div>
				</form>
            </div>

        </section><!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
		
		
		
		
		
		
		
		
		
    </div><!-- /.row (main row) -->
</section><!-- /.content -->
 
 
<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->

<script type="text/javascript">



function save()
{
    var url;
     url = "<?php echo base_url('profile/ajax_update') ?>";

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {	
                alert('Memperbarui data!');
				window.open ('<?php echo base_url('profile') ?>','_self',false)
            }else{
                alert('Pastikan semua kolom diisi!');
            }



        },
        error: function (jqXHR, textStatus, errorThrown)
        {
                alert('Error memperbarui data!');

        }
    });
}


</script>



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