$(document).ready(function () {
	app.ReportUpdatePernikahan.init();
});

var tbl_list_report_status_pernikahan = $("#table-report-status-pernikahan").DataTable({
	"destroy": true,
	"paging": true,
	"lengthChange": false,
	// "searching": false,
	"ordering": true,
	"info": true,
	"autoWidth": false
});

var tbl_detail_list_report_status_pernikahan = $("#table-detail-report-update-pernikahan").DataTable({
	"destroy": true,
	"paging": true,
	"lengthChange": false,
	// "searching": false,
	"ordering": true,
	"info": true,
	"autoWidth": false
});

app.ReportUpdatePernikahan = {
	controller: "report_oid/",
	api: "report_oid_api/",
	elm: {},

	init: function () {
		var file = this;

		$("#btn-report-update-status-pernikahan").click(function () {
			var file = app.ReportUpdatePernikahan;
			file.buttonReportUpdateStatusPernikahan();
		});

		$("#btn-view-document").click(function () {
			
		});
		

		$("#table-report-status-pernikahan tbody").on('click', '.btn-report-status-pernikahan', function () {
			var arr = [];
			if(tbl_list_report_status_pernikahan.row($(this).closest('tr')).data() != undefined){
				arr = tbl_list_report_status_pernikahan.row($(this).closest('tr')).data();
			}else{
				arr = tbl_list_report_status_pernikahan.row(this).data();
			}
			
			$('#inp-tgl-pengajuan').val(arr[1]);
			$('#inp-no-identitas').val(arr[2]);
			$('#inp-nama').val(arr[3]);
			$('#inp-no-identitas-pasangan').val(arr[4]);
			$('#inp-nama-pasangan').val(arr[5]);

			var file = app.ReportUpdatePernikahan;
			file.buttonViewReportUpdateStatusPernikahan();
			// $('#btn-choose-file-upload-document').val('');
			// $("#buttonUpload").val("0");

		});

	},

	buttonReportUpdateStatusPernikahan: function () {
		var file = app.ReportUpdatePernikahan;
		var dateFormOri = $('#inp-date-periode-report-pernikahan').val();
		var dateToOri = $('#inp-date-sampai-report-pernikahan').val();
		// if($("#inp-date-periode-report-pernikahan").val() == null || $("#inp-date-periode-report-pernikahan").val() == "") {
		// 	alert_error("Pilih periode terlebih dahulu");
		// } 
		// else if($("#inp-date-sampai-report-pernikahan").val() == null ||$("#inp-date-sampai-report-pernikahan").val() == "") {
		// 	alert_error("Pilih periode terlebih dahulu");
		// } 
		// else if($("#inp-date-periode-report-pernikahan").val() != null && $("#inp-date-sampai-report-pernikahan").val() != null	) {
			$.ajax({
				url: app.base_url + file.api + "search_report_update_status_pernikahan",
				type: "POST",
				data: {
					date_from: dateFormOri,
					date_to: dateToOri
				},
				dataType: "json",
				success: function (response) {
					try {
						var json = $.parseJSON(response);
						var i = 1;
						console.log(json);
						if (json == "") {
							alert_error("Data tidak ditemukan");
						} else if (json.status == false) {
							tbl_list_report_status_pernikahan.clear().draw();
							alert_error(json.data);
						} else {
							var dataTable = [];
							tbl_list_report_status_pernikahan.clear().draw();
							// debugger;
							$.each(json, function () {
								dataTable.push([
									i,
									this["tanggal"],
									this["nik_individu"],
									this["nama_individu"],
									this["nik_pasangan"],
									this["nama_pasangan"],
									this["status"],
									'<a data-target="#modal-report-status-pernikahan" data-toggle="modal" <i class="fas fa-edit btn-report-status-pernikahan"></i></a>',
								]);
								i++;
							});
							tbl_list_report_status_pernikahan.rows.add(dataTable).draw("false");
						}
					} catch (error) {
						console.log(error);
					}
				},
				error: function (response) {
					alert_error("Data gagal ditampilkan. Silakan ulangi pencarian");
					console.log(response);
				},
			});
		// }
	},

	buttonViewReportUpdateStatusPernikahan: function(){
	var file = app.ReportUpdatePernikahan;
	var nikNasabah = $('#inp-no-identitas').val();
	var nikPasangan = $('#inp-no-identitas-pasangan').val();
	$.ajax({
		url: app.base_url + file.api + "search_detail_report_update_status_pernikahan",
		type: "POST",
		data: {
			nik_individu: nikNasabah,
			nik_pasangan: nikPasangan
		},
		dataType: "json",
		success: function (response) {
			try {
				var json = $.parseJSON(response);
				var i = 1;
				console.log(json);
				if (json == "") {
					alert_error("Data tidak ditemukan");
				} else if (json.status == false) {
					tbl_detail_list_report_status_pernikahan.clear().draw();
					alert_error(json.data);
				} else {
					var dataTable = [];
					tbl_detail_list_report_status_pernikahan.clear().draw();
					$.each(json, function () {
						dataTable.push([
							i,
							this["tanggal"],
							this["status"],
							this["pic"],
						]);
						i++;
					});
					tbl_detail_list_report_status_pernikahan.rows.add(dataTable).draw("false");
				}
			} catch (error) {
				console.log(error);
			}
		},
		error: function (response) {
			alert_error("Data gagal ditampilkan. Silakan ulangi pencarian");
			console.log(response);
		},
	});

	},
};
