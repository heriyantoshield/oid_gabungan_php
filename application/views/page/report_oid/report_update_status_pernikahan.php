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
            <div class="col-md-6">
                <h3 style="text-align:Left; text-decoration: underline;">REPORT UPDATE STATUS PERNIKAHAN</h3>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
          </div>
          <div class="row" style="margin-top:20px;">
            <div class="col-md-3">
              <div class="input-group">
                <div class="col-md-3" style="margin-top:5px;">
                  <label>Periode:</label>
                </div>
                <div class="col-md-9">
                  <input type="date" class="form-control inp-date-from" id="inp-date-periode-report-pernikahan">
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                  <div class="col-md-3" style="margin-top:5px;">
                    <label>Sampai:</label>
                  </div>
                  <div class="col-md-9">
                    <input type="date" class="form-control inp-date-to" id="inp-date-sampai-report-pernikahan">
                  </div>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
          <div class="row" style="margin-top: 10px;">
            <div class="col-md-1">
              <input type="button" class="btn btn-primary btn-sm" id="btn-report-update-status-pernikahan" value="Cari">
            </div>
          </div>

          <table id="table-report-status-pernikahan" class="table" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Tgl Pengajuan</th>
                <th>No Identitas</th>
                <th>Nama</th>
                <th>No Identitas Pasangan</th>
                <th>Nama Pasangan</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>

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
<?php $this->load->view('modal/modal_detail_report_update_status_pernikahan'); ?>
<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_end'); ?>
