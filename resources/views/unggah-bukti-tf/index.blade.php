@extends('layouts.app')

@section('content')
    <div class="container">

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="mb-2 d-flex justify-content-between align-items-center">
                    <h1>Bukti Pembayaran Daftar Ulang</h1>
                    <button type="button" class="btn btn-success btn-square" data-bs-toggle="modal" data-bs-target="#modalUploadBukti">
                        <i class="fa fa-plus"></i> Upload Bukti
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Metode</th>
                                <th>Tujuan</th>
                                <th>Jumlah</th>
                                <th>Tanggal Bayar</th>
                                <th>Bukti</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($buktis as $bukti)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bukti->metode }}</td>
                                <td>{{ $bukti->tujuan }}</td>
                                <td>{{ $bukti->jumlah }}</td>
                                <td>{{ $bukti->tanggal_bayar }}</td>
                                <td>
                                    <a href="{{ $bukti->bukti }}" target="_blank">
                                        <img src="dokumen/{{ $bukti->bukti }}" alt="Bukti Pembayaran" class="img-thumbnail" style="width: 100px;">
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('unggah-bukti-tf.modal.upload-bukti')
@endsection
