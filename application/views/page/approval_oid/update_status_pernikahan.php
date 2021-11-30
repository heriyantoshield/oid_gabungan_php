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
                  <h5 style="text-align:Left;">UPDATE STATUS PERNIKAHAN</h5>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3"></div>
            </div>
          </div>
          <div class="row" style="margin-top:15px;">
            <div class="col-md-12">
              <div class="input-group">
                <div class="col-md-2" style="margin-top:3px;">
                  <label>No Identitas</label>
                </div>
                <div class="col-sm-2">
                  <input type="input" class="form-control form-control-sm" id="inp-nik-update-status-pernikahan" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="30">
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-2" style="margin-top:3px;">
                  <label>No Identitas Pasangan</label>
                </div>
                <div class="col-sm-2">
                  <input type="input" class="form-control form-control-sm" id="inp-nik-pasangan-update-status-pernikahan" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="30">
                </div>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 15px;">
            <div class="col-sm-12">
              <div class="input-group">
                <div class="col-sm-2" style="margin-top:3px;">
                  <label>Nama</label>
                </div>
                <div class="col-sm-2">
                  <input type="input" class="form-control form-control-sm" id="inp-nama-update-status-pernikahan">
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-sm-2" style="margin-top:3px;">
                  <label>Nama Pasangan</label>
                </div>
                <div class="col-sm-2">
                  <input type="input" class="form-control form-control-sm" id="inp-nama-pasangan-update-status-pernikahan">
                </div>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 15px;">
            <div class="col-sm-12">
              <div class="input-group">
                <div class="col-sm-2" style="margin-top:3px;">
                  <label>Upload Document</label>
                </div>
                <div class="col-sm-2">
                  <input type="input" class="form-control form-control-sm" id="inp-nik-oid-gabungan">
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-1">
                    <input type="button" class="btn btn-primary btn-sm" id="btn-cari-tanggal" value="Choose File">
                </div>
                <div class="col-md-1">
                    <input type="button" class="btn btn-primary btn-sm" id="btn-cari-tanggal" value="Upload">
                </div>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 15px;">
            <div class="col-md-12">
              <div class="col-md-1">
                <input type="button" class="btn btn-primary btn-sm" id="btn-cari-tanggal" value="Save">
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