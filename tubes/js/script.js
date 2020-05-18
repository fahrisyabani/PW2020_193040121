// $(window).scroll(function () {
// 	//portfolio
// 	if (wScroll > $('.portfolio').offset().top - 250) {
// 		$('.portfolio .card').addClass('muncul');
// 	}
// }); $('#show-password').click(function () {
// 	if ($(this).hasClass('fa-eye')) {
// 		$('#login-password').attr('type', 'text');
// 		$(this).removeClass('fa-eye');
// 		$(this).addClass('fa-eye-slash');
// 	} else {
// 		$('#login-password').attr('type', 'password');
// 		$(this).removeClass('fa-eye-slash');
// 		$(this).addClass('fa-eye');
// 	}
// })


const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {

	// ajax
	// xmlhttprequest (yang lama)
	// const xhr = new XMLHttpRequest();

	// xhr.onreadystatechange = function () {
	// 	if (xhr.readyState == 4 && xhr.status == 200) {
	// 		container.innerHTML = xhr.responseText;
	// 	}
	// };
	// xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
	// xhr.send();



	// fetch (yang baru)
	fetch('../ajax/ajax_cari.php?keyword=' + keyword.value)

		.then((response) => response.text())
		.then((response) => (container.innerHTML = response));
});


// preview Image untuk Tambah Ubah
function previewImage() {
	const gambar = document.querySelector('.gambar');
	const imgPreview = document.querySelector('.img-preview');

	const oFReader = new FileReader();
	oFReader.readAsDataURL(gambar.files[0]);


	oFReader.onload = function (oFREvent) {
		imgPreview.src = oFREvent.target.result;

	};
}

