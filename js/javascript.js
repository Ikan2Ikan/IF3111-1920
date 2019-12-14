function valid(form){
    if (form.kolomlaporan.value.length>75){
        if(form.dropdownbuat.value=="none"){
            alert ('Anda harus mengisi kategori !');
            return false;
        }else{alert ("Periksa ulang");
            return true;
        }
    }else{
        alert ('Anda harus mengisi komentar minimal 75 karakter !');
        return false;
    }
}