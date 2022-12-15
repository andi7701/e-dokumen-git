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
<style>
.col-sm-12 {
    overflow-x: scroll;
}
</style>
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');

?>
   
    



<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <a href="<?php echo base_url('usul_dokumen') ?>"><b>Daftar Usulan</b></a>
        <!-- <a href="<?php echo base_url('usul_dokumen/ajax_list') ?>"><b>TESTING SQL</b></a> -->
    </h1>

</section>
<!-- Main content -->
<section  class="content">

	 
		 <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
            <!-- Custom tabs (Charts with tabs)-->
          
			<div class="row">
                <div class="col-md-12">
                    <!-- TABLE: LATEST ORDERS -->
                    <div class="box box-info">
                        <div class="box-header with-border">

                        <form action="">
                        <div class="form-group has-feedback"><b>Filter Berdasarkan:</b><br>
                            <!-- FILTER OPD -->
                            <select style="width:200px; max-width:100%; display: inline;" name="id_unor" class="form-control">     
                            <option value="">Pilih OPD</option>
                            <?php
                                    $i = 0;
                                    
                                    $this->db->select('*');                                     
                                    $ins = $this->db->get('unor');
                                                
                                    foreach($ins->result() as $row){
                                        
                                        $i++;
                                                    
                                        $id_unor = $row->id;
                                        $judul_dokumen = $row->opd;
                        
                        
                            ?>   
                                
                                <option <?php if($id_unor == $opd) { echo 'selected="selected"'; }?> value="<?php echo $id_unor ?>"><?php echo $judul_dokumen ?></option>
                            
                            <?php
                            
                                    }
                            
                            ?>              
                            </select>
                            
                            <!-- Filter JENIS DOKUMEN -->
                            <select style="width:200px; max-width:100%; display: inline;" name="id_dokumen" class="form-control">     
                            <option value="">Pilih Dokumen</option>
                            <?php
                                    $i = 0;
                                    
                                    $this->db->select('*');                                     
                                    $ins = $this->db->get('dokumen');
                                                
                                    foreach($ins->result() as $row){
                                        
                                        $i++;
                                                    
                                        $id_dokumen = $row->id;
                                        $judul_dokumen = $row->judul;
                        
                        
                            ?>   
                                
                                <option <?php if($id_dokumen == $dokumen) { echo 'selected="selected"'; }?> value="<?php echo $id_dokumen ?>"><?php echo $judul_dokumen ?></option>
                            
                            <?php
                            
                                        }
                            
                            ?>              
                            </select>

                            <!-- NAMA/NIP -->
                            <!-- <input type="text" style="width:200px; max-width:100%; display: inline;" class="form-control" name="nama_nip" value="<?php echo $nip_nama ?>" placeholder="NIP/NAMA"> -->
                            <input type="hidden" name="filter" value="filter">
                            

                <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-search"></i> Cari</button>
                </form>
		
			
		<a href="<?php echo base_url("usul_dokumen"); ?>" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Reload</a>
			
        <!-- <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>  -->
        
                </div><!-- /.box-header -->
                <div class="box-body">
					<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>NO <i class="fa fa-sort pull-right"></i></th>
                    <th>NIP <i class="fa fa-sort pull-right"></i></th>
                    <th>NAMA <i class="fa fa-sort pull-right"></i></th>
                    <th>SKPD<i class="fa fa-sort pull-right"></i></th>
                    <th>JUDUL DOKUMEN <i class="fa fa-sort pull-right"></i></th>
                    <th>STATUS<i class="fa fa-sort pull-right"></i></th>	
                    <th>TINDAKAN<i class="fa fa-sort pull-right"></i></th>   				
                </tr>
            </thead>
            <tbody>
            <?php 
                $no = 1;
                foreach ($berkas as $row): ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['nip'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['opd'] ?></td>
                    <td><?= $row['judul'] ?></td>
                    <td><?= $row['status'] ?></td>	
                    <td>
                        <a target="_BLANK" href="<?php echo site_url('file/upload/'.$row['file'])?>" class="btn btn-info fa fa-eye">View</a>
                        <a href="#" data-id="<?= $row['id']; ?>" class="btn btn-success btn-sm fa fa-check-circle btn-konfirmasi"></a> 
                        <a href="<?php echo site_url('usul_dokumen/tolak/'.$row['id'])?>" class="btn btn-danger btn-sm fa fa-close"></a>
                    </td>		    
                </tr>
                <?php $no++; 
                endforeach; ?>
                
			</tbody>
            
        </table>
				</div><!-- /.box-body -->
                <div class="box-footer clearfix">
                </div><!-- /.box-footer -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        
    </div><!-- /.row -->
          
	
     <!-- Small boxes (Stat box) -->
	 
	 
	 	
        <div class="example-modal">
        <form action="<?php echo site_url('usul_dokumen/konfirmasi/') ?>" method="post">
            <div class="modal" id="konfirmasiModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Validasi Berkas</h4>
                  </div>
                  <div class="modal-body">
                    <p>Validasi berkas dokumen?&hellip;</p>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="berkas_id" class="berkas_id">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->
         </form>

        </section><!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
    </div><!-- /.row (main row) -->






    <!-- Small boxes (Stat box) -->
    
    <!-- Main row -->
    

</section><!-- /.content -->



<!-- jQuery UI 1.11.2 -->
<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->


<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>

<script>
    $(document).ready(function(){

    // get Konfirmasi
    $('.btn-konfirmasi').on('click',function(){
    // get data from button edit
    const id = $(this).data('id');
    // console.log(id);
    // Set data to Form Edit
    $('.berkas_id').val(id);
    // Call Modal Edit
    $('#konfirmasiModal').modal('show');
});

});
</script>

<script type="text/javascript">
      $(function () {
        $('#table').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false,
          "processing": true,
          "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
          ],
          "order": [],
        });
      });
      

</script>

<script type="text/javascript">

// var save_method; //for save method string
// var table;

// $(document).ready(function() {

//     //datatables
//     table = $('#table').DataTable({ 

//         "processing": true, //Feature control the processing indicator.
//         "serverSide": true, //Feature control DataTables' server-side processing mode.
//         "order": [], //Initial no order.

//         // Load data for the table's content from an Ajax source
//         "ajax": {
//             "url": "<?php echo base_url('usul_dokumen/ajax_list') ?>",
//             "type": "POST"
//         },

//         //Set column definition initialisation properties.
//         "columnDefs": [
//         { 
//             "targets": [ -1 ], //last column
//             "orderable": false, //set not orderable
//         },
//         ],

//     });


// });



function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

</script>




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