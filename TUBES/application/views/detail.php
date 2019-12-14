<html>
<table border="0" align="center" width="1000px">
<tr>
    <td>
    <p> Detail Laporan/Komentar </p>
    <hr width="100%" color="gray"/>
        <p><?php echo $laporan['isi_laporan']; ?></p>
        <div>
            <span>lampiran</span>
            <img src = "<?php echo base_url().'gambar/'.$laporan['lampiran'];?>" alt="lampiran">
        </div>
    <span>Aspek : <?php echo $laporan['kategori'];?></span><br>
    <span>Dibuat pada : <?php echo $laporan ['tgl_laporan']; ?></span>
    <?php $id = $laporan['id_laporan'];?>
    </td>
    </tr>
</body>
</html>