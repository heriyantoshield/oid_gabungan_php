<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navmenu'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- EFD 1 -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h5 style="text-align:Left; text-decoration: underline;">DETAIL REPORT UPDATE STATUS PERNIKAHAN</h5>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>

                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Pengajuan</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-update-status-pernikahan" id="inp-tgl-pengajuan" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No Identitas</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-update-status-pernikahan" id="inp-no-identitas" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-update-status-pernikahan" id="inp-nama" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No Identitas Pasangan</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-update-status-pernikahan" id="inp-no-identitas-pasangan" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Pasangan</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-update-status-pernikahan" id="inp-nama-pasangan" readonly>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>


                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <input type="button" class="btn btn-primary btn-sm" id="btn-view-document" value="View Document">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h5 style="text-align:Left; text-decoration: underline;">DETAIL HISTORY</h5>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>

                    <table id="table-detail-report-update-pernikahan" class="table table-bordered table-hover" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal & Waktu Konfirmasi</th>
                                <th>Status</th>
                                <th>PIC</th>

                            </tr>
                        </thead>
                    </table>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <input type="button" class="btn btn-primary btn-sm" id="btn-ok-pernikahan" value="Ok">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <br>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('modal/v_modal_alert'); ?>
<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_end'); ?>