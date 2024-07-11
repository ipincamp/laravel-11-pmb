@extends('layouts.app')

@section('content')
<div class="card mb-4">
    <div class="card-header">
      Data Sekolah
    </div>
    <div class="card-body">
        {{-- nisn --}}
        <div class="mb-3">
            <label for="dataNISN" class="form-label">NISN</label>
            <input type="number" class="form-control" id="dataNISN" value="{{ $sekolahs['nisn'] }}" readonly />
        </div>
        {{-- derajat --}}
        <div class="mb-3">
            <label for="dataDerajat" class="form-label">Derajat</label>
            <input type="text" class="form-control" id="dataDerajat" value="{{ $sekolahs['derajat'] }}" readonly />
        </div>
        {{-- nama sekolah --}}
        <div class="mb-3">
            <label for="dataNamaSekolah" class="form-label">Nama Sekolah</label>
            <input type="text" class="form-control" id="dataNamaSekolah" value="{{ $sekolahs['nama'] }}" readonly />
        </div>
        {{-- jurusan --}}
        <div class="mb-3">
            <label for="dataJurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="dataJurusan" value="{{ $sekolahs['jurusan'] }}" readonly />
        </div>
        {{-- alamat --}}
        <div class="mb-3">
            <label for="dataAlamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="dataAlamat" value="{{ $sekolahs['alamat'] }}" readonly />
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
      Data Calon Mahasiswa
    </div>
    <div class="card-body">
        {{-- nama lengkap --}}
        <div class="mb-3">
            <label for="dataNamaLengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="dataNamaLengkap" value="{{ auth()->user()->name }}" readonly />
        </div>
        {{-- email --}}
        <div class="mb-3">
            <label for="dataEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="dataEmail" value="{{ auth()->user()->email }}" readonly />
        </div>
        {{-- tempat lahir --}}
        <div class="mb-3">
            <label for="dataTempatLahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="dataTempatLahir" value="{{ $mahasiswas['tempat_lahir'] }}" readonly />
        </div>
        {{-- tanggal lahir --}}
        <div class="mb-3">
            <label for="dataTanggalLahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="dataTanggalLahir" value="{{ $mahasiswas['tanggal_lahir'] }}" readonly />
        </div>
        {{-- jenis kelamin --}}
        <div class="mb-3">
            <label for="dataJenisKelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="dataJenisKelamin" value="{{ $mahasiswas['jenis_kelamin'] }}" readonly />
        </div>
        {{-- agama --}}
        <div class="mb-3">
            <label for="dataAgama" class="form-label">Agama</label>
            <input type="text" class="form-control" id="dataAgama" value="{{ $mahasiswas['agama'] }}" readonly />
        </div>
        {{-- alamat --}}
        <div class="mb-3">
            <label for="dataAlamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="dataAlamat" value="{{ $mahasiswas['alamat'] }}" readonly />
        </div>
        {{-- rt & rw --}}
        <div class="mb-3">
            <label for="dataRtRw" class="form-label">Rt & Rw</label>
            <div class="input-group">
                <input type="text" class="form-control" id="dataRtRw" value="{{ $mahasiswas['rt'] }}" readonly />
                <input type="text" class="form-control" id="dataRtRw" value="{{ $mahasiswas['rw'] }}" readonly />
            </div>
        </div>
        {{-- kelurahan --}}
        <div class="mb-3">
            <label for="dataKelurahan" class="form-label">Kelurahan</label>
            <input type="text" class="form-control" id="dataKelurahan" value="{{ $mahasiswas['kelurahan'] }}" readonly />
        </div>
        {{-- kecamatan --}}
        <div class="mb-3">
            <label for="dataKecamatan" class="form-label">Kecamatan</label>
            <input type="text" class="form-control" id="dataKecamatan" value="{{ $mahasiswas['kecamatan'] }}" readonly />
        </div>
        {{-- kabupaten_kota --}}
        <div class="mb-3">
            <label for="dataKabupatenKota" class="form-label">Kabupaten/Kota</label>
            <input type="text" class="form-control" id="dataKabupatenKota" value="{{ $mahasiswas['kabupaten'] }}" readonly />
        </div>
        {{-- provinsi --}}
        <div class="mb-3">
            <label for="dataProvinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="dataProvinsi" value="{{ $mahasiswas['provinsi'] }}" readonly />
        </div>
        {{-- no_hp --}}
        <div class="mb-3">
            <label for="dataNoHp" class="form-label">No Hp</label>
            <input type="text" class="form-control" id="dataNoHp" value="{{ $mahasiswas['no_hp'] }}" readonly />
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
      Data Orang Tua/Wali
    </div>
    <div class="card-body">
        {{-- hubungan --}}
        <div class="mb-3">
            <label for="dataHubungan" class="form-label">Hubungan</label>
            <input type="text" class="form-control" id="dataHubungan" value="{{ $orangtuas['untuk'] }}" readonly />
        </div>
        {{-- nama ayah --}}
        <div class="mb-3">
            <label for="dataNamaAyah" class="form-label">Nama Ayah</label>
            <input type="text" class="form-control" id="dataNamaAyah" value="{{ $orangtuas['nama_ayah'] }}" readonly />
        </div>
        {{-- nama ibu --}}
        <div class="mb-3">
            <label for="dataNamaIbu" class="form-label">Nama Ibu</label>
            <input type="text" class="form-control" id="dataNamaIbu" value="{{ $orangtuas['nama_ibu'] }}" readonly />
        </div>
        {{-- no_hp --}}
        <div class="mb-3">
            <label for="dataNoHp" class="form-label">No Hp</label>
            <input type="text" class="form-control" id="dataNoHp" value="{{ $orangtuas['no_hp'] }}" readonly />
        </div>
    </div>
</div>
@endsection
