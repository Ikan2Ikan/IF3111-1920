<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lapor</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/detailStyle.css') }}">
</head>

<body>
    <div id = "javas">
    <div class="atastextarea" text-align="center">
        <a href="" >Buat Laporan/Komentar</a>
    </div>
    <div class="tandahalaman" >
          Detail Laporan
    </div>
    <br>
   
    <div class="detail-list">    
        <div class="atribut " >
            <a class="tombol"  href="" style="float: left; background: rgba(0, 0, 0, 0);">< KEMBALI</a>            
        </div>
        <hr width="100%">
        <div class="judul">
            {{ $data->title }}
        </div>
        <div class="atribut "> 
            <a class="tombol"  href="" onclick="deleteData({{$data->id}})"> Hapus </a>
            <!-- <a class="tombol"  href=""> Edit </a> -->
        </div>
        <br><br>
        <div class=" isi-laporan">
            <p>{{ $data->report }}</p>
        </div>  

        <div class="dokumen">
            Lampiran :
            <br><br>
            <img src="{{url('/attachment/'.$data->file)}} " style="width: 600px;height: 400px;" >
        </div>
        <div class="atribut ">
            <a>  Waktu : {{ $data->updated_at }} &ensp; </a>
            <a>  Aspek : {{ $data->aspect }} </a>
        </div>
        <br><br>
        <hr width="70%">
    </div>
    </div>
</body>
</html>