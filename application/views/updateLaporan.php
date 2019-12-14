<html>
    <head>
        <title>SIMPLE LAPOR</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    </head>
    <body>
    <div class=wrap>
        <div class=header>
            <br>
            <h1>SIMPLE LAPOR!</h1>
            <br>

            <p1> Layanan Aspirasi dan Pengaduan Online ITERA </p1>
            <br>
            <br>
        </div>
        <div class=konten>
            <br>
            <br>
            <br>
            <form onsubmit="return validateFile()" action="<?php echo base_url('index.php/laporan/update/'.$laporan->id)?>" method="POST" enctype="multipart/form-data">
                <textarea id="laporan" name="laporan" rows="20" cols="80" placeholder="Laporan/Komentar"> <?php echo $laporan->laporan ?></textarea>
                <p style="color:red" id="error_laporan"></p>
                
                <br>
                <select name="id_aspek" style="width: 150px">
                    <?php
                        foreach($aspek as $value){?>    
                            <option <?php if($laporan->id_aspek==$value->id){echo 'selected'; } ?> value="<?php echo $value->id?>"><?php echo $value->nama ?></option>
                        <?php  
                        }
                    ?>
                </select>
                <br>
                <br>

                <input type="file" name="fileLapor" id="fileLapor">
                <br>
                <br>

                <button type="submit" id="submitButton" disabled="true" name="updateLapor" class="btn btn-primary">Update LAPOR!</button> 
            </form>
            <br>
            <br>
        </div>
        <div class=footer>
            &copy; 
            <br>
            Reza Octaviany . 14117062
            <br>
            Raras Franita . 14117063
        </div>
    </div>
    <script>
    
    function validation(){
        var submitButton = document.getElementById('submitButton')
        var error_laporan = document.getElementById('error_laporan')
        var laporan = document.getElementById('laporan')
        console.log(submitButton)
        console.log(laporan.value.length)
        if(laporan.value.length>20){
            submitButton.removeAttribute('disabled')
            error_laporan.innerHTML=''
        }else{
            submitButton.setAttribute('disabled', true)
            error_laporan.innerHTML= 'Panjang kata harus lebih dari 20'
        }
        return true;
    }

    function getFileName(name){
        var splitName = name.split('.')
        return splitName[splitName.length-1].toLowerCase()
    }

    function validateFile(){
        var file = document.getElementById('file_lapor')
        if(file.value.length!=0){
            var name = getFileName(file.value)
            if(name == "png" || name == "jpg" || name == "jpeg" || name == "doc" || name == "docx" || name == "pdf" || name == "xls" || name == "xlsx" || name == "ppt" || name == "pptx"){
                return true
            }else{
                alert('format file tidak diterima !')
                return false
            }
        }
    }
    document.addEventListener('keyup', function(){
        validation()
    });

    </script>
    </body>
</html>