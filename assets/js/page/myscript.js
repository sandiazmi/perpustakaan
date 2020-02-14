const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal({
		title: 'Data ',
		text: 'Berhasil ' + flashData,
		type: 'success'
	});
}

$('.tombol-hapus').on('click', function (e) {
	e.preventDefault();
	const href = $('.tombol-hapus').attr('href');
	Swal({
		title: 'Yakin?',
		text: "Data ingin dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus?'
	}).then((result) => {
		if (result.value == true) {
			document.location.href = href;
		}
	})
});
