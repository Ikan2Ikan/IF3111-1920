## Instalasi Framework:
1. Mendownload Codeigniter v3,
2. Memindahkan ke dalam folder htdocs,
3. Melakukan konfigurasi config, antara lain autoload, database, routes, dsb.
4. Ubah nama BASE_URL menjadi nama localhost/'nama_projek'.

## Koneksi Basis Data;
0. Basis data dalam codeigniter otomatis terkoneksi apabila server Apache dan MySql dihidupkan pada aplikasi xampp, Jika sudah:
1. Ubah nama database yang terletak pada config/database.php menjadi nama database milik kita,
2. Ubah nama username menjadi 'root',
3. Password biarkan kosong.

Adapun cara Export basis data yang telah ada yaitu:
1. Hidupkan server Apache dan MySql pada xampp,
2. Buka localhost/phpmyadmin,
3. Pada bagian kolom atas, cari fitur Export,
4. Klik, kemudian cari file .sql yang telah disertakan,
5. Tunggu hingg proses selesai.

## Melakukan Validasi pada Client:
Validasi pada client dalam project ini dibuat menggunakan Javascript, adapun cara dan penjelasannya adalah sebagai berikut,
1. Tentukan form mana yang akan divalidasi, yang mana disini akan memvalidasi agar setiap field form tidak boleh kosong dan kata dalam field Laporan/Komentar harus lebih dari 20 karakter.
2. Membuat file .js, yang mana pada project ini disertakan dalam folder assets.
3. Isi dari file tersebut adalah memvalidasi agar field tidak boleh kosong, apabila kosong maka muncul peringatan atau alert dan user tidak bisa submit form tersebut.
4. Lakukan pemanggilan 'onsubmit' dalam tag form.