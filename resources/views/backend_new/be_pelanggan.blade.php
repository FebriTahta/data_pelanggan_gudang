@extends('new_layouts.be_master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-wpforms"></i>
                        DATA PELANGGAN
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-home2"></i>GUDANG</a>
                    </li>
                </ul>
                <a class="btn-fab absolute fab-right-bottom btn-primary" data-toggle="control-sidebar">
                    <i class="icon icon-menu"></i>
                </a>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Today Tab Start-->
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-note-list text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">Total Pelanggan</div>
                                <h5 class="sc-counter mt-3"> {{$total_pelanggan}} </h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="row">
                    <!--Grafik Berita Artikel-->
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                <h5> DAFTAR DATA PELANGGAN</h5>
                                {{-- <button class="btn btn-info btn-sm" style="margin-top: 20px" data-toggle="modal" data-target="#modalimport">Import Data</button>  --}}
                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modaladd" style="margin-top: 20px">Tambah Data Pelanggan</button> 
                            </div>
                            <div class="row my-3">
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead style="font-weight: bold">
                                            <tr>
                                                <th>No</th>
                                                <th>Cetak</th>
                                                <th>Nama Cabang</th>
                                                <th>Status</th>
                                                <th>Kepala</th>
                                                <th>Alamat</th>
                                                <th>Kota</th>
                                                <th>Provinsi</th>
                                                <th>Telepon</th>
                                                <th>Ekspedisi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- data --}}
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Cetak</th>
                                                <th>Nama Cabang</th>
                                                <th>Status</th>
                                                <th>Kepala</th>
                                                <th>Alamat</th>
                                                <th>Kota</th>
                                                <th>Provinsi</th>
                                                <th>Telepon</th>
                                                <th>Ekspedisi</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Today Tab End-->
        </div>
    </div>
</div>

<div class="modal fade" id="modalimport" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formimport" action="/admin-import-pelanggan" enctype="multipart/form-data" method="POST"> @csrf
                <div class="modal-header" style="background-color: deepskyblue">
                    <h5 class="modal-title" id="modal_title_6" style="color: white">IMPORT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="py-3">
                        <div class="form-group">
                            <p style="margin-left: 10px">IMPORT DATA PELANGGAN</p>
                            <input type="file" name="file" class="form-control" style="border: none" accept=".excel.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, .xls" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-outline-primary btn-sm" id="btnimport" value="INPUT!">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalcetak" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formcetak" action="/admin-pelanggan-print" enctype="multipart/form-data" method="GET">
                <div class="modal-header" style="background-color: green">
                    <h5 class="modal-title" id="modal_title_6" style="color: white">CETAK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="py-3">
                        <div class="form-group">
                            <p style="margin-left: 10px">CETAK DATA PELANGGAN BERIKUT ?</p>
                            <input type="hidden" name="id" id="id">
                            <h5 id="namacabang" style="text-transform: uppercase;margin-left: 10px"></h5>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-outline-primary btn-sm" id="btnimport" value="CETAK!">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalcetak2" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formcetak" action="/admin-pelanggan-print-amplop" enctype="multipart/form-data" method="GET">
                <div class="modal-header" style="background-color: deepskyblue">
                    <h5 class="modal-title" id="modal_title_6" style="color: white">CETAK ALAMAT AMPLOP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="py-3">
                        <div class="form-group">
                            <p style="margin-left: 10px">CETAK DATA PELANGGAN BERIKUT ?</p>
                            <input type="hidden" name="id" id="id">
                            <h5 id="namacabang" style="text-transform: uppercase;margin-left: 10px"></h5>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" target="_blank" class="btn btn-outline-primary btn-sm" id="btnimport" value="CETAK!">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modaldel" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formdel" enctype="multipart/form-data" method="POST"> @csrf
                <div class="modal-header" style="background-color: rgb(192, 96, 117)">
                    <h5 class="modal-title" id="modal_title_6" style="color: white">HAPUS DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="py-3">
                        <div class="form-group">
                            <p style="margin-left: 10px">Anda Yakin Akan Menghapus Data Pelanggan Ini ?</p>
                            <h5 style="margin-left: 10px" id="namacabang"></h5>
                            <input type="hidden" name="id" class="form-control" id="id">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-outline-danger btn-sm" id="btndel" value="DELETE!">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="formedit" enctype="multipart/form-data" method="POST"> @csrf
                <div class="modal-header" style="background-color: deepskyblue">
                    <h5 class="modal-title" id="modal_title_6" style="color: white">EDIT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="namacabang">Nama Cabang</label>
                                    <input type="hidden" class="form-control" id="id" name="id">
                                    <input type="text" class="form-control" style="text-transform: uppercase" id="namacabang" name="namacabang">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="CABANG">CABANG</option>
                                        <option value="RPQ">RPQ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kepala">Kepala</label>
                                    <input type="text" class="form-control" id="kepala" name="kepala">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" class="form-control" style="text-transform: uppercase" id="alamat" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kota">Kota</label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" id="kota" name="kota">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" id="provinsi" name="provinsi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" id="telepon" name="telepon">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ekspedisi">Ekspedisi</label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" id="ekspedisi" name="ekspedisi">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-outline-primary btn-sm" id="btnedit" value="INPUT!">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="formadd" enctype="multipart/form-data" method="POST"> @csrf
                <div class="modal-header" style="background-color: deepskyblue">
                    <h5 class="modal-title" id="modal_title_6" style="color: white">EDIT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="namacabang">Nama Cabang</label>
                                    <input type="hidden" class="form-control" id="id" name="id">
                                    <input type="text" class="form-control" style="text-transform: uppercase" id="namacabang" name="namacabang">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="CABANG">CABANG</option>
                                        <option value="RPQ">RPQ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kepala">Kepala</label>
                                    <input type="text" class="form-control" id="kepala" name="kepala">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" class="form-control" style="text-transform: uppercase" id="alamat" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kota">Kota</label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" id="kota" name="kota">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" id="provinsi" name="provinsi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" id="telepon" name="telepon">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ekspedisi">Ekspedisi</label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" id="ekspedisi" name="ekspedisi">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-outline-primary btn-sm" id="btnadd" value="INPUT!">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script>
    $(document).ready(function() {
            var table = $('#example').DataTable({
                "pageLength": 50,
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('be.pelanggan.data') }}",
                columns: [{
                        "width":10,
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'cetak',
                        name: 'cetak'
                    },
                    {
                        data: 'namacabang',
                        name: 'namacabang'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'kepala',
                        name: 'kepala'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'kota',
                        name: 'kota'
                    },
                    {
                        data: 'provinsi',
                        name: 'provinsi'
                    },
                    {
                        data: 'telepon',
                        name: 'telepon'
                    },
                    {
                        data: 'ekspedisi',
                        name: 'ekspedisi'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
        });

        $('#modaledit').on('show.bs.modal', function(event) {
                var button  = $(event.relatedTarget)
                var id      = button.data('id')
                var namacabang  = button.data('namacabang')
                var status  = button.data('status')
                var kepala  = button.data('kepala')
                var alamat  = button.data('alamat')
                var kota  = button.data('kota')
                var provinsi  = button.data('provinsi')
                var telepon  = button.data('telepon')
                var ekspedisi  = button.data('ekspedisi')
                var modal   = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #namacabang').val(namacabang);
                modal.find('.modal-body #status').val(status);
                modal.find('.modal-body #kepala').val(kepala);
                modal.find('.modal-body #alamat').val(alamat);
                modal.find('.modal-body #kota').val(kota);
                modal.find('.modal-body #provinsi').val(provinsi);
                modal.find('.modal-body #telepon').val(telepon);
                modal.find('.modal-body #ekspedisi').val(ekspedisi);
        })

        $('#modaldel').on('show.bs.modal', function(event) {
                var button  = $(event.relatedTarget)
                var id      = button.data('id')
                var namacabang  = button.data('namacabang')
               
                var modal   = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #namacabang').html(namacabang);
        })

        $('#modalcetak').on('show.bs.modal', function(event) {
                var button  = $(event.relatedTarget)
                var id      = button.data('id')
                var namacabang  = button.data('namacabang')
               
                var modal   = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #namacabang').html(namacabang);
        })

        $('#modalcetak2').on('show.bs.modal', function(event) {
                var button  = $(event.relatedTarget)
                var id      = button.data('id')
                var namacabang  = button.data('namacabang')
               
                var modal   = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #namacabang').html(namacabang);
        })

        $('#formedit').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('be.add.pelanggan') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnedit').attr('disabled', 'disabled');
                    $('#btnedit').val('Processing');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formedit")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#btnedit').val('INPUT!');
                        $('#btnedit').attr('disabled', false);
                        $('#modaledit').modal('hide');
                        toastr.success(response.message);
                    } else {
                        $("#formedit")[0].reset();
                        $('#btnedit').val('Add Product');
                        $('#btnedit').attr('disabled', false);
                        toastr.error(response.message);
                        $('#modaledit').modal('hide');
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#formadd').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('be.add.pelanggan') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnadd').attr('disabled', 'disabled');
                    $('#btnadd').val('Processing');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formadd")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#btnadd').val('INPUT!');
                        $('#btnadd').attr('disabled', false);
                        $('#modaladd').modal('hide');
                        toastr.success(response.message);
                    } else {
                        $("#formadd")[0].reset();
                        $('#btnadd').val('Add Product');
                        $('#btnadd').attr('disabled', false);
                        toastr.error(response.message);
                        $('#modaldd').modal('hide');
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#formdel').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('be.remove.pelanggan') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btndel').attr('disabled', 'disabled');
                    $('#btndel').val('Processing');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formdel")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#btndel').val('INPUT!');
                        $('#btndel').attr('disabled', false);
                        $('#modaldel').modal('hide');
                        toastr.success(response.message);
                    } else {
                        $("#formdel")[0].reset();
                        $('#btndel').val('Add Product');
                        $('#btndel').attr('disabled', false);
                        toastr.error(response.message);
                        $('#modaldel').modal('hide');
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
</script>
@endsection