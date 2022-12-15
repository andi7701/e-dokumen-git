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
        <a href="<?php echo base_url('data_rekap/ajax_list') ?>"><b>Daftar Rekapitulasi Berkas</b></a>
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
		
                <form action="#" id="form" method="post" enctype="multipart/form-data">
                <div class="form-group has-feedback"><b>Filter Berdasarkan:</b><br>
                    <!-- FILTER OPD -->
                    <select style="width:200px; max-width:100%; display: inline;" name="id_unor" class="form-control">     
                    <?php
                            $i = 0;
                            
                            $this->db->select('*');                                     
                            $ins = $this->db->get('unor');
                                        
                            foreach($ins->result() as $row){
                                
                                $i++;
                                            
                                $id_unor = $row->id;
                                $judul_dokumen = $row->opd;
                   
                   
                    ?>   
                        <option value="">Pilih OPD</option>
                        <option value="<?php echo $id_unor ?>"><?php echo $judul_dokumen ?></option>
                    
                    <?php
                    
                            }
                    
                    ?>              
                    </select>
                    
                    <!-- FILTER STATUS -->
                    <select style="width:200px; max-width:100%; display: inline;" name="status" class="form-control">   
                        <option value="">Pilih Status</option>  
                        <option value="diproses">Diproses</option>
                        <option value="diupdate">Diupdate</option>
                    </select>

                    <!-- NAMA/NIP -->
                    <input type="text" style="width:200px; max-width:100%; display: inline;" class="form-control" name="nama_nip" value="" placeholder="NIP/NAMA">
                    <input type="hidden" name="filter" value="filter">
                    

		<button onclick="filter()" type="button" class="btn btn-success"><i class="glyphicon glyphicon-search"></i> Cari</button>
        </form>
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
			</tbody>
            
        </table>
				</div><!-- /.box-body -->
                <div class="box-footer clearfix">
                </div><!-- /.box-footer -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        
    </div><!-- /.row -->
          
	
     <!-- Small boxes (Stat box) -->
	 
	 
	 	
		 

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


<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

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


});

function filter()
{
    var form = $('#form')[0]; // You need to use standard javascript object here
	var formData = new FormData(form);

	var url;
    url = "<?php echo base_url('data_rekap/ajax_list') ?>";

    var save_method; //for save method string
    var table;

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('data_rekap/ajax_list') ?>",
            "type": "POST",
            "data": "formData",
            "dataType": "JSON",		
            "contentType": "false", // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            "processData": "false", // NEEDED, DON'T OMIT THIS
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });


}


function delete_unit(id)
{
    if(confirm('Anda yakin akan menghapus data ini?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('data_pegawai/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                alert('Data berhasil dihapus!');
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error menghapus data!');
            }
        });

    }
}


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