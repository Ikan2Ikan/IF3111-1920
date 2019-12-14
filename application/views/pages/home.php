<section id="showcase">
        <div class="container">
            <h1>SIMPLE LAPOR !</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, maxime dolore ratione voluptatibus
                dignissimos amet pariatur eaque laboriosam minus fuga, expedita sint laborum ipsa inventore obcaecati
                sunt illo blanditiis! Iste porro dolores dicta laboriosam. Officiis adipisci harum officia nostrum
                necessitatibus eos neque assumenda non et repellendus sunt, blanditiis nobis libero, voluptatibus cumque
                nemo possimus laudantium alias nam repudiandae veniam? Eos quas minus nulla pariatur nisi commodi,
                sapiente esse explicabo inventore, nesciunt incidunt voluptatibus porro officiis illum dolorem
                voluptatum molestiae aut laudantium a nihil accusamus. Dolor quidem ducimus, nihil non consequuntur
                tempore! Veritatis, recusandae tempora accusantium tenetur a reiciendis! Voluptas, veritatis.</p>
        </div>
    </section>

    <section id="search-box">
        <div class="container">
            <form action="">
                <input type="text" placeholder="Enter Search Key">
                <button type="submit" class="button_1">Search</button>
            </form>
            <form action="<?php echo base_url('create')?>">
                <p>Tidak Menemukan yang dicari? <button type="submit" class="button_2">Buat Laporan + </button></p>
            </form>
            </div>
        
    </section>

    <section id="boxes">
    <?php foreach ( $lapor as $lpr ) :?>
        <div class="container">
           <p><?=  substr($lpr['laporan'],0,250); ?></p>
            <div class="box">
                <p>Lampiran : <?= $lpr['lampiran']; ?> </p>
            </div>

            <div class="box">
                <p>Waktu : <?= $lpr['waktu']; ?> </p>
            </div>

            <div class="box">
                <p>Baca Selengkapnya</p>
            </div>
        </div>
        <hr>
    <?php endforeach;?> 
    </section>