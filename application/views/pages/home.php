<section id="showcase">
    <div class="container">
        <h1>SIMPLE LAPOR !</h1>
        <p>Pengelolaan pengaduan pelayanan publik di setiap organisasi penyelenggara di Indonesia belum terkelola secara efektif dan terintegrasi. Masing-masing organisasi penyelenggara mengelola pengaduan secara parsial dan tidak terkoordinir dengan baik. Akibatnya terjadi duplikasi penanganan pengaduan, atau bahkan bisa terjadi suatu pengaduan tidak ditangani oleh satupun organisasi penyelenggara, dengan alasan pengaduan bukan kewenangannya. Oleh karena itu, untuk mencapai visi dalam good governance maka perlu untuk mengintegrasikan sistem pengelolaan pengaduan pelayanan publik dalam satu pintu. Tujuannya, masyarakat memiliki satu saluran pengaduan secara Nasional.</p>
    </div>
</section>

<section id="search-box">
    <div class="container">
            <form action="home/searchlaporan" method="POST" enctype="multipart/form-data">  
            <input type="text" name="keyword" placeholder="Keyword">
            <button type="submit" class="button_1">Search</button>
        </form>
        <form action="<?php echo base_url('home/loadlapor') ?>">
            <p>Tidak Menemukan yang dicari? <button type="submit" class="button_2">Buat Laporan + </button></p>
        </form>
    </div>

</section>

<section id="boxes">
    <?php if(is_array($lapor) && count($lapor)>0){
        echo "<center><h3>Laporan/Komentar Terakhir</h3></center>";
    }else{
        echo "<center><h3>Tidak ada data terkait</h3></center>";
    }
    ?>
    
    <?php foreach ($lapor as $lpr) : ?>
        <?php $link = base_url('home/detail/' .$lpr['id']);?>
        <div class="container">
            <p><?= substr($lpr['laporan'], 0, 250); ?></p>
            <div class="box">
                <p>Lampiran : <?= $lpr['lampiran']; ?> </p>
            </div>

            <div class="box">
                <p>Waktu : <?= $lpr['tanggal']; ?> <?= $lpr['waktu']; ?> </p>
            </div>

            <div class="box">
                <p><a href ="<?=$link;?>">Baca Selengkapnya</a></p>
            </div>
        </div>
        <hr>
    <?php endforeach; ?>
</section>