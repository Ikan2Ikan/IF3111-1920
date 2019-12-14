<div class="container">
    <div class="header">
        <h1 class="judulapp">LAPOR ITERA!</h1>
    </div>

    <div class="form">
        <input type="text" name="cari" id="cari" placeholder="Masukkan Keyword Pencarian">
        <button type="submit" name="cari">Cari</button>
    </div><br>
    
    <div class="link_komentar">
        <a href="<?base_url('komentar')?>">Buat Laporan/Komentar </a>
        <i class="fa fa-plus-square" aria-hidden="true"></i>
    </div>
    <br><br>
    
    <h5 class="subjudul">Laporan/Komentar Terkini</h5>
    <hr>
    <?php foreach($result as $x) :?>
        <div class="laporan">
            <a>
                <a href="<?=base_url('home/detail_komentar/') . $x['id']?>"></a>
            </a>

            <p><?=$x['komentar']?></p>

            <div class="detail">
                <span>
                    <span id="lampiran">Lampiran: <?= $x['lampiran'] ?></span>
                    <span id="waktuPengiriman">Waktu: <?= $x['waktuPengiriman']?> WIB</span>
                </span>
                <span>
                    <a href="<?=base_url('home/detail_komentar/') . $x['id']?>">Lihat Selengkapnya ></a>
                </span>
            </div>
            <hr>
        </div>
    <?php endforeach;?>
</div>
<script src="<?base_url('Dokumen/js/pencarian.js')?>"></script>