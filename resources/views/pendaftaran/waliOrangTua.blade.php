@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Calon Mahasiswa') }}</div>

                <div class="card-body">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal" data-bs-target="#tambahModalMahasiswa">
                    <i class="fa fa-plus"></i> Tambah Data </button>
                </div>
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
                        @foreach($data as $row)
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

@include('pendaftaran.modals.tambahModalWaliOrangTua')

@endsection
