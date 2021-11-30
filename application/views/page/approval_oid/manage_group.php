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
              <div class="input-group">
                <div class="col-md-9">
                    <h5 style="text-align:Left;">MANAGE GROUP</h5>
                </div>
                <!-- <div class="col-md-1" style="margin-left: -15px;">
                </div> -->
                <div class="input-group col-md-3">
                  <div class="col-md-1"></div>
                  <!-- <div class="col-md-4" style="margin-right: -15px;"> -->
                  <div class="col-md-5">
                    <a href="<?php echo site_url('approval_oid/add_group') ?>" class="btn btn-primary btn-sm" role="button">Add Group</a>
                  </div>
                  <!-- <div class="col-md-6" style="margin-right: -60px;"> -->
                  <div class="col-md-6">
                    <a href="<?php echo site_url('approval_oid/hapus_member_group') ?>" class="btn btn-primary btn-sm" role="button">Delete Group</a>
                  </div>
                  <!-- <div class="col-md-1"></div> -->
                </div>
              </div>
            </div>
          </div>
          


          <div class="row" style="margin-top:15px;">
            <div class="col-md-12">
              <div class="col-md-2">
                <label style="font-size: 13px;">Search By:</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="radio">
                <div class="input-group">
                  <div class="col-sm-2">
                    <label style="font-size: 13px;"><input type="radio" name="optradio" style="margin-right: 10px;">Nama Group</label>
                  </div>
                  <div class="col-sm-2">
                    <input type="input" class="form-control form-control-sm inp-nik-oid-gabungan" id="inp-nik-oid-gabungan" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="20">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12" style="margin-top: 15px;">
              <div class="radio">
                <div class="input-group">
                  <div class="col-sm-2">
                    <label style="font-size: 13px;"><input type="radio" name="optradio" style="margin-right: 10px;">Nama Perusahaan</label>
                  </div>
                  <div class="col-sm-2">
                    <input type="input" class="form-control form-control-sm inp-nik-oid-gabungan" id="inp-nik-oid-gabungan" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="20">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 10px;">
            <div class="col-md-12">
              <div class="col-md-1">
                <input type="button" class="btn btn-primary btn-sm" id="btn-cari-tanggal" value="Show">
              </div>
            </div>
          </div>

          <table id="table-list-alamat" class="table" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NPWP Perusahaan</th>
                  <th>Nama Perusahaan</th>
                  <th>Afiliasi</th>
                  <th>No Identitas Afiliasi</th>
                  <th>Posisi</th>
                  <th>Action</th>
                </tr>
              </thead>
          </table>
          <div class="col-md-1">
            <input type="button" class="btn btn-primary btn-sm" id="btn-cari-tanggal" value="Add Mamber">
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