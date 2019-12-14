function Daftar() {
	alert("Akun Anda Berhasil Didaftarkan $id");
}

function valid(form) {
	if (form.komentar.value.length > 80) {
		if(form.kategori.value == "none"){
			alert('Anda harus mengisi kategori !');
			return false;
		} else {
			return true;
		}
	}else {
		alert('Anda harus mengisi komentar minimal 80 karakter !');
		return false;
	}
}