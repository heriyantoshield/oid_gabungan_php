$(document).ready(function () {
	app.DetailReportUpdatePernikahan.init();
});

$(function () {
	$('#table-detail-report-update-pernikahan').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
		"responsive": true,
	})
});