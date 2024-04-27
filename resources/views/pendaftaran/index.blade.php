@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- sekolah -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Data Sekolah') }}
                    </div>

                    <div class="card-body">
                        <form>
                            @if ($sekolahs->isEmpty())
                                <div class="alert alert-warning" role="alert">
                                    Data sekolah belum lengkap
                                </div>
                                <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahSekolah">
                                    Lengkapi sekarang
                                </button>
                            @else
                                @foreach ($sekolahs as $row)
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-secondary text-white">NISN</span>
                                        <input type="text" class="form-control" placeholder="NISN" aria-label="NISN"
                                            value="{{ $row->nisn }}" readonly>
                                        <span class="input-group-text bg-secondary text-white">Derajat</span>
                                        <input type="text" class="form-control" placeholder="Derajat"
                                            aria-label="Derajat" value="{{ $row->derajat }}" readonly>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-secondary text-white">Sekolah</span>
                                        <input type="text" class="form-control" placeholder="Nama Sekolah"
                                            aria-label="Nama Sekolah" value="{{ $row->nama }}" readonly>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-secondary text-white">Jurusan</span>
                                        <input type="text" class="form-control" placeholder="Jurusan"
                                            aria-label="Jurusan" value="{{ $row->jurusan }}" readonly>
                                    </div>
                                    <div class="input-group mb-1">
                                        <span class="input-group-text bg-secondary text-white">Alamat</span>
                                        <textarea class="form-control" placeholder="Alamat" aria-label="Alamat">{{ $row->alamat }}</textarea>
                                    </div>
                                @endforeach
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- calon mahasiswa -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Data Calon Mahasiswa') }}</div>
                    <div class="card-body">
                        <form>
                            @if ($mahasiswas->isEmpty())
                                <div class="alert alert-warning" role="alert">
                                    Data calon mahasiswa belum lengkap
                                </div>
                                <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahMahasiswa">
                                    Lengkapi sekarang
                                </button>
                            @else
                                @foreach ($mahasiswas as $row)
                                    <div class="mb-2">
                                        <label for="inputNama" class="form-label">Nama Lengkap</label>
                                        <input type="text" id="inputNama" class="form-control"
                                            value="{{ $row->nama }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" id="inputEmail" class="form-control"
                                            value="{{ $row->email }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputTLahir" class="form-label">Tempat Lahir</label>
                                        <input type="text" id="inputTLahir" class="form-control"
                                            value="{{ $row->tempat_lahir }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputTglLahir" class="form-label">Tanggal Lahir</label>
                                        <input type="text" id="inputTglLahir" class="form-control"
                                            value="{{ $row->tanggal_lahir }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputJKelamin" class="form-label">Jenis Kelamin</label>
                                        <input type="text" id="inputJKelamin" class="form-control"
                                            value="{{ $row->jenis_kelamin == 'L' ? 'Laki Laki' : 'Perempuan' }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputAgama" class="form-label">Agama</label>
                                        <input type="text" id="inputAgama" class="form-control"
                                            value="{{ $row->agama }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputAlamat" class="form-label">Alamat</label>
                                        <input type="text" id="inputAlamat" class="form-control"
                                            value="{{ $row->alamat }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputRT" class="form-label">RT</label>
                                        <input type="text" id="inputRT" class="form-control"
                                            value="{{ $row->rt_rw }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputKelurahan" class="form-label">Kelurahan</label>
                                        <input type="text" id="inputKelurahan" class="form-control"
                                            value="{{ $row->kelurahan }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputKecamatan" class="form-label">Kecamatan</label>
                                        <input type="text" id="inputKecamatan" class="form-control"
                                            value="{{ $row->kecamatan }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputKabupaten" class="form-label">Kabupaten/Kota</label>
                                        <input type="text" id="inputKabupaten" class="form-control"
                                            value="{{ $row->kabupaten_kota }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputProvinsi" class="form-label">Provinsi</label>
                                        <input type="text" id="inputProvinsi" class="form-control"
                                            value="{{ $row->provinsi }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputNoHp" class="form-label">No Hp</label>
                                        <input type="text" id="inputNoHp" class="form-control"
                                            value="{{ $row->no_hp }}" readonly>
                                    </div>
                                @endforeach
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- orang tua / wali -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Data Orang Tua / Wali') }}</div>
                    <div class="card-body">
                        <form>
                            @if ($orangtuas->isEmpty())
                                <div class="alert alert-warning" role="alert">
                                    Data orang tua / wali belum lengkap
                                </div>
                                <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahOrangTuaWali">
                                    Lengkapi sekarang
                                </button>
                            @else
                                @foreach ($orangtuas as $row)
                                    <div class="mb-2">
                                        <label for="inputUntuk" class="form-label">Hubungan</label>
                                        <input type="text" id="inputUntuk" class="form-control"
                                            value="{{ $row->untuk }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputNamaAyah" class="form-label">Nama Ayah</label>
                                        <input type="text" id="inputNamaAyah" class="form-control"
                                            value="{{ $row->nama_ayah }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputNamaIbu" class="form-label">Nama Ibu</label>
                                        <input type="text" id="inputNamaIbu" class="form-control"
                                            value="{{ $row->nama_ibu }}" readonly>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputNoHpOrtuWali" class="form-label">Nomor HP</label>
                                        <input type="text" id="inputNoHpOrtuWali" class="form-control"
                                            value="{{ $row->no_hp }}" readonly>
                                    </div>
                                @endforeach
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($sekolahs->isEmpty())
        @include('pendaftaran.modals.add-sekolah')
    @endif
    @if ($mahasiswas->isEmpty())
        @include('pendaftaran.modals.add-mahasiswa')
    @endif
    @if ($orangtuas->isEmpty())
        @include('pendaftaran.modals.add-orangtuawali');
    @endif
@endsection
