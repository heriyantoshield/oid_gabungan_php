$(document).ready(function() {
app.OidGabIndividu.init();
});

	var tbl_list_oid_gabungan_individu = $('#table-list-oid-gabungan-individu').DataTable({
        "destroy": true,
		"paging": true,
		"lengthChange": false,
		// "searching": false,
		"ordering": true,
		"info": true,
		"autoWidth": false
    });



app.OidGabIndividu = {
	controller: 'approval_oid/',
	api: 'approval_oid_api/',
	elm: {},

	init: function () {
        var file = this;
        // var buttonUpload = "0";
        // var tbl_list_oid_gabungan_individu = file.table_list_oid_gabungan_individu;

        $('#btn-cari-oid-gabungan-individu').click(function() {
            var file = app.OidGabIndividu;
            file.buttonCariOidGabIndividu();
        });

        $("#table-list-oid-gabungan-individu tbody").on('click', '.btn-update-status-pernikahan', function () {
			var arr = [];
			if(tbl_list_oid_gabungan_individu.row($(this).closest('tr')).data() != undefined){
				arr = tbl_list_oid_gabungan_individu.row($(this).closest('tr')).data();
			}else{
				arr = tbl_list_oid_gabungan_individu.row(this).data();
			}
			
			$('#inp-nik-oid-individu').val(arr[1]);
			$('#inp-nik-pasangan-oid-individu').val(arr[3]);
			$('#inp-nama-oid-individu').val(arr[2]);
			$('#inp-nama-pasangan-oid-individu').val(arr[4]);
			$('#inp-upload-document-oid-individu').val('');
			$('#btn-choose-file-upload-document').val('');
			$("#buttonUpload").val("0");

		});

        $('#btn-choose-file-upload-document').change(function() {
        	$('#inp-upload-document-oid-individu').val($('#btn-choose-file-upload-document')[0].files[0].name);
        });

        $('#btn-upload-document').click(function() {
            var file = app.OidGabIndividu;
            file.uploadDocument();
        });

        $('#btn-save-upload-document').click(function() {
        	if($('#btn-choose-file-upload-document')[0].files[0] == undefined){
				alert_error("Tidak dapat menyimpan pengajuan. Silakan melengkapi data terlebih dahulu");
			}
			else if ($("#buttonUpload").val() == 0){
				alert_error("Tidak dapat menyimpan pengajuan. Silakan upload dokumen terlebih dahulu");
			}
			else if($('#btn-choose-file-upload-document')[0].files[0] != undefined && $("#buttonUpload").val() == 1){
				alert_info("Berhasil Disimpan!");
				$('#modal-update-status').modal('hide');
			}
			else{
				alert_error("Gagal menyimpan pengajuan");
			}
        });

    },

    buttonCariOidGabIndividu: function() {
        var file = app.OidGabIndividu;
            
        if($('#inp-nik-oid-gabungan-individu').val() == null){
          	alert_error('Mohon isi No Identitas yang dicari');
        }
        else if ($('#inp-nik-oid-gabungan-individu').val() != null){
        	if ($('#inp-nik-oid-gabungan-individu').val().length > 4){
                $.ajax({
                    url: app.base_url + file.api + "search_list_oid_gabungan_individu",
                    type: 'POST',
                    data: {
                        'nik_oid_gabungan_individu': $('#inp-nik-oid-gabungan-individu').val()
                    },
                    dataType: 'json',
                    success: function(response) {
                        try {
                            var json = $.parseJSON(response);
                            var i = 1;
                            console.log(json);
                            if (json == ""){
                            	alert_error('Data tidak ditemukan');
                            }
                            else if (json.status == false) {
                                tbl_list_oid_gabungan_individu.clear().draw();
                                alert_error(json.data);
                            } else {
                                var dataTable = [];
                                tbl_list_oid_gabungan_individu.clear().draw();
                                // debugger;
                                $.each(json, function () {
                                	if(this['relation_code'] == '04'){
                                		dataTable.push([
	                                    	i,
	                                        this['nik_individu'],
	                                        this['nama_individu'],
	                                        this['nik_pasangan'],
	                                        this['nama_pasangan'],
	                                        '<a data-target="#modal-update-status" data-toggle="modal" <i class="fas fa-edit btn-update-status-pernikahan"></i></a>',  
	                                    ])
                                	}
                                	else{
                                		dataTable.push([
	                                    	i,
	                                        this['nik_individu'],
	                                        this['nama_individu'],
	                                        this['nik_pasangan'],
	                                        this['nama_pasangan'],
	                                        '<a disabled <i class="fas fa-edit btn-update-status-pernikahan"></i></a>',
	                                    ])
                                	}
                                    
                                    i++;
                                })
                                tbl_list_oid_gabungan_individu.rows.add(dataTable).draw('false');
                            }
                        } catch (error) {
                            console.log(error);
                        }
                    },
                    error: function (response) {
                    	alert_error('Data gagal ditampilkan. Silakan ulangi pencarian');
                        console.log(response);
                    }
                });
            }
            else{
                alert_error('Mohon isi minimal 5 angka');
            }
        }

    },

    uploadDocument: function (buttonUpload) {
		var fileUploadDocument = $('#btn-choose-file-upload-document')[0].files[0];
		// console.log(fileUploadDocument);
		
		if(fileUploadDocument == undefined){
			alert_error("Pilih file terlebih dahulu");
		}

		else if(fileUploadDocument.size > 1024000){
			alert_error("Ukuran file terlalu besar. Maksimal 1 MB");
		}

		else if(fileUploadDocument != undefined && fileUploadDocument.size <= 1024000){
			var arrType = [];
			arrType = fileUploadDocument.type.split("/");

			if (arrType[1] != "jpg" && arrType[1] != "jpeg") {
				alert_error("Format foto tidak sesuai!");
				$("#btn-choose-file-upload-document").val("");
			} else {
				var reader = new FileReader();
				// console.log("next");
				reader.onload = function (event) {
					var image = new Image();
					image.onload = function () {
						var canvas = document.createElement('canvas');
						var context = canvas.getContext("2d");
						canvas.width = image.width / 4;
						canvas.height = image.height / 4;
						context.drawImage(image,
							0,
							0,
							image.width,
							image.height,
							0,
							0,
							canvas.width,
							canvas.height
						);
						console.log("COMPRESS -> " + canvas.toDataURL());
						base64String = canvas.toDataURL().replace("data:", "")
							.replace(/^.+,/, "");
						imageBase64Stringsep = base64String;
						localStorage.setItem("base64UploadDocument", base64String);
						// console.log(base64String);
						$("#btn-choose-file-upload-document").attr("src", base64String);
					}
					image.src = event.target.result;
				}
				reader.readAsDataURL(fileUploadDocument);
				$("#buttonUpload").val("1");
				alert_info("Berhasil Disimpan!");
			}
		}
		
		else{
			alert_error("Gagal upload file. Silakan ulangi proses upload");
		}
		
	},


}

