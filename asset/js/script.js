function confirmDelete(link){
    var ask = confirm("Apa anda yakin ingin menghapus?");
    if(ask){
        window.location=link;
    }
}