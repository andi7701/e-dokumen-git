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
										
										
										$this->db->select('*');
										$this->db->join('unor', 'akun.id_unor = unor.id');
                    $this->db->where('akun.id', $this->session->userdata('id'));											
										$ins = $this->db->get('akun');
										
										foreach($ins->result() as $row){
											
											$id = $this->session->userdata('id');
											
                            		        $username = $row->username;
                            		        $nama = $row->nama;
                            		        $nip = $row->nip;
                            		        $opd = $row->opd;
                            		        $jenis_kelamin = $row->jenis_kelamin;
                            		        $agama = $row->agama;
                            		        $alamat = $row->alamat;
                            		        $no_hp = $row->no_hp;
                            		        $foto = $row->foto;										
											
											                               				
										}
							?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <a href="<?php echo base_url('data_pribadi') ?>"><b>Data Pribadi</b></a>
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
                    <h3 class="box-title">Lihat Data</h3>
                    <!-- tools box -->
                    <div class="box-tools pull-right">
                    </div>
                    
                </div>
              
                    
                     <div class="row">
                    <div class="col-lg-6 col-xs-12">
                    
                 <h4><b><u>DATA PRIBADI</u></b></h4>
					
                   <div class="form-group has-feedback"><b>USERNAME:</b><br>
                        <?php echo $username ?>
	                </div>
	               
                   <div class="form-group has-feedback"><b>NAMA:</b><br>
                       <?php echo $nama ?>
	                </div>
	               
                   <div class="form-group has-feedback"><b>NIP:</b><br>
                       <?php echo $nip ?>
	                </div>
	                
                   <div class="form-group has-feedback"><b>OPD:</b><br>
                        <?php echo $opd ?>
	                </div>
	               
                   <div class="form-group has-feedback"><b>JENIS KELAMIN:</b><br>
                       <?php echo $jenis_kelamin ?>
	                </div>
	                
                   <div class="form-group has-feedback"><b>AGAMA:</b><br>
                        <?php echo $agama ?>
	                </div>
	               
                   <div class="form-group has-feedback"><b>ALAMAT:</b><br>
                      <?php echo $alamat ?>
	                </div>
	                
	               
                   <div class="form-group has-feedback"><b>NOMOR HP:</b><br>
                        <?php echo $no_hp ?>
	                </div>
	                
	                
	                
	                </div>
	                
                    <div class="col-lg-6 col-xs-12">
	                 <?php
				        if($foto != ""){
				        ?>
				        
				        <img src="<?php echo base_url("file/upload").'/'.$foto;?>" style="max-height:100%; width:200px;">
				        <br>
				        <br>
				        <?php
				        }
				        ?>
                 
	                </div>
	                
	                
	                
	                
		            
                </div>
                <div class="box-footer clearfix" style="text-align:left;">
                   
				<a href="<?php echo base_url("data_pribadi/edit"); ?>" class="btn btn-info">EDIT DATA PRIBADI <i class="glyphicon glyphicon-edit"></i></a>
			
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


<script type="text/javascript">


function delete_unit(id)
{
    if(confirm('Anda yakin akan menghapus data ini?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('berkas_dokumen/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                alert('Data berhasil dihapus!');
				window.open ('<?php echo base_url('data_pribadi') ?>','_self',false)
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error menghapus data!');
            }
        });

    }
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