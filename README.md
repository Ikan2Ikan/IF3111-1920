#instalasi framework dan koneksi database

1.langkah langkah intsalasi framework, kami disini menggunakan framework codeigniter 

Step 1: Download file Codeigniter
Silahkan klik link https://codeigniter.com/ lalu download framework codeigniter.

Step 2: Ekstrak dan Install Codeigniter Framework
Setelah file di download maka anda akan mendapatkan sebuah file  CodeIgniter dalam bentuk ZIP, silahkan ekstrak file tersebut ,setelah itu akan muncul folder  CodeIgniter. kemudian letakan folder tersebut ke folder root anda, yaitu di htdocs untuk sistem operasi windows, sedangkan linux di folder www/htm.

Step 3: Konfigurasi Base URL Codeigniter
Setelah  selesai melakukan instalasi codeigniter maka selanjutkan melakukan konfigurasi base url yang terdapat di folder application/config/config.php silahkan anda buka dengan teks editor yang anda sukai. Lalu pada bagian kode dibawah ini:

$config['base_url'] = '';
Ubahlah menjadi dibawah ini:
$config['base_url'] = 'http://localhost/' (sesuaikan dengan nama folder);

Step 4: Selesai
Setelah semua sudah dilakukan sesuai dengan instruksi diatas silahkan buka browser dan ketikan url http://localhost/, (menyesuaikan dengan nama) jika berhasil akan keluar tampilan wecome codeigniter


