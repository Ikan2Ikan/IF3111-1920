<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url('Dokumen/css/detail_komentar_style.css')?>">
    
    <title>Detail Komentar</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="content">

                <div class="container1">
                    <h1>Detail Komentar</h1>
                </div>
                
                <div class="container2">
                    <div class="content">
                        <p><?=$result['judul_komentar']?></p>

                        <p><?=$result['komentar']?></p>

                        <?php $tmp = explode('.',$result['lampiran']);
                            $ext = end($tmp);
                        ?>

                        <?php if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") : ?>
                            <img src="<?= base_url('Dokumen/file_update/') . $result['lampiran'] ?>" alt="">
                        <?php elseif ($ext == "pdf") : ?>
                            <a href="<?= base_url('Dokumen/file_update/') . $result['lampiran'] ?>" target="_blank"><?=$result['lampiran'] ?></a>
                        <?php elseif ($ext == "docx" || $ext=="doc" || $ext=="pptx" || $ext=="txt") : ?>
                            <a href="<?= base_url('Dokumen/file_update/') . $result['lampiran'] ?>"><?=$result['lampiran'] ?></a>
                        <?php else : ?>
                            <p>No Attachment</p>
                        <?php endif; ?>

                        <div class="details">
                            <span>
                                <span id= "lampiran"><?=$result['lampiran'] ?></span>
                                <span id= "waktuPengiriman"><?=$result['waktuPengiriman'] ?> WIB</span>
                            </span>
                            <div class="action">
                                <a class="edit" href="<?=base-url('home/update_komentar/') . $result['id'] ?>">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                   <small>Edit</small>
                                </a>
                                <a class="delete" onclick="return confirm('are you sure for deleting this lapor message?') " href="<?=base-url('home/delete_komentar/') . $result['id'] ?>">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                   <small>Delete</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>