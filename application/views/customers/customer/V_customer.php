        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            
            <!-- BEGIN PAGE HEAD-->
            <!-- <div class="page-head">
                <div class="container"> -->
                    <!-- BEGIN PAGE TITLE -->
                    <!-- <div class="page-title">
                        <h1>Blank Page </h1>
                    </div> -->
                    <!-- END PAGE TITLE -->
                <!-- </div>
            </div> -->
            <!-- END PAGE HEAD-->

            <!-- BEGIN PAGE CONTENT BODY -->
            <div class="page-content">
                <div class="container">
                    
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <!-- <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Layouts</span>
                        </li>
                    </ul> -->
                    <!-- END PAGE BREADCRUMBS -->

                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class="page-content-inner">

                        <div class="row">
                            <input type="hidden" id="form-open" value="0">

                            <div class="col-md-12" id="table-data">
                            <div class="portlet light ">
                            <!-- <div class="portlet light portlet-fit portlet-datatable bordered"> -->
                                
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-list font-dark"></i> &nbsp;&nbsp;
                                        <span class="caption-subject font-dark sbold uppercase">Data <?php if(isset($title_page)) echo $title_page;?></span>
                                    </div>
                                </div>

                                <div class="portlet-body">

                                  <div class="table-toolbar">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="btn-group">
                                                <?php
                                                    if($priv_add == 'y')
                                                    {
                                                        echo '
                                                        <button id="modalAdd-btn" class="btn sbold blue-ebonyclay">
                                                            <i class="icon-plus"></i>&nbsp; Tambah Data
                                                        </button>';
                                                    }
                                                ?>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <table class="table table-striped table-bordered table-hover table-checkable order-column table-scroll" id="default-table">
                                      <thead>
                                          <tr>
                                              <th> No </th>
                                              <th> Nama </th>
                                              <th> Sejak </th>
                                              <th> Bulan ini </th>
                                              <th> Tahun ini </th>
                                              <th> Sampai Sekarang </th>
                                              <th> Status </th>
                                              <th> Action </th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                  </table>

                                </div>

                            </div>
                            </div>

                            <div class="col-md-6 hidden" id="form-data">
                            <div class="portlet light bordered">
                            <!-- <div class="portlet light portlet-fit portlet-datatable bordered"> -->
                                
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-note font-dark"></i> &nbsp;&nbsp;
                                        <span class="caption-subject font-dark sbold uppercase">Form <?php if(isset($title_page)) echo $title_page;?></span>
                                    </div>
                                </div>

                                <div class="portlet-body">

                                  <form action="#" id="formAdd" class="form-horizontal" method="post">
                                    <div class="form-body">
                                        <div class="alert alert-danger display-hide">
                                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                        <div class="alert alert-success display-hide">
                                            <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                        <input type="hidden" id="url" value="Customers/List/postData/">
                                        <input type="hidden" name="kode" readonly />

                                        <div class="form-group">
                                            <label class="control-label col-md-4">Nama
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="customer_nama" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4">Telepon
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control telp" name="customer_telepon" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4">Email
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="email" class="form-control" name="customer_email" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4">Tanggal Lahir
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" name="customer_birthday" value="<?php echo date('d/m/Y');?>" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4">Alamat
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <textarea class="form-control" rows="3" name="customer_alamat"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4">Kota
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="customer_kota" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4">Provinsi
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="customer_provinsi" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4">Kode Pos
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="customer_kodepos" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4">Status
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <select class="form-control select2" name="customer_status_aktif" aria-required="true" aria-describedby="select-error" required>
                                                        <option id="aktif" value="y" selected> Aktif </option>
                                                        <option id="nonaktif" value="n"> Non Aktif </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-4 col-md-8 text-right">
                                                <button type="button" id="batal" class="btn default">Batal</button>
                                                <button type="submit" id="simpan" class="btn green-jungle">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                </div>

                            </div>
                            </div>

                        </div>

                    </div>
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->

        <?php $this->load->view('layout/V_footer');?>

        <script>
            
            $(document).ready(function()
            {
                searchData();
                rules();

                $("#formAdd").submit(function(event){
                    actionData();
                    reset();
                    flag = $("#form-open").val();
                    if (flag == 0) {
                        $("#table-data").removeClass("col-md-12");
                        $("#table-data").addClass("col-md-6");
                        $("#form-data").removeClass("hidden");
                        $("#form-open").val(1);
                    } else {
                        $("#table-data").removeClass("col-md-6");
                        $("#table-data").addClass("col-md-12");
                        $("#form-data").addClass("hidden");
                        $("#form-open").val(0);
                    }
                    return false;
                });                

                $("#modalAdd-btn").click(function(){
                    reset();
                    flag = $("#form-open").val();
                    if (flag == 0) {
                        $("#table-data").removeClass("col-md-12");
                        $("#table-data").addClass("col-md-6");
                        $("#form-data").removeClass("hidden");
                        $("#form-open").val(1);
                    }
                });

                $("#batal").click(function(){
                    reset();
                    flag = $("#form-open").val();
                    if (flag == 1) {
                        $("#table-data").removeClass("col-md-6");
                        $("#table-data").addClass("col-md-12");
                        $("#form-data").addClass("hidden");
                        $("#form-open").val(0);
                    }
                });

            })

            function searchData() { 
                $('#default-table').DataTable({
                    destroy: true,
                    "processing": true,
                    "serverSide": true,
                    ajax: {
                      url: '<?php echo base_url();?>Customers/List/loadData/'
                    },
                    "columns": [
                      {"name": "no","orderable": false,"searchable": false,  "className": "text-center", "width": "5%"},
                      {"name": "customer_nama"},
                      {"name": "customer_created_date"},
                      {"name": "total1", "className": "text-right"},
                      {"name": "total2", "className": "text-right"},
                      {"name": "total3", "className": "text-right"},
                      {"name": "customer_status_aktif"},
                      {"name": "action","orderable": false,"searchable": false, "className": "text-center", "width": "15%"}
                    ],
                    // Internationalisation. For more info refer to http://datatables.net/manual/i18n
                    "language": {
                        "aria": {
                            "sortAscending": ": activate to sort column ascending",
                            "sortDescending": ": activate to sort column descending"
                        },
                        "emptyTable": "No data available in table",
                        "info": "Showing _START_ to _END_ of _TOTAL_ records",
                        "infoEmpty": "No records found",
                        "infoFiltered": "(filtered1 from _MAX_ total records)",
                        "lengthMenu": "Show _MENU_",
                        "search": "Search:",
                        "zeroRecords": "No matching records found",
                        "paginate": {
                            "previous":"Prev",
                            "next": "Next",
                            "last": "Last",
                            "first": "First"
                        }
                    },

                    // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                    // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
                    // So when dropdowns used the scrollable div should be removed. 
                    //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

                    "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.
                    "pagingType": "bootstrap_extended",

                    "lengthMenu": [
                        [10, 25, 50, 100],
                        [10, 25, 50, 100] // change per page values here
                    ],
                    // set the initial value
                    "pageLength": 10,
                    "columnDefs": [{  // set default column settings
                        'orderable': false,
                        'targets': [0]
                    }, {
                        "searchable": false,
                        "targets": [0]
                    }],
                    "order": [
                        [2, "desc"]
                    ],
                    "iDisplayLength": 10
                });
            }

            function showForm(id) {
                flag = $("#form-open").val();
                if (flag == 0) {
                    $("#table-data").removeClass("col-md-12");
                    $("#table-data").addClass("col-md-6");
                    $("#form-data").removeClass("hidden");
                    $("#form-open").val(1);
                }
                $.ajax({
                    type : "GET",
                    url  : '<?php echo base_url();?>Customers/List/loadDataWhere/',
                    data : "id="+id,
                    dataType : "json",
                    success:function(data){
                        for(var i=0; i<data.val.length;i++){
                            document.getElementsByName("kode")[0].value = data.val[i].kode;
                            document.getElementsByName("customer_nama")[0].value = data.val[i].customer_nama;
                            document.getElementsByName("customer_telepon")[0].value = data.val[i].customer_telepon;
                            document.getElementsByName("customer_birthday")[0].value = data.val[i].customer_birthday;
                            document.getElementsByName("customer_email")[0].value = data.val[i].customer_email;
                            document.getElementsByName("customer_alamat")[0].value = data.val[i].customer_alamat;
                            document.getElementsByName("customer_kota")[0].value = data.val[i].customer_kota;
                            document.getElementsByName("customer_provinsi")[0].value = data.val[i].customer_provinsi;
                            document.getElementsByName("customer_kodepos")[0].value = data.val[i].customer_kodepos;
                            if (data.val[i].customer_status_aktif == 'y') {
                                document.getElementById('aktif').selected = true;
                            } else if (data.val[i].customer_status_aktif == 'n') {
                                document.getElementById('nonaktif').selected = true;
                            }
                        }
                    }
                });
            }

            function setNonaktif(id) {
              nonaktifData('Customers/List/nonaktifData', id);
            }

            function setAktif(id) {
              aktifData('Customers/List/aktifData', id);
            }

        </script>

    </body>

</html>