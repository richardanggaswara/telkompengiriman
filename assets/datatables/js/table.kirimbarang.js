
/*
 * Editor client script for DB table kirimbarang
 * Automatically generated by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajaxUrl": "/telkompengiriman/assets/datatables/js/table.kirimbarang.php",
		"domTable": "#kirimbarang",
		"fields": [
			{
				"label": "No Kirim",
				"name": "nokirimbarang",
				"type": "text"
			},
			{
				"label": "Nama Barang",
				"name": "namabarang",
				"type": "text"
			},
			{
				"label": "No Ijin Perusahaan",
				"name": "noijinperusahaan",
				"type": "select",
				"ipOpts": [
					{
						"label": "",
						"value": ""
					}
				]
			},
			{
				"label": "No Ijin Jasa",
				"name": "noijinjasa",
				"type": "select",
				"ipOpts": [
					{
						"label": "",
						"value": ""
					}
				]
			},
			{
				"label": "ID Kirim Prov",
				"name": "idprovkirim",
				"type": "select",
				"ipOpts": [
					{
						"label": "",
						"value": ""
					}
				]
			},
			{
				"label": "ID Dari Prov",
				"name": "idprovdari",
				"type": "select",
				"ipOpts": [
					{
						"label": "",
						"value": ""
					}
				]
			},
			{
				"label": "Pegawai Jasa",
				"name": "pegawaijasapengirim",
				"type": "text"
			},
			{
				"label": "Pegawai Telkom",
				"name": "pegawaitelkompenerima",
				"type": "text"
			},
			{
				"label": "Tanggal Kirim",
				"name": "date",
				"type": "date",
				"dateFormat": "yy-mm-dd",
				"dateImage": "/telkompengiriman/assets/datatables/images\/calender.png"
			},
			{
				"label": "Alamat Tujuan",
				"name": "alamatkirim",
				"type": "textarea"
			},
			{
				"label": "Status Kirim",
				"name": "statuskirim",
				"type": "checkbox",
				"ipOpts": [
					{
						"label": "",
						"value": ""
					}
				],
				"separator": "|"
			},
			{
				"label": "Status Terima",
				"name": "statusterima",
				"type": "checkbox",
				"ipOpts": [
					{
						"label": "",
						"value": ""
					}
				],
				"separator": "|"
			}
		]
	} );

	$('#kirimbarang').dataTable( {
		"sDom": "Tfrtip",
		"sAjaxSource": "/telkompengiriman/assets/datatables/js/table.kirimbarang.php",
		"aoColumns": [
			{
				"mData": "nokirimbarang"
			},
			{
				"mData": "namabarang"
			},
			{
				"mData": "noijinperusahaan"
			},
			{
				"mData": "noijinjasa"
			},
			{
				"mData": "idprovkirim"
			},
			{
				"mData": "idprovdari"
			},
			{
				"mData": "pegawaijasapengirim"
			},
			{
				"mData": "pegawaitelkompenerima"
			},
			{
				"mData": "date"
			},
			{
				"mData": "alamatkirim"
			},
			{
				"mData": "statuskirim"
			},
			{
				"mData": "statusterima"
			}
		],
		"oTableTools": {
			"sRowSelect": "multi",
			"aButtons": [
				{ "sExtends": "editor_create", "editor": editor },
				{ "sExtends": "editor_edit",   "editor": editor },
				{ "sExtends": "editor_remove", "editor": editor }
			]
		}
	} );
} );

}(jQuery));

