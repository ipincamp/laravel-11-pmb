@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Sekolah') }}</div>

                <div class="card-body">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal" data-bs-target="#modalTambahSekolah">
                    <i class="fa fa-plus"></i> Tambah Data </button>
                </div>
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
                        @foreach($data as $row)
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

@include('pendaftaran.modals.sekolah')

@endsection
