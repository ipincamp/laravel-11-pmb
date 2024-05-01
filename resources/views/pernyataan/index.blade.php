@extends('layouts.app')

@section('content')
    <div class="container h-100 align-items-center">
        <div class="row justify-content-around mt-3">

            {{-- lampiran 1 --}}
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Halaman 1</h5>
                    <div class="card-body">
                        @if (!Storage::exists('pernyataan/' . Auth::id() . '-halaman1.jpg'))
                            <div class="mb-3">
                                <form action="{{ route('pernyataans.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputFile" name="halaman1">
                                        <label class="input-group-text" for="inputFile">Upload</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('pernyataan/') }}/{{ Auth::id() }}-halaman1.jpg" alt="preview" width="100%" class="img-thumbnail">
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

            {{-- lampiran 2 --}}
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Halaman 2</h5>
                    <div class="card-body">
                        @if (!Storage::exists('pernyataan/' . Auth::id() . '-halaman2.jpg'))
                            <div class="mb-3">
                                <form action="{{ route('pernyataans.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputFile" name="halaman2">
                                        <label class="input-group-text" for="inputFile">Upload</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('pernyataan/') }}/{{ Auth::id() }}-halaman2.jpg" alt="preview" width="100%" class="img-thumbnail">
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

            {{-- lampiran 3 --}}
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Halaman 3</h5>
                    <div class="card-body">
                        @if (!Storage::exists('pernyataan/' . Auth::id() . '-halaman3.jpg'))
                            <div class="mb-3">
                                <form action="{{ route('pernyataans.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputFile" name="halaman3">
                                        <label class="input-group-text" for="inputFile">Upload</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('pernyataan/') }}/{{ Auth::id() }}-halaman3.jpg" alt="preview" width="100%" class="img-thumbnail">
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

            {{-- lampiran 4 --}}
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Halaman 4</h5>
                    <div class="card-body">
                        @if (!Storage::exists('pernyataan/' . Auth::id() . '-halaman4.jpg'))
                            <div class="mb-3">
                                <form action="{{ route('pernyataans.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputFile" name="halaman4">
                                        <label class="input-group-text" for="inputFile">Upload</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('pernyataan/') }}/{{ Auth::id() }}-halaman4.jpg" alt="preview" width="100%" class="img-thumbnail">
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

    {{-- <div class="container">
        <!-- sekolah -->
        <div class="row justify-content-between mt-3">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Surat Pernyataan') }}
                    </div>
                    <div class="card-body">
                        <div id="dmt1">
                            <label for="lmprn_1">Lampiran 1</label>
                        </div>
                        <div>
                            <form action="">
                                <input type="file" id="lmprn_1" name="lampiran_1" id="lmprn_1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Surat Pernyataan') }}
                    </div>
                    <div class="card-body">
                        <div id="dmt1">
                            <label for="lmprn_2">Lampiran 2</label>
                        </div>
                        <div>
                            <form action="">
                                <input type="file" id="lmprn_2" name="lampiran_2" id="lmprn_2">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Surat Pernyataan') }}
                    </div>
                    <div class="card-body">
                        <div id="dmt1">
                            <label for="lmprn_3">Lampiran 3</label>
                        </div>
                        <div>
                            <form action="">
                                <input type="file" id="lmprn_3" name="lampiran_3" id="lmprn_3">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Surat Pernyataan') }}
                    </div>
                    <div class="card-body">
                        <div id="dmt1">
                            <label for="lmprn_4">Lampiran 4</label>
                        </div>
                        <div>
                            <form action="">
                                <input type="file" id="lmprn_4" name="lampiran_4" id="lmprn_4">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
