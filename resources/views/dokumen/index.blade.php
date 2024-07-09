@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="row justify-content-center mt-3 g-3">
            {{-- KK --}}
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Kartu Keluarga</h5>
                    <div class="card-body">
                        @if (!Storage::exists('dokumen/' . Auth::id() . '-kk.jpg'))
                            <div class="mb-3">
                                <form action="{{ route('dokumens.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputFile" name="kk">
                                        <label class="input-group-text" for="inputFile">Upload</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('dokumen/') }}/{{ Auth::id() }}-kk.jpg" alt="preview" class="img-thumbnail" style="max-height: 50%" />
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- KTP --}}
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Kartu Tanda Penduduk</h5>
                    <div class="card-body">
                        @if (!Storage::exists('dokumen/' . Auth::id() . '-ktp.jpg'))
                            <div class="mb-3">
                                <form action="{{ route('dokumens.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputFile" name="ktp">
                                        <label class="input-group-text" for="inputFile">Upload</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('dokumen/') }}/{{ Auth::id() }}-ktp.jpg" alt="preview" class="img-thumbnail" style="max-height: 50%" />
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- AKTE --}}
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Akte Kelahiran</h5>
                    <div class="card-body">
                        @if (!Storage::exists('dokumen/' . Auth::id() . '-akte.jpg'))
                            <div class="mb-3">
                                <form action="{{ route('dokumens.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputFile" name="akte">
                                        <label class="input-group-text" for="inputFile">Upload</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('dokumen/') }}/{{ Auth::id() }}-akte.jpg" alt="preview" class="img-thumbnail" style="max-height: 50%" />
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection