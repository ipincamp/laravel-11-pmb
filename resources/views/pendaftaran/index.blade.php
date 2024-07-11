@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            {{-- error --}}
            <div class="col-md-10">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="m-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <!-- calon mahasiswa -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Data Calon Mahasiswa') }}</div>
                    <div class="card-body">
                        <form>
                            @if (isset($mahasiswa) && $mahasiswa)
                                <div class="mb-2">
                                    <label for="inputNama" class="form-label">Nama Lengkap</label>
                                    <input type="text" id="inputNama" class="form-control"
                                        value="{{ auth()->user()->name }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" id="inputEmail" class="form-control"
                                        value="{{ auth()->user()->email }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputTLahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" id="inputTLahir" class="form-control"
                                        value="{{ $mahasiswa->tempat_lahir }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputTglLahir" class="form-label">Tanggal Lahir</label>
                                    <input type="text" id="inputTglLahir" class="form-control"
                                        value="{{ $mahasiswa->tanggal_lahir }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputJKelamin" class="form-label">Jenis Kelamin</label>
                                    <input type="text" id="inputJKelamin" class="form-control"
                                        value="{{ $mahasiswa->jenis_kelamin == 'L' ? 'Laki Laki' : 'Perempuan' }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputAgama" class="form-label">Agama</label>
                                    <input type="text" id="inputAgama" class="form-control"
                                        value="{{ $mahasiswa->agama }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputAlamat" class="form-label">Alamat</label>
                                    <input type="text" id="inputAlamat" class="form-control"
                                        value="{{ $mahasiswa->alamat }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputRT" class="form-label">RT</label>
                                    <input type="text" id="inputRT" class="form-control"
                                        value="{{ $mahasiswa->rt }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputRW" class="form-label">RW</label>
                                    <input type="text" id="inputRW" class="form-control"
                                        value="{{ $mahasiswa->rw }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputKelurahan" class="form-label">Kelurahan</label>
                                    <input type="text" id="inputKelurahan" class="form-control"
                                        value="{{ $mahasiswa->kelurahan }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputKecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" id="inputKecamatan" class="form-control"
                                        value="{{ $mahasiswa->kecamatan }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputKabupaten" class="form-label">Kabupaten/Kota</label>
                                    <input type="text" id="inputKabupaten" class="form-control"
                                        value="{{ $mahasiswa->kabupaten }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputProvinsi" class="form-label">Provinsi</label>
                                    <input type="text" id="inputProvinsi" class="form-control"
                                        value="{{ $mahasiswa->provinsi }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputNoHp" class="form-label">No Hp</label>
                                    <input type="text" id="inputNoHp" class="form-control"
                                        value="{{ $mahasiswa->no_hp }}" readonly>
                                </div>
                            @else
                                <div class="alert alert-warning" role="alert">
                                    Data calon mahasiswa belum lengkap
                                </div>
                                <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahMahasiswa">
                                    Lengkapi sekarang
                                </button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- data prodi -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Data Prodi') }}
                    </div>

                    <div class="card-body">
                        <form>
                            @if (isset($kelengkapan) && $kelengkapan)
                                {{-- pilihan 1 --}}
                                <div class="mb-2">
                                    <label for="inputProdi1" class="form-label">Pilihan 1</label>
                                    <input type="text" id="inputProdi1" class="form-control"
                                        value="{{ $kelengkapan->opsi_1 }}" readonly>
                                </div>

                                {{-- pilihan 2 --}}
                                <div class="mb-2">
                                    <label for="inputProdi2" class="form-label">Pilihan 2</label>
                                    <input type="text" id="inputProdi2" class="form-control"
                                        value="{{ $kelengkapan->opsi_2 }}" readonly>
                                </div>

                                {{-- pilihan 3 --}}
                                <div class="mb-2">
                                    <label for="inputProdi3" class="form-label">Pilihan 3</label>
                                    <input type="text" id="inputProdi3" class="form-control"
                                        value="{{ $kelengkapan->opsi_3 }}" readonly>
                                </div>
                            @else
                                <div class="alert alert-warning" role="alert">
                                    Data prodi belum lengkap
                                </div>
                                <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal"
                                    data-bs-target="#modalPilihProdi">
                                    Lengkapi sekarang
                                </button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- orang tua -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Data Orang Tua / Wali') }}</div>
                    <div class="card-body">
                        <form>
                            @if (isset($orangtua) && $orangtua)
                                <div class="mb-2">
                                    <label for="inputUntuk" class="form-label">Hubungan</label>
                                    <input type="text" id="inputUntuk" class="form-control"
                                        value="{{ $orangtua->untuk }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputNamaAyah" class="form-label">Nama Ayah</label>
                                    <input type="text" id="inputNamaAyah" class="form-control"
                                        value="{{ $orangtua->nama_ayah }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputNamaIbu" class="form-label">Nama Ibu</label>
                                    <input type="text" id="inputNamaIbu" class="form-control"
                                        value="{{ $orangtua->nama_ibu }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="inputNoHpOrtuWali" class="form-label">Nomor HP</label>
                                    <input type="text" id="inputNoHpOrtuWali" class="form-control"
                                        value="{{ $orangtua->no_hp }}" readonly>
                                </div>
                            @else
                                <div class="alert alert-warning" role="alert">
                                    Data orang tua / wali belum lengkap
                                </div>
                                <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahOrangTuaWali">
                                    Lengkapi sekarang
                                </button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- sekolah -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Data Sekolah') }}
                    </div>

                    <div class="card-body">
                        <form>
                            @if (isset($sekolah) && $sekolah)
                                <div class="mb-3">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="number" id="nisn" class="form-control" value="{{ $sekolah->nisn }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="derajat" class="form-label">Derajat</label>
                                    <input type="text" id="derajat" class="form-control" value="{{ $sekolah->derajat }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="sekolah" class="form-label">Nama Sekolah</label>
                                    <input type="text" id="sekolah" class="form-control" value="{{ $sekolah->nama }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <input type="text" id="jurusan" class="form-control" value="{{ $sekolah->jurusan }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" name="alamat" placeholder="Alamat" aria-label="Alamat">{{ $sekolah->alamat }}</textarea>
                                </div>
                            @else
                                <div class="alert alert-warning" role="alert">
                                    Data sekolah belum lengkap
                                </div>
                                <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahSekolah">
                                    Lengkapi sekarang
                                </button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pendaftaran.modals.add-prodi')
    @include('pendaftaran.modals.add-sekolah')
    @include('pendaftaran.modals.add-mahasiswa')
    @include('pendaftaran.modals.add-orangtuawali');
@endsection
