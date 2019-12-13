<div class="container">
    <div class="form">
        <input type="text" name="cari" id="cari" placeholder="Masukkan Keyword Pencarian">
        <button type="submit" name="cari">Cari</button>
    </div><br>
    
    <div class="link_komentar">
        <a href="<?base_url('komentar')?>">Buat Laporan/Komentar</a>
    </div>
    
    <h4>Laporan/Komentar Terkini</h4>
    <hr>
    <?php foreach($result as $x) :?>
        <div class="laporan">
            <a>
                <a href="<?=base_url('home/detail_komentar/') . $x['id']?>"></a>
            </a>

            <p><?=$x['komentar']?></p>

            <div class="detail">
                <span>
                    <span id="lampiran"><?= $d['lampiran'] ?></span>
                    <span id="waktuPengiriman"><?= $d['waktuPengiriman']?> WIB</span>
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