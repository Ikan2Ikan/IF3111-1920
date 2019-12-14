<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Komentar</title>
</head>
<div class= "container">
    <div class="header">
        <h1 class="judulapp">LAPOR ITERA!</h1>
    </div>
    <div class="content">
        <div class="head">Edit Laporan/Komentar</div>
        <hr>
        <form method="post" action="" encytpe="multipart/form-data">
            <?php if(validation_errors()) : ?>    
                <?=validation_errors()?>
            <?php endif ;?>
            
            <?php var_dump($result)?>
            <div class="main">
                <input type="text" name="judul_komentar" value="<?=$result['judul_komentar']?>">
                <textarea name="komentar" value="<?=$result['komentar']?>"></textarea>
            </div><br>

            <div class="kategori">
                <select name="kategori">
                    <?php $kategori = array('Dosen', 'Staff', 'Mahasiswa', 'Infrastruktur', 'Pengajaran'); ?>
                    <?php foreach($kategori as $ktgr):?>
                        <?php if($result['kategori'] == $ktgr):?>
                            <option value="<?=$ktgr?>" selected><?=$a?></option>
                        <?php else:?>
                            <option value="<?=$ktgr?>"><?=$ktgr?></option>
                        <?php endif;?>
                    <?php endforeach;?>
                </select>
            </div><br>

            <div class="file">
                <input class="input_file" type="file" value="C:/xampp/htdocs/IF3111-1920/CodeIgniter/Dokumen/file_upload/ <?=$result['lampiran'] ?>">
            </div><br>
            
            <div class="tombol_submit">
                <button type="submit" name="submit">Ganti LAPOR!</button>
            </div>
        </form><br><br>
        <hr>
    </div>
</div>
</html>