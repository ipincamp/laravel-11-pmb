@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="mb-2">
                    <h1>Tabel yang berisi bukti pembayaran (upload foto bukti)</h1>
                    <p>Desain by amal</p>
                    <button class="btn btn-success">
                        <i class="fa fa-plus"></i> Upload Bukti
                    </button>
                </div>

                <table class=table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Bank</th>
                            <th>Nominal</th>
                            <th>Bukti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sampleData as $b)
                        <tr>
                            <td>{{ $b['nama'] }}</td>
                            <td>{{ $b['bank'] }}</td>
                            <td>{{ $b['nominal'] }}</td>
                            <td>
                                <a href="{{ asset('storage/bukti/' . $b['bukti']) }}" target="_blank">
                                    <i class="fa fa-eye"></i> Lihat Bukti
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
