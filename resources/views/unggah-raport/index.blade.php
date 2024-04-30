@extends('layouts.app')

@section('content')
    <div class="container h-100 align-items-center">
        <div class="row justify-content-around mt-3">

            {{-- semester 1 --}}
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Raport Semester 1</h5>
                    <div class="card-body">
                        @if (!Storage::exists('raport/' . Auth::id() . '-semester1.jpg'))
                            <div class="mb-3">
                                <form action="{{ route('raports.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputFile" name="semester1">
                                        <label class="input-group-text" for="inputFile">Upload</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('raport/') }}/{{ Auth::id() }}-semester1.jpg" alt="preview" width="100%" class="img-thumbnail">
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- semester 2 --}}
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Raport Semester 2</h5>
                    <div class="card-body">
                        @if (!Storage::exists('raport/' . Auth::id() . '-semester2.jpg'))
                            <div class="mb-3">
                                <form action="{{ route('raports.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputFile" name="semester2">
                                        <label class="input-group-text" for="inputFile">Upload</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('raport/') }}/{{ Auth::id() }}-semester2.jpg" alt="preview" width="100%" class="img-thumbnail">
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
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
                        @if (!Storage::exists('raport/' . Auth::id() . '-semester3.jpg'))
                            <div class="mb-3">
                                <form action="{{ route('raports.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputFile" name="semester3">
                                        <label class="input-group-text" for="inputFile">Upload</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('raport/') }}/{{ Auth::id() }}-semester3.jpg" alt="preview" width="100%" class="img-thumbnail">
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- semester 4 --}}
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Raport Semester 4</h5>
                    <div class="card-body">
                        @if (!Storage::exists('raport/' . Auth::id() . '-semester4.jpg'))
                            <div class="mb-3">
                                <form action="{{ route('raports.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputFile" name="semester4">
                                        <label class="input-group-text" for="inputFile">Upload</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('raport/') }}/{{ Auth::id() }}-semester4.jpg" alt="preview" width="100%" class="img-thumbnail">
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
