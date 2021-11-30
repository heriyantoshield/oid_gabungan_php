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
                  <h5 style="text-align:Left;">ADD GROUP</h5>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3"></div>
            </div>
          </div>
          <div class="row" style="margin-top:15px;">
            <div class="col-md-12">
              <div class="input-group">
                <div class="col-md-2" style="margin-top:3px;">
                  <label style="font-size: 15px; font-weight: normal;">Group Name</label>
                </div>
                <div class="col-sm-2">
                  <input type="input" class="form-control form-control-sm inp-nik-oid-gabungan" id="inp-nik-oid-gabungan" maxlength="60">
                </div>
              </div>
            </div>
          </div>
          <table id="table-list-alamat" class="table" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NPWP Perusahaan</th>
                  <th>Nama Perusahaan</th>
                </tr>
                <input type="text" name="">
              </thead>
          </table>
          <div class="row" style="margin-top: 15px;">
            <div class="col-md-11"></div>
            <div class="col-md-1">
              <input type="button" class="btn btn-primary btn-sm" id="btn-cari-tanggal" value="Save">
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