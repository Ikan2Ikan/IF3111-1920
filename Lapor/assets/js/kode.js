function Daftar() {
	alert("Akun Anda Berhasil Didaftarkan $id");
}

function peringatan() {
	alert("Pastikan anda memasukan laporan yang valid");
}

function valid() {
	var komen = document.getElementById("komentar").value;
	if (komen.length > 20) {
		alert('Anda harus mengisi data dengan lengkap !');
		return true;
	}else{
		alert('Anda harus mengisi data dengan lengkap !');
	}
}