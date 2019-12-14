function confirmDelete(link){
    var ask = confirm("Apa anda yakin ingin menghapus?");
    if(ask){
        window.location=link;
    }
}
function validateForm(){
    var form = document.forms["createForm"];
    console.log(form["lampiran"].value)
    if(form["komentar"].value == ""){
        alert("komentar tidak boleh kosong");
        return false;
    }
    else if(form["komentar"].value.split(" ").length < 20){
        alert("komentar harus berisi minimal 20 kata");
        return false;
    }
    else if(form["lampiran"].value == ""){
        alert("lampiran harus diisi");
        return false;
    }
    else if(form["aspek"].value == "kosong"){
        alert("harus memilih aspek");
        return false;
    }
}