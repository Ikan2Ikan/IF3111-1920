var keyword = document.getElementById('keyword');
//jalankan fungsi ketika keyword diketik
keyword.addEventListener('keyup', function () {
	//buat objek ajax
	var xhr = new XMLHttpRequest();

	//cek apakah ajax siap dieksekusi
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200) {
			console.log();
			// container.innerHTML = "Ajax Ashiyaap!";
		}
	}
	//eksekusi ajax
	xhr.open('POST', 'assets/js/data.txt?keyword=' + keyword.value, true);
	xhr.send();
});
