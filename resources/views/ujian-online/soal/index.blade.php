@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Halaman Soal -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Soal Ujian') }}</div>
                    <div class="card-body">
                        <!-- Tambahkan formulir untuk soal-soal ujian di sini -->
                        <form action="{{ route('ujian.jawab') }}" method="post">
                            @csrf

                            <!-- Judul -->
                            <div class="row justify-content-center mt-3">
                                <div class="col-md-10">
                                    <h2 class="text-center">Ujian</h2>
                                    <h4 class="text-center">Mata Pelajaran: Matematika</h4>
                                </div>
                            </div>

                            <!-- Soal Pilihan Ganda -->
                            <div class="row justify-content-center mt-3">
                                <div class="col-md-10">
                                    <div class="card">
                                        <div class="card-header">Soal Pilihan Ganda</div>
                                        <div class="card-body">
                                            <ol>
                                                <li>
                                                    <p>Persamaan garis yang melalui titik (3, 4) dan (7, 10) adalah...</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="soal1"
                                                            id="jawaban1a" value="a">
                                                        <label class="form-check-label" for="jawaban1a">a. y = 2x +
                                                            2</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="soal1"
                                                            id="jawaban1b" value="b">
                                                        <label class="form-check-label" for="jawaban1b">b. y = 2x +
                                                            4</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="soal1"
                                                            id="jawaban1c" value="c">
                                                        <label class="form-check-label" for="jawaban1c">c. y = 2x -
                                                            2</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="soal1"
                                                            id="jawaban1d" value="d">
                                                        <label class="form-check-label" for="jawaban1d">d. y = x + 4</label>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Soal Isian Singkat -->
                            <div class="row justify-content-center mt-3">
                                <div class="col-md-10">
                                    <div class="card">
                                        <div class="card-header">Soal Isian Singkat</div>
                                        <div class="card-body">
                                            <ol start="2">
                                                <li>
                                                    <p>Sebuah segitiga memiliki panjang alas 10 cm dan tinggi 8 cm. Luas
                                                        segitiga tersebut adalah...</p>
                                                    <input type="text" class="form-control" id="jawaban2">
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="row justify-content-center mt-3">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit Jawaban</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
