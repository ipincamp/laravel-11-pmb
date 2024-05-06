@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 py-3 px-3">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Progress Bar') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 py-3 px-3">
                <h1>Pengumuman Kelulusan</h1>
                <span class="text-small">{{ __('Akan muncul jika semua progress selesai') }}</span>
                <p>Berikut adalah hasil kelulusan Anda:</p>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Keterangan</th>
                            <td>
                                <a href="{{ url('cetak') }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-print"></i> Cetak Pengumuman
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
