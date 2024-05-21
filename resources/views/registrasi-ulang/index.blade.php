@extends('layouts.app')

@section('content')
<div class="card mb-4">
    <div class="card-header">
      Data Sekolah  
    </div>
    <div class="card-body">
      <p class="card-text">NISN : <b> <?= $sekolahs['nisn'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Derajat  : <b> <?= $sekolahs['derajat'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Nama Sekolah : <b> <?= $sekolahs['nama'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Jurusan : <b> <?= $sekolahs['jurusan'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Alamat : <b> <?= $sekolahs['alamat'] ?></b></p>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
      Data Calon Mahasiswa
    </div>
    <div class="card-body">
        <p class="card-text">Nama Lengkap : <b> <?= $mahasiswas['nama'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Email  : <b> <?= $mahasiswas['email'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Tempat Lahir : <b> <?= $mahasiswas['tempat_lahir'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Tanggal Lahir : <b> <?= $mahasiswas['tanggal_lahir'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Jenis Kelamin : <b> <?= $mahasiswas['jenis_kelamin'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Agama : <b> <?= $mahasiswas['alamat'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Alamat : <b> <?= $mahasiswas['agama'] ?></b></p>
    </div>  
    <div class="card-body">
        <p class="card-text">Rt_Rw : <b> <?= $mahasiswas['rt_rw'] ?></b></p>
    </div> 
    <div class="card-body">
        <p class="card-text">Kelurahan : <b> <?= $mahasiswas['kelurahan'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Kecamatan : <b> <?= $mahasiswas['kecamatan'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Kabupaten : <b> <?= $mahasiswas['kabupaten_kota'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Provinsi : <b> <?= $mahasiswas['provinsi'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">No Hp: <b> <?= $mahasiswas['no_hp'] ?></b></p>
    </div>
</div>
<div class="card">
    <div class="card-header">
      Data Orang Tua/Wali
    </div>
    <div class="card-body">
      <p class="card-text">Hubungan : <b> <?= $orangtuas['untuk'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Nama Ayah : <b> <?= $orangtuas['nama_ayah'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Nama Ibu : <b> <?= $orangtuas['nama_ibu'] ?></b></p>
    </div>
    <div class="card-body">
        <p class="card-text">Nomer Hp : <b> <?= $orangtuas['no_hp'] ?></b></p>
    </div>
</div>
@endsection
