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



<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      <a href="<?php echo base_url('setting') ?>"><b>Pengaturan Sistem</b></a>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        
    </ol>
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
				<form action="#" id="form" method="post" enctype="multipart/form-data">
                <div class="box-header">
                    <h3 class="box-title"><b>Ubah Pengaturan Sistem</b></h3>
                    <!-- tools box -->
                    <div class="box-tools pull-right">
                    </div>
                    
                </div>
                <div class="box-body">
                 
					<?php
			
            
            			$this->db->select('*');		
            			$this->db->where('id', '1');
            			$ins = $this->db->get('instansi');
            			foreach($ins->result() as $row){
            							
							$nama_instansi = $row->nama_instansi;
							$induk_instansi = $row->induk_instansi;
							$nama_lengkap_instansi = $row->nama_lengkap_instansi;
							$alamat = $row->alamat;
							$telepon = $row->telepon;
							$kota = $row->kota;
							$jabatan_kepala = $row->jabatan_kepala;
							$nama_kepala = $row->nama_kepala;
							$golongan_kepala = $row->golongan_kepala;
							$nip_kepala = $row->nip_kepala;
							$logo = $row->logo;
							$logo_colored = $row->logo_colored;
            				}								
            			
            
        			?>
					
                   <div class="form-group has-feedback"><b>Nama Singkat Instansi:</b><br>
                        <input style="width:100%;" value="<?php echo $nama_instansi ?>" name="nama_instansi" type="text" class="form-control" placeholder="Nama Instansi" maxlength="200"/>
	                </div>
                   <div class="form-group has-feedback"><b>Induk Instansi:</b><br>
                        <input style="width:100%;" value="<?php echo $induk_instansi ?>" name="induk_instansi" type="text" class="form-control" placeholder="Induk Instansi" maxlength="200"/>
	                </div>
	                
                   <div class="form-group has-feedback"><b>Nama Lengkap Instansi:</b><br>
                        <input style="width:100%;" value="<?php echo $nama_lengkap_instansi ?>" name="nama_lengkap_instansi" type="text" class="form-control" placeholder="Nama Lengkap Instansi" maxlength="250"/>
	                </div>
                   <div class="form-group has-feedback"><b>Alamat Instansi:</b><br>
                        <textarea style="width:100%;" name="alamat" placeholder="Alamat Instansi" class="form-control" maxlength="300"><?php echo $alamat ?></textarea>
	                </div>
					
                   <div class="form-group has-feedback"><b>Nomor Telepon:</b><br>
                        <input style="width:100%;" value="<?php echo $telepon ?>" name="telepon" type="text" class="form-control" placeholder="Nomor Telepon" maxlength="30"/>
	                </div>
                   <div class="form-group has-feedback"><b>Kota:</b><br>
                        <input style="width:100%;" value="<?php echo $kota ?>" name="kota" type="text" class="form-control" placeholder="Kota" maxlength="30"/>
	                </div>
	                
                   <div class="form-group has-feedback"><b>Jabatan Kepala Instansi:</b><br>
                        <input style="width:100%;" value="<?php echo $jabatan_kepala ?>" name="jabatan_kepala" type="text" class="form-control" placeholder="Jabatan Kepala Instansi" maxlength="200"/>
	                </div>
                   <div class="form-group has-feedback"><b>Nama Kepala Instansi:</b><br>
                        <input style="width:100%;" value="<?php echo $nama_kepala ?>" name="nama_kepala" type="text" class="form-control" placeholder="Nama Kepala Instansi" maxlength="100"/>
	                </div>
                   <div class="form-group has-feedback"><b>Golongan Kepala Instansi:</b><br>
                        <input style="width:100%;" value="<?php echo $golongan_kepala ?>" name="golongan_kepala" type="text" class="form-control" placeholder="Golongan Kepala Instansi" maxlength="40"/>
	                </div>
                   <div class="form-group has-feedback"><b>NIP Kepala Instansi:</b><br>
                        <input style="width:100%;" value="<?php echo $nip_kepala ?>" name="nip_kepala" type="text" class="form-control" placeholder="NIP Kepala Instansi" maxlength="30"/>
	                </div>
	                
                   <div class="form-group has-feedback"><b>Logo Hitam Putih:</b><br>
				   <img src="<?php echo base_url("file/upload").'/'.$logo;?>" style="max-height:250px;">
                        <input type="file" name="logo">
	                </div>
	                
                   <div class="form-group has-feedback"><b>Logo Berwarna:</b><br>
				   <img src="<?php echo base_url("file/upload").'/'.$logo_colored;?>" style="max-height:250px;">
                        <input type="file" name="logo_colored">
	                </div>
	                
	                
                </div>
                <div class="box-footer clearfix">
                    <button class="pull-right btn btn-info" onclick="save()" type="button"  style="width:100%"><b>SIMPAN <i class="fa fa-arrow-circle-right"></i></b></button>
                </div>
				</form>
				<div style="text-align:center;">
				
				</div>
            </div>

        </section><!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
    </div><!-- /.row (main row) -->

</section><!-- /.content -->


<?php
$this->load->view('template/js');
?>

<script type="text/javascript">



function save()
{
    var form = $('#form')[0]; // You need to use standard javascript object here
	var formData = new FormData(form);

	
	var url;
     url = "<?php echo base_url('setting/ajax_update')?>";

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        //data: $('#form').serialize(),
		data: formData,
        dataType: "JSON",		
		contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
		processData: false, // NEEDED, DON'T OMIT THIS
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {	
                alert('Pengaturan berhasil disimpan!');
				window.open ('<?php echo base_url('setting') ?>','_self',false)
            }else{
                alert('Silakan lengkapi semua kolom sebelum menyimpan!');
            }



        },
        error: function (jqXHR, textStatus, errorThrown)
        {
                alert('Silakan lengkapi semua kolom sebelum menyimpan!');

        }
    });
}


</script>
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