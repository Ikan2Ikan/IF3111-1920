<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buat Laporan!</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/v_lapor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

</head>

<body>
<?php foreach ($ubah as $hm )  :?>
        <?php $id = $hm['id']; ?>
        <?php $laporan = $hm['laporan']; ?>
        <?php $aspek = $hm['aspek']; ?>
        <?php $file = $hm['file']; ?>
        
   

<a href="<?php echo site_url('home')?>">
    <h1>SIMPLE LAPOR!</h1></a>
    <label>Ubah Laporan</label>
    <hr><br>

        <form action="" method="post" name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
        <input type="hidden" name="id_lapor" value="<?php $hm['id']; ?>" >
            
                <textarea class="area" id="card" name="laporan" placeholder=" Laporan/Komentar"><?php echo $laporan ?></textarea><br>
            <br>
                <select id="aspek" name="aspek" value="">
                    <option style="height: 40px;">Pilih Aspek Pelaporan/Komentar:</option>

                        <option value="Dosen">Dosen</option>
                        <option value="Staff">Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option>

                </select><br>
            
            <br>
            Pilih file: 
                <input type="file" name="file" placeholder="File"  name="kirim" accept=".img, .png, .jpeg, .jpg, .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf" value="<?php echo $file ?>"><br>
            <br>
                <input type="submit" class="but" value="Buat LAPOR!">
                <div id="valid_msg">
            <br>
            <hr >
        </form>

        <?php endforeach; ?>
    </div>
    
</body>
</html>
