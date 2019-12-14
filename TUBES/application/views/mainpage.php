<html>
    <head>
        <title>Main Page</title>
        <link rel="stylesheet" href="asset/mainpage.css"/>
    </head>

    <body>
        <table border="0" align="center" width="1000px">
        <form>
            <tr>
                <td>
                    <input class="search" [type="text"]/> <input class="button1" type="submit" value="Cari"/>
                    <center>
                        <br>
                        <a href="<?= base_url(); ?>createform">
                            Buat Laporan/Komentar 
                            <button class="button2">`</button>
                        </a>
                    </center>
                </td>
            </tr>
        </form>
        
        <tr>
            <td>
                <p> Laporan/Komentar Terakhir </p>
                <hr width="100%" color="black" />

                <div style='text-align:justify;'>
                    <?php foreach($laporan as $lap):?>
                        <?php if (strlen($lap["isi_laporan"]) <= 450){?>
                            <p class="isi"><?php echo $lap ["isi_laporan"]; ?></p>
                        <?php }else {?>          
                            <p class="isi"><?php echo substr ($lap["isi_laporan"],0,450); ?>...</p>
                        <?php }?>

                    <div class="lampiran">
                        <a> Lampiran : </a>
                    </div>

                    <div class="waktu">
                        <p><?php echo $lap["tgl_laporan"];?>
                            <a href = "<?php echo base_url().'Crud/view/'.$lap['id_laporan'];?>">Lihat selengkapnya</a>
                        </p>
                    </div>

                    <hr width="100%" color="black" />
                    <?php endforeach;?>
                </div>
            </td>
        </tr>
    </body>
</html>
