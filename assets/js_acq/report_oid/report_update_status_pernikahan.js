$(document).ready(function () {
	app.ReportUpdatePernikahan.init();
});

$(function () {
	$("#table-report-status-pernikahan").DataTable({
		paging: true,
		lengthChange: false,
		searching: false,
		ordering: true,
		info: true,
		autoWidth: false,
		responsive: true,
		destroy: true,
	});
});

app.ReportUpdatePernikahan = {
	controller: "report_oid/",
	api: "report_oid_api/",
	elm: {},

	init: function () {
		var file = this;

		$("#btn-cari-status-pernikahan").click(function () {
			var file = app.ReportUpdatePernikahan;
			file.buttonCariStatusPernikahan();
		});
	},

	buttonCariStatusPernikahan: function () {
		var file = app.ReportUpdatePernikahan;

		if (
			$("#inp-date-periode-report-pernikahan").val() == null ||
			$("#inp-date-periode-report-pernikahan").val() == ""
		) {
			alert_error("Pilih periode terlebih dahulu");
		} else if (
			$("#inp-date-sampai-report-pernikahan").val() == null ||
			$("#inp-date-sampai-report-pernikahan").val() == ""
		) {
			alert_error("Pilih periode terlebih dahulu");
		} else if (
			$("#inp-date-periode-report-pernikahan").val() != null &&
			$("#inp-date-sampai-report-pernikahan").val() != null
		) {
			$.ajax({
				url: app.base_url + file.api + "search_list_oid_gabungan_individu",
				type: "POST",
				data: {
					nik_oid_gabungan_individu: $("#inp-nik-oid-gabungan-individu").val(),
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
							tbl_list_oid_gabungan_individu.clear().draw();
							alert_error(json.data);
						} else {
							var dataTable = [];
							tbl_list_oid_gabungan_individu.clear().draw();
							// debugger;
							$.each(json, function () {
								if (this["relation_code"] == "04") {
									dataTable.push([
										i,
										this["nik_individu"],
										this["nama_individu"],
										this["nik_pasangan"],
										this["nama_pasangan"],
										'<a data-target="#modal-update-status" data-toggle="modal" <i class="fas fa-edit btn-update-status-pernikahan"></i></a>',
									]);
								} else {
									dataTable.push([
										i,
										this["nik_individu"],
										this["nama_individu"],
										this["nik_pasangan"],
										this["nama_pasangan"],
										'<a disabled <i class="fas fa-edit btn-update-status-pernikahan"></i></a>',
									]);
								}

								i++;
							});
							tbl_list_oid_gabungan_individu.rows.add(dataTable).draw("false");
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
		}
	},
};
