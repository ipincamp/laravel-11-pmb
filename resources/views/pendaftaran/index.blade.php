@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center d-flex">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Data Sekolah') }}</div>

                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal" data-bs-target="#modalTambahSekolah">
                        <i class="fa fa-plus"></i> Tambah Data </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Data Calon Mahasiswa') }}</div>

                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal" data-bs-target="#tambahModalMahasiswa">
                        <i class="fa fa-plus"></i> Tambah Data </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Data Orang Tua / Wali') }}</div>
                
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal" data-bs-target="#tambahModalWaliOrangTua">
                            <i class="fa fa-plus"></i> Tambah Data </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- sekolah -->
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Calon Mahasiswa') }}</div>

                <div class="card-body">
                
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <div class="table-responsive">
                            <table class="table table-responsive table-bordered table-stripped table-hover">
                                <thead>
                                    <tr>
                                        <th>Nisn</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Derajat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    @foreach($sekolah as $row)
                                    <tr>
                                        <td>{{ $nisn}}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->derajat }}</td>
                                    </tr>   
                                    <?php $no++; ?>
                                    @endforeach

                                </tbody>
                            </table>
                        
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <!-- calon mahasiswa -->
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Calon Mahasiswa') }}</div>

                <div class="card-body">
               
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <div class="table-responsive">
                            <table class="table table-responsive table-bordered table-stripped table-hover">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat </th>
                                        <th>Rt/Rw </th>
                                        <th>Kelurahan </th>
                                        <th>Kecamatan </th>
                                        <th>Kabupaten Kota </th>
                                        <th>Provinsi </th>
                                        <th>No Hp </th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    @foreach($mahasiswa as $row)
                                    <tr>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->tempat_lahir }}</td>
                                        <td>{{ $row->tanggal_lahir }}</td>
                                        <td>{{ $row->jenis_kelamin }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->rt_rw }}</td>
                                        <td>{{ $row->kelurahan }}</td>
                                        <td>{{ $row->kecamatan }}</td>
                                        <td>{{ $row->kabupaten_kota }}</td>
                                        <td>{{ $row->provinsi }}</td>
                                        <td>{{ $row->no_hp }}</td>
                                    </tr>   
                                    <?php $no++; ?>
                                    @endforeach

                                </tbody>
                            </table>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- orang tua / wali -->
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Calon Mahasiswa') }}</div>

                <div class="card-body">
                
                <div class="btn-group" role="group" aria-label="Basic example">
                <div class="table-responsive">
                <table class="table table-responsive table-bordered table-stripped table-hover">
                    <thead>
                        <tr>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th>No Hp</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach($orangtuawali as $row)
                        <tr>
                            <td>{{ $row->nama_ayah }}</td>
                            <td>{{ $row->nama_ibu }}</td>
                            <td>{{ $row->no_hp }}</td>
                        </tr>   
                        <?php $no++; ?>
                        @endforeach

                    </tbody>
                    </table>
                
                </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@include('pendaftaran.modals.sekolah')
@include('pendaftaran.modals.mahasiswa')
@include('pendaftaran.modals.wali-orangtua')
@endsection