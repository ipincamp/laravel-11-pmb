@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- sekolah -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Ujian Online') }}
                    </div>
                    <div class="card-body">
                        <p>07.00 - 12.00, jum'at, 26 April 2024</p>
                        <p>Waktu tersisa: 1 jam 30 menit</p>
                        <p>Soal 1/10</p>
                        <p>Soal</p>
                        <p>1. 2 + 2 = ?</p>
                        <form action="{{ route('ujian.jawab') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="radio" name="jawaban" id="jawaban1" value="1">
                                <label for="jawaban1">1</label>

                                <input type="radio" name="jawaban" id="jawaban2" value="2">
                                <label for="jawaban2">2</label>

                                <input type="radio" name="jawaban" id="jawaban3" value="3">
                                <label for="jawaban3">3</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
