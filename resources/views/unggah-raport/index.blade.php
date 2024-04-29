@extends('layouts.app')

@section('content')
    <div class="container h-100 align-items-center">
        <div class="row justify-content-around mt-3">

            {{-- semester 1 --}}
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Raport Semester 1</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <img src="" alt="preview">
                        </div>
                        <form action="">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputSemester1" name="semester1">
                                <label class="input-group-text" for="inputSemester1">Upload</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- semester 2 --}}
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Raport Semester 2</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <img src="" alt="preview">
                        </div>
                        <form action="">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputSemester2" name="semester2">
                                <label class="input-group-text" for="inputSemester2">Upload</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-around mt-3">

            {{-- semester 3 --}}
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Raport Semester 3</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <img src="" alt="preview">
                        </div>
                        <form action="">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputSemester3" name="semester3">
                                <label class="input-group-text" for="inputSemester3">Upload</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- semester 4 --}}
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Raport Semester 4</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <img src="" alt="preview">
                        </div>
                        <form action="">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputSemester4" name="semester4">
                                <label class="input-group-text" for="inputSemester4">Upload</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
