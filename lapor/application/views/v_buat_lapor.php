<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <form action="<?php echo base_url(). 'crud/tambah'; ?>" method="POST" onSubmit=validasi()>
    <table style="margin:20px auto;">
            <td><h3>Buat Laporan/Komentar<h3></td>
            <tr>
				<td><textarea name="isi" cols="100" rows="18" widht="5px"id="teks" placeholder="Laporan/Komentar" required></textarea></td>
			</tr>
			<tr>
				<td><select name="aspek" id="aspek">
                    <option style="display:none" value='pilih'>Pilih Aspek Pelaporan/Komentar</option>
                    <option value='Dosen'>Dosen</option>
                    <option value='Staff'>Staff</option>
                    <option value='Mahasiswa'>Mahasiswa</option>
                    <option value='Infrastruktur'>Infrastruktur</option>
                    <option value='Pengajaran'>Pengajaran</option>
                    </select>
                </td>
			</tr>
                <td><input type="file" name="lampiran"></td>
			<tr>
				<td><input type="submit" class="submit" name="simpan" id="submit" value="Buat LAPOR!"></td>
			</tr>
		</table>
		<br>
 

<script type="text/javascript">
	function validasi() {
		var aspek = document.getElementById("aspek").value;
		if (aspek !="pilih") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>