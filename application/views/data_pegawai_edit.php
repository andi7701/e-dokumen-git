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
										$this->db->where('id', $this->uri->segment('3'));											
										$ins = $this->db->get('akun');
										
										foreach($ins->result() as $row){
											
											$id = $this->uri->segment('3');
											
                            		        $username = $row->username;
                            		        $nama = $row->nama;
                            		        $nip = $row->nip;
                            		        $id_unor = $row->id_unor;
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
        <a href="<?php echo base_url('data_pegawai') ?>"><b>Daftar Pegawai</b></a>
     >
      <a href="<?php echo base_url('data_pegawai/view')."/".$id ?>"><b><?php echo $nama ?></b></a>
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
				<form action="#" id="form" method="post" enctype="multipart/form-data">
                <div class="box-header">
                    <h3 class="box-title">Ubah Data</h3>
                    <!-- tools box -->
                    <div class="box-tools pull-right">
                    </div>
                    
                </div>
                <div class="box-body">
                 <h4><b><u>DATA PRIBADI</u></b></h4>
					
                   <div class="form-group has-feedback"><b>USERNAME:</b><br>
                        <input style="width:600px; max-width:100%;" value="<?php echo $username ?>" name="username" type="text" class="form-control" placeholder="USERNAME" maxlength="20"/>
	                </div>
	               
                   <div class="form-group has-feedback"><b>NAMA:</b><br>
                        <input style="width:600px; max-width:100%;" value="<?php echo $nama ?>" name="nama" type="text" class="form-control" placeholder="NAMA" maxlength="80"/>
	                </div>
	               
                   <div class="form-group has-feedback"><b>NIP:</b><br>
                        <input style="width:600px; max-width:100%;" value="<?php echo $nip ?>" name="nip" type="text" class="form-control" placeholder="NIP" maxlength="21"/>
	                </div>
	                
                   <!-- <div class="form-group has-feedback"><b>OPD:</b><br>
                        <input style="width:600px; max-width:100%;" value="<?php echo $id_unor ?>" name="id_unor" type="text" class="form-control" placeholder="OPD" maxlength="120"/>
	                </div> -->
	                <div class="form-group has-feedback"><b>UNIT/OPD:</b><br>
                        <select style="width:600px; max-width:100%;" name="id_unor" class="form-control">
                            
                         
	               <?php
	                        $i = 0;
	                        
	                        $this->db->select('*');										
							$ins = $this->db->get('unor');
										
							foreach($ins->result() as $row){
								
								$i++;
											
                                $id_unor = $row->id;
                                $judul_dokumen = $row->opd;
	               
	               
	               ?>   
							        <option value="<?php echo $id_unor ?>"><?php echo $judul_dokumen ?></option>
					
	                <?php
	                
							}
	                
	                ?>		        
 						</select>
	                </div>
                   <div class="form-group has-feedback"><b>JENIS KELAMIN:</b><br>
                        <select style="width:600px; max-width:100%;" name="jenis_kelamin" class="form-control">
							        <option <?php if($jenis_kelamin == "LAKI-LAKI"){ echo "selected";} ?> value="LAKI-LAKI">LAKI-LAKI</option>
							        <option <?php if($jenis_kelamin == "PEREMPUAN"){ echo "selected";} ?> value="PEREMPUAN">PEREMPUAN</option>
 						</select>
	                </div>
	               
	                
                   <div class="form-group has-feedback"><b>AGAMA:</b><br>
                        <select style="width:600px; max-width:100%;" name="agama" class="form-control">
							        <option <?php if($agama == "ISLAM"){ echo "selected";} ?> value="ISLAM">ISLAM</option>
							        <option <?php if($agama == "KRISTEN"){ echo "selected";} ?> value="KRISTEN">KRISTEN</option>
							        <option <?php if($agama == "KATOLIK"){ echo "selected";} ?> value="KATOLIK">KATOLIK</option>
							        <option <?php if($agama == "HINDU"){ echo "selected";} ?> value="HINDU">HINDU</option>
							        <option <?php if($agama == "BUDDHA"){ echo "selected";} ?> value="BUDDHA">BUDDHA</option>
							        <option <?php if($agama == "KONGHUCHU"){ echo "selected";} ?> value="KONGHUCHU">KONGHUCHU</option>
							        <option <?php if($agama == "LAIN-LAIN"){ echo "selected";} ?> value="LAIN-LAIN">LAIN-LAIN</option>
 						</select>
	                </div>
	               
                   <div class="form-group has-feedback"><b>ALAMAT:</b><br>
                      <textarea style="width:600px; max-width:100%;" class="form-control" name="alamat" maxlength="200" placeholder="ALAMAT"><?php echo $alamat ?></textarea>
	                </div>
	                
	               
                   <div class="form-group has-feedback"><b>NOMOR HP:</b><br>
                        <input style="width:600px; max-width:100%;" value="<?php echo $no_hp ?>" name="no_hp" type="text" class="form-control" placeholder="NOMOR HP" maxlength="20"/>
	                </div>
	                
                   <div class="form-group has-feedback"><b>FOTO:</b><br>
				        <?php
				        if($foto != ""){
				        ?>
				        
				        <img src="<?php echo base_url("file/upload").'/'.$foto;?>" style="max-height:100%; width:200px;">
				        
				        <?php
				        }
				        ?>
				        
				        <br>
                        <input type="file" name="foto">
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
    var form = $('#form')[0]; // You need to use standard javascript object here
	var formData = new FormData(form);

	
	var url;
     url = "<?php echo base_url('data_pegawai/ajax_update')."/".$id ?>";

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
                alert('Memperbarui data!');
				window.open ('<?php echo base_url('data_pegawai/view')."/".$id ?>','_self',false)
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