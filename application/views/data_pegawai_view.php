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
										$this->db->where('akun.id', $this->uri->segment('3'));											
										$ins = $this->db->get('akun');

										
										foreach($ins->result() as $row){
											
											$id = $this->uri->segment('3');
											
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
                
                <div class="box-header">
                    <h3 class="box-title">Lihat Data</h3>
                    <!-- tools box -->
                    <div class="box-tools pull-right">
                    </div>
                    
                </div>
                <div class="box-body">
                    <div style="text-align:left;  ">
                        <?php
				        if($foto != ""){
				        ?>
				        
				        <img src="<?php echo base_url("file/upload").'/'.$foto;?>" style="max-height:100%; width:200px; border: 2px solid #f39c12;">
				        <br>
				        <br>
				        <?php
				        }
				        ?>
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
	                
                 <h4><b><u>DOKUMEN</u></b></h4>
	                <?php
	                        $i = 0;
	                        
	                        $this->db->select('*');										
							$ins = $this->db->get('dokumen');
										
							foreach($ins->result() as $row){
								
								$i++;
											
                                $id_dokumen = $row->id;
                                $judul_dokumen = $row->judul;
	               
	               
	               ?>
	                
	                
	                
                   <div class="form-group has-feedback"><b><?php echo $i.". ".$judul_dokumen ?>:</b>
                   
                   
                   
                   <table class="table table-striped table-bordered" cellspacing="0" style="width:100%;">
                        <tbody>
                            
                     <?php
	                        
	                        $this->db->select('*');		
	                        $this->db->where('id_dokumen',$id_dokumen);	
	                        $this->db->where('id_akun',$id);										
							$ins = $this->db->get('berkas_dokumen');
										
							foreach($ins->result() as $row){
								
                                $id_berkas = $row->id;
                                $judul_berkas = $row->judul_berkas;
                                $status = $row->status;
                                $file = $row->file;
                                
								echo "<tr>";
								echo "<td style='min-width:240px; '>".$judul_berkas."</td>";
								echo "<td>";
						?>		
							
							    <a target="_BLANK" href="<?php echo base_url("file/upload")."/".$file; ?>" class="btn btn-info fa fa-eye">Lihat</a>

							    <?php if ($row->status == 'diproses' || $row->status == 'diupdate' || $row->status == '')  { ?>
							    <a href="<?php echo site_url('Data_pegawai/konfirmasi/'.$row->id)?>"><button type="button" class="btn btn-success btn-sm fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Konfirmasi" onclick="return confirm('Yakin Konfirmasi?')"></button></a>
							    <!-- <a href="javascript:void(0)" onclick="delete_unit()" class="btn btn-danger">DELETE <i class="glyphicon glyphicon-trash"></i></a> -->
                                <a href="<?php echo site_url('Data_pegawai/tolak/'.$row->id)?>"><button type="button" class="btn btn-danger btn-sm fa fa-close" data-toggle="tooltip" data-placement="top" title="Tolak" ></i></button></a>
							    <?php } else {?>
							    <a href="<?php echo site_url('Data_pegawai/konfirmasi/'.$row->id)?>"><button type="button" class="btn btn-success btn-sm fa fa-check-circle" data-toggle="tooltip" disabled="disabled" data-placement="top" title="Konfirmasi" onclick="return confirm('Yakin Konfirmasi?')"></button></a>
							    <a href="<?php echo site_url('')?>"><button type="button" class="btn btn-danger btn-sm fa fa-close" data-toggle="tooltip" disabled="disabled" data-placement="top" title="Tolak" onclick="return confirm('Tolak Pengajuan?')"></i></button></a>
							    <?php    } ?>
                        <?php if($row->status == 'diterima') { ?>
                          <a href=""style="display:inline-block; padding: 5px;"><b>Diterima</b></a>
                        <?php    }elseif($row->status == 'ditolak') { ?>
                          <a href="" style=" display:inline-block; padding: 5px;"><b>Ditolak</b></a>
                        <?php    }elseif($row->status == 'diupdate') { ?>
                          <a href="" style=" display:inline-block; padding: 5px;"><b>Diupdate</b></a>
                        <?php    }else{ ?>
                          <a href="" style=" display:inline-block; padding: 5px;"><b>Diproses</b></a>
                        <?php } ?>
						<?php		
								echo "</td>";
											
	               
								echo "</tr>";
	                
							}
	                
	                ?>
                            
                            
            			</tbody>
                        
                    </table>
                   
                   
				        
				        
	                </div>
	                
	                
	                <?php
	                
							}
	                
	                ?>
	                
	                
	                
	                </div>
	                </div>
	                
	                
	                
	                
		            
                </div>
                <div class="box-footer clearfix" style="text-align:right;">
                <a href="javascript:window.history.go(-1);" class="pull-left btn btn-info"><i class="fa fa-arrow-circle-left"></i>KEMBALI</a>
				<a href="javascript:void(0)" onclick="delete_unit()" class="btn btn-danger">DELETE <i class="glyphicon glyphicon-trash"></i></a>
				<a href="<?php echo base_url("data_pegawai/edit")."/".$id; ?>" class="btn btn-info">EDIT DATA<i class="glyphicon glyphicon-edit"></i></a>
				<a href="<?php echo base_url("data_pegawai/edit_password")."/".$id; ?>" class="btn btn-info">EDIT PASSWORD<i class="glyphicon glyphicon-edit"></i></a>
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



function delete_unit()
{
    if(confirm('Anda yakin akan menghapus data ini?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('data_pegawai/ajax_delete')."/".$id ?>",
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                alert('Data berhasil dihapus!');
				window.open ('<?php echo base_url('data_pegawai') ?>','_self',false)
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error menghapus data!');
            }
        });

    }
}

function validasi_tolak()
{
    var keterangan = prompt("Tuliskan alasan penolakan dokumen");
    console.log(keterangan);
    if(confirm('Tolak pengajuan? '))
    {
        $.ajax({
            url : "<?php echo base_url('data_pegawai/ajax_validasi_tolak')."/".$id ?>",
            type: "POST",
            // data: {keterangan: keterangan},
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                
                alert('Validasi Ditolak');
				// window.open ('<?php echo base_url('data_pegawai') ?>','_self',false)
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error validasi!');
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