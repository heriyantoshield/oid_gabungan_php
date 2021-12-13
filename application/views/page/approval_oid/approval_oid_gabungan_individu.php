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
                  <h5 style="text-align:Left;">APPROVAL OID GABUNGAN INDIVIDU</h5>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3"></div>
            </div>
          </div>
          <div class="row" style="margin-top:15px;">
            <div class="col-md-12">
              <div class="col-md-2">
                <label>Search By:</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="col-sm-8">
                <div class="input-group">
                  <div class="col-sm-2" style="margin-top:5px;">
                    <label>Periode:</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="date" class="form-control inp-date-from" id="inp-date-periode-report-pernikahan">
                  </div>
                  <!-- <div class="col-sm-1"></div> -->
                  <div class="col-sm-2" style="margin-top:5px;">
                    <label>Sampai:</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="date" class="form-control inp-date-to" id="inp-date-sampai-report-pernikahan">
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                
              </div>
            </div>
          </div>

          <div class="row" style="margin-top:20px;">
            <div class="col-sm-12">
              <div class="col-sm-8">
                <div class="input-group">
                  <div class="col-sm-2" style="margin-top:5px;">
                    <label>No Identitas</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="input" class="form-control form-control-sm inp-nik-oid-gabungan" id="inp-nik-oid-gabungan-individu" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="30">
                  </div>
                </div>
              </div>
              <div class="col-sm-6"></div>
            </div>
          </div>
          <div class="row" style="margin-top: 10px;">
            <div class="col-md-12">
              <div class="col-md-1">
                <input type="button" class="btn btn-primary btn-sm" id="btn-cari-oid-gabungan-individu" value="Show">
              </div>
            </div>
          </div>

          <table id="table-list-oid-gabungan-individu" class="table" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No Identitas</th>
                  <th>Nama</th>
                  <th>No Identitas Pasangan</th>
                  <th>Nama Pasangan</th>
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
<?php $this->load->view("modal/modal_update_status_pernikahan"); ?>
<?php $this->load->view('modal/v_modal_alert'); ?>
<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_end'); ?>