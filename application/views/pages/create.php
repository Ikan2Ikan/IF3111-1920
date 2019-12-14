<section class="create-laporan">
        <center>
            <h2>BUAT LAPORAN</h2>
        </center>
        <?php echo form_open("home/create", array('enctype'=>'multipart/form-data')); ?>
        
        <div class="container">
            <div class="styled-input wide">
                <textarea name='komentar' required></textarea>
                <label>Message</label>
                <span></span> </div>

            <div class="styled-input">
                <input type="file" name="lampiran" class="button_1">
                <span></span> </div>

            <div class="styled-input wide">
                <select name="aspek" id="" class="button_1">
                    <option value="">Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Sosial">Sosial</option>
                    <option value="Politik">Politik</option>
                    <option value="Akademik">Akademik</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            <span></span> </div>

            <div class="styled-input-button">
                <button type="submit" class="button_1" name="submit">Buat Laporan</button>
            <span></span> </div>

        <?php echo form_close(); ?>
        </div>
    </section>