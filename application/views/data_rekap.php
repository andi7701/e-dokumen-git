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
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
<!-- <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" /> -->

<!-- DataTables -->
<!-- <link rel="stylesheet" href="<?php echo base_url('assets/Admin LTE 3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/Admin LTE 3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/Admin LTE 3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>"> -->

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
        <a href="<?php echo base_url('data_rekap') ?>"><b>Daftar Rekapitulasi Berkas</b></a>
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
                    
                    <!-- FILTER STATUS -->
                    <select style="width:200px; max-width:100%; display: inline;" name="status" class="form-control">   
                        <option value="">Pilih Status</option>  
                        <option <?php if ($status == 'diproses') : ?> selected<?php endif; ?> value="diproses">Diproses</option>
                        <option <?php if ($status == 'diupdate') : ?> selected<?php endif; ?> value="diupdate">Diupdate</option>
                        <!-- <option <?php if ($status == 'ditolak') : ?> selected<?php endif; ?> value="ditolak">Ditolak</option> -->
                        <!-- <option <?php if ($status == 'diterima') : ?> selected<?php endif; ?> value="diterima">Diterima</option> -->
                    </select>

                    <!-- NAMA/NIP -->
                    <input type="text" style="width:200px; max-width:100%; display: inline;" class="form-control" name="nama_nip" value="<?php echo $nip_nama ?>" placeholder="NIP/NAMA">
                    <input type="hidden" name="filter" value="filter">
                    

		<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-search"></i> Cari</button>
        </form>

            <!-- BUTTON EXPORT -->
            <div class="btn-group">
                <button type="button" class="btn btn-warning"><i class="fa fa-print"></i> Export Excel</button>
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url('data_rekap/excel') ?>">Export All Data</a></li>
                <li><a href="#" class="btn-export-filter">Export Filter Data</a></li>
                </ul>
            </div>

        <!-- <a href="<?php echo base_url('data_rekap/filter_excel') ?>" class="btn btn-primary"> <i class="fa fa-print"></i> Export Excel</a> -->
        <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button> 
        
                </div><!-- /.box-header -->
                <div class="box-body">
					<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>NO <i class="fa fa-sort pull-right"></i></th>
                    <th>NIP <i class="fa fa-sort pull-right"></i></th>
                    <th>NAMA <i class="fa fa-sort pull-right"></i></th>
                    <th>OPD <i class="fa fa-sort pull-right"></i></th>				
                    <th>DOKUMEN <i class="fa fa-sort pull-right"></i></th>				
                    <th>STATUS <i class="fa fa-sort pull-right"></i></th>				
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($rekap as $row): ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row->nip ?></td>
                    <td><?= $row->nama ?></td>
                    <td><?= $row->opd ?></td>
                    <td><?= $row->judul ?></td>
                    <td><?= $row->status ?></td>	
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
	 
	 <!-- MODAL EXPORT FILTER -->
     <div class="example-modal">
        <form action="<?php echo site_url('data_rekap/filter_excel') ?>" method="post">
            <div class="modal" id="exportFilter">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Export Excel Filter</h4>
                  </div>
                  <div class="modal-body">
                    <p>Filter berdasarkan : </p>
                        <select style="width:150px; max-width:100%; display: inline;" name="id_unor" class="form-control excel_opd">     
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
                        
                        <!-- FILTER STATUS -->
                        <select style="width:200px; max-width:100%; display: inline;" name="status" class="form-control excel_status">   
                            <option value="">Pilih Status</option>  
                            <option <?php if ($status == 'diproses') : ?> selected<?php endif; ?> value="diproses">Diproses</option>
                            <option <?php if ($status == 'diupdate') : ?> selected<?php endif; ?> value="diupdate">Diupdate</option>
                            <!-- <option <?php if ($status == 'ditolak') : ?> selected<?php endif; ?> value="ditolak">Ditolak</option> -->
                            <!-- <option <?php if ($status == 'diterima') : ?> selected<?php endif; ?> value="diterima">Diterima</option> -->
                        </select>
                        <input type="text" style="width:200px; max-width:100%; display: inline;" class="form-control" name="nama_nip" value="<?php echo $nip_nama ?>" placeholder="NIP/NAMA">
                        <input type="hidden" name="filter" value="filter">
                  </div>
                  <div class="modal-footer">
                    <!-- <input type="hidden" name="excel_filter" value="excel_filter" class="excel_filter"> -->
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Export Excel</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->
         </form>
         <!-- END MODAL -->
		 

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
 
        // get Edit Product
        $('.btn-export-filter').on('click',function(){
            // get data from button edit
            // const id = $(this).data('id');
            // const name = $(this).data('name');
            // const price = $(this).data('price');
            // // Set data to Form Edit
            // $('.excel_opd').val(id);
            // $('.excel_status').val(name);
            // $('.excel_filter').val(price);
            // Call Modal Edit
            $('#exportFilter').modal('show');
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
        //   "columnDefs": [
        //  { 
        //      "targets": [ -1 ], //last column
        //      "orderable": false, //set not orderable
        //  },
        //  ],
        });
      });
      
// $(document).ready(function() {
//     var table = $('#example').DataTable( {
//         lengthChange: false,
//         buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
//     } );
 
//     table.buttons().container()
//         .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
// });
</script>

<!-- <script type="text/javascript">
var save_method; //for save method string
var table;

 $(document).ready(function() {

     //datatables
     table = $('#table').DataTable({ 
         // lengthChange: false,
         // buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
         "processing": true, //Feature control the processing indicator.
         "serverSide": true, //Feature control DataTables' server-side processing mode.
         "order": [], //Initial no order.

         // Load data for the table's content from an Ajax source
         "ajax": {
             "url": "<?php echo base_url('data_rekap/ajax_list') ?>",
             "type": "POST"
         },

         //Set column definition initialisation properties.
         "columnDefs": [
         { 
             "targets": [ -1 ], //last column
             "orderable": false, //set not orderable
         },
         ],

     });

//     // table.buttons().container()
//     //     .appendTo( '#example_wrapper .col-sm-6:eq(0)' );

 }); -->

 <script type="text/javascript">

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

<!-- <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script> -->

<!-- ADMIN LTE 3 TEST -->

<!-- <script src="<?php echo base_url('assets/Admin LTE 3/plugins/jquery/jquery.min.js') ?>"></script>

<script src="<?php echo base_url('assets/Admin LTE 3/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?php echo base_url('assets/Admin LTE 3/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Admin LTE 3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Admin LTE 3/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Admin LTE 3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Admin LTE 3/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Admin LTE 3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Admin LTE 3/plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Admin LTE 3/plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Admin LTE 3/plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('assets/Admin LTE 3/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Admin LTE 3/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Admin LTE 3/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>

<script src="<?php echo base_url('assets/Admin LTE 3/dist/js/adminlte.min.js') ?>"></script>

<script src="<?php echo base_url('assets/Admin LTE 3/dist/js/demo.js') ?>"></script> -->

<?php
$this->load->view('template/foot');
?>