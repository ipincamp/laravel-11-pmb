@extends('layouts.app')

@section('content')
    <div class="container">
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
                                <th>Nama</th>
                                <th>Bank</th>
                                <th>Nominal</th>
                                <th>Bukti</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sampleData as $b)
                            <tr>
                                <td style="width: 5%">{{ $loop->iteration }}</td>
                                <td style="width: 25%">{{ $b['nama'] }}</td>
                                <td style="width: 10%">{{ $b['bank'] }}</td>
                                <td style="width: 20%">{{ $b['nominal'] }}</td>
                                <td style="width: 10%">
                                    <button class="btn btn-sm btn-primary" onclick="window.open('{{ asset('storage/bukti/' . $b['bukti']) }}', '_blank')">
                                        <i class="fa fa-eye"></i> Lihat Bukti
                                    </button>
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
