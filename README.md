Dalam proses pengembangan website, Tim Pengembang menggunakan framework CodeIgniter karena menurut Tim Pengembang ini adalah salah satu framework yang mudah digunakan dan dipelajari.

Cara untuk memasang framework CodeIgniter cukup sederhana, langkah - langkah nya dapat ditempuh dengan cara sebagai berikut : 
1. Masuk kedalam website resmi CodeIgniter yaitu https://codeigniter.com/ dan mengunduh The latest is Version 3.1.11
2. Kemudian lakukan pemasangan pada htdocx supaya PHP dapat dijalankan.
3. Setelah pemasangan berakhir, gunakan text editor untuk mengembangkan website yaitu Sublime Text 3.
4. CodeIgniter menyediakan kerangka kerja dengan mekanisme MVC (Model, View, Controller) dimana CodeIgniter menggunakan konsep OOP didalamnya.

Cara mengoneksikan CodeIgniter terhadap localhost yaitu sebagai berikut :
1. Buka folder Application -> Config -> config.php
2. Ubah base url menjadi $config['base_url'] = 'http://localhost:8080/CodeIgniter/'; 
3. akses loocalhost dengan menghidupkan apache pada XAMPP
4. kunjungi $config['base_url'] = 'http://localhost:8080/CodeIgniter/'; ,maka akan muncul pesan welcome dan CodeIgniter telah terpasang dengan baik.

Cara menghubungkan CodeIgniter dengan database yaitu debagai berikut :
database berada pada folder CodeIgniter
1. mengaktifkan modul yang bernama database pada folder Application -> Config -> database.php
   'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'lapor',
   
   kemudian save.

2. Masuk ke Application -> Config -> autoload.php dan tambahkan isi $autoload['libraries'] = array(); menjadi $autoload['libraries'] = array('database');  agar database terhubung keseluruh file tenpa harus mengkonfigurasi ulang.

3. Buat file baru pada folder Models contoh m_data kemudian buat fungsi seperti berikut :

public function get_data()
	{
		$this->db->order_by("created_at","DESC");
		return $this->db->get('laporan')->result_array();
	}

fungsi diatas untuk menampilkan relasi laporan pada website kelak,  $this->db->order_by("created_at","DESC"); digunakan untuk sorting secara deskending sehingga data yang ditampilkan selalu data terbaru yang diinputkan, sedangkan return $this->db->get('laporan')->result_array(); digunakan untuk menampilkan relasi laporan.

Form validation untuk membuat laporan Tim Pengembang lakukan sebagai berikut :
1. masuk terlebih dahulu pada Application -> Controllers -> tampil.php 
2. buat fungsi tambah

//tambah data dan validasi
	public function tambah()
    {
    	$this->load->library('form_validation');
        $Laporan = $this->m_lapor;
        $validation = $this->form_validation;
        $validation->set_rules($Laporan->rules());

        if ($validation->run()) {
            $Laporan->tambahLaporan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Tampil/index');
        }

        $this->load->view('buat_laporan');
    }

load terlebuh dahulu form_validation, kemudian tetapkan rules - rules nya, untuk rules - rulesnya dibuat di Application -> Models -> m_data.php dengan membuat funsi rules();

public function rules()
    {
        return [
            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required|min_length[20]'],

            ['field' => 'aspek',
            'label' => 'Aspek',
            'rules' => 'required'],
          
            ];
    }

field deskripsi adalah kolom untuk menampung laporan dimana rules yang diterapkan yaitu required berarti dibutuhkan untuk mengisi, dan minimum isi adalah 20 character, untuk validasi kata belum bisa Tim Pengembang temukan, mungkin update version selanjutnya akan tim pengembang buat.

kemudain file aspek juga perlu diisi, dan yang terakhir adalah field berkas, dimana wajib diisi dan memiliki ketentuan file yang boleh dimasukkan yaitu <= 1024 KB.


//upload file
	public function upload_file(){
		$config['upload_path']          = './assets/lampiran/';
		$config['allowed_types']        = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf';
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		$config['rules']                = 'required';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')) {
			return $this->upload->data("file_name");
		}

	}

