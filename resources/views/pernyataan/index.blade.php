@extends('layouts.app')

@section('content')
    <div class="container">
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
    </div>
@endsection
