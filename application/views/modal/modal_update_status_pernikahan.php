<div class="modal fade" id="modal-update-status" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="modal-update">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-label-update-status">UPDATE STATUS PERNIKAHAN</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
              <div class="input-group">
                <div class="col-md-2" style="margin-top:3px;">
                  <label>No Identitas</label>
                </div>
                <div class="col-sm-3">
                  <input type="input" class="form-control form-control-sm" id="inp-nik-oid-individu" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="30" readonly>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-md-3" style="margin-top:3px;">
                  <label>No Identitas Pasangan</label>
                </div>
                <div class="col-sm-3">
                  <input type="input" class="form-control form-control-sm" id="inp-nik-pasangan-oid-individu" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" maxlength="30" readonly>
                </div>
              </div>
              
              <div class="input-group" style="margin-top: 15px;">
                <div class="col-sm-2" style="margin-top:3px;">
                  <label>Nama</label>
                </div>
                <div class="col-sm-3">
                  <input type="input" class="form-control form-control-sm" id="inp-nama-oid-individu" readonly>
                </div>
                <div class="col-md-1"></div>
                <div class="col-sm-3" style="margin-top:3px;">
                  <label>Nama Pasangan</label>
                </div>
                <div class="col-sm-3">
                  <input type="input" class="form-control form-control-sm" id="inp-nama-pasangan-oid-individu" readonly>
                </div>
              </div>

              <div class="input-group" style="margin-top: 15px;">
                <div class="col-sm-2" style="margin-top:3px;">
                  <label>Upload Document</label>
                </div>
                <div class="col-sm-3">
                  <input type="input" class="form-control form-control-sm modal-update-status-pernikahan" id="inp-upload-document-oid-individu">
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-1" style="margin-right: 35px;">
                  <input type="file" id="btn-choose-file-upload-document" style="display: none;" />
                  <input type="button" class="btn btn-primary btn-sm" value="Choose File" onclick="document.getElementById('btn-choose-file-upload-document').click();" />
                </div>
                <div id="buttonUpload" hidden value="0"></div>
                <div class="col-md-2">
                    <input type="button" class="btn btn-primary btn-sm" id="btn-upload-document" value="Upload">
                </div>
              </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="col-sm-12">
          <div class="col-sm-2">
            <button type="button" class="btn btn-primary btn-sm" id="btn-save-upload-document">Save</button>
          </div>
          <div class="col-sm-10"></div>
        </div>
      </div>
    </div>
  </div>
</div>