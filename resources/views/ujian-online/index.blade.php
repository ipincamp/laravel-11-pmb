@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- sekolah -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Ujian Online') }}
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning" role="alert">
                            <p>07.00 - 12.00, Jum'at, 26 April 2024</p>

                            <a href="{{ route('ujian.soal') }}" class="btn btn-primary btn-square">
                                Link Ujian <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
