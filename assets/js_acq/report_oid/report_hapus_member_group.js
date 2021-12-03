$(document).ready(function () {
	app.ReportHpsMemberGroup.init();
});

var tbl_list_hapus_member_group = $("#table-list-hapus-member-group").DataTable(
	{
		"destroy": true,
		"paging": true,
		"lengthChange": false,
		// "searching": false,
		"ordering": true,
		"info": true,
		"autoWidth": false
	}
);

app.ReportHpsMemberGroup = {
    controller: 'approval_oid/',
	api: 'approval_oid_api/',
	elm: {},

    init:function(){
        var file = this;
        // var buttonUpload = "0";
        // var tbl_list_oid_gabungan_individu = file.table_list_oid_gabungan_individu;

        $('#btn-cari-report-hapus-member-group').click(function() {
            var file = app.OidGabIndividu;
            file.buttonCariOidGabIndividu();
        });

        $("#table-list-hapus-member-group tbody").on('click', '.btn-update-status-pernikahan', function () {
			var arr = [];
			if(tbl_list_hapus_member_group.row($(this).closest('tr')).data() != undefined){
				arr = tbl_list_hapus_member_group.row($(this).closest('tr')).data();
			}else{
				arr = tbl_list_hapus_member_group.row(this).data();
			}
			

		});

    }
}


