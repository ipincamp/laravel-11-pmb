@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- sekolah -->
            <div class="row justify-content-between mt-3">
                <div class="col-md-12 mb-2" >
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            {{ __('Unggah Dokumen') }}
                        </div>
                        <div class="card-body">
                            <div id="dmt1" >
                                <label for="kk">Upload KK</label>
                                <div>
                                    <img src="" alt="data rapot"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <form action="">
                            <input type="file" id="smt_1" name="semester_1" id="smt_1">
                        </form>
                    </div>
                    <div class="col-md-12 mb-6" >
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                {{ __('Unggah Dokumen') }}
                            </div>
                            <div class="card-body">
                                <div id="dmt1">
                                    <label for="ktp">Upload KTP</label>
                                    <div>
                                        <img src="" alt="data rapot">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <form action="">
                                <input type="file" id="smt_2" name="semester_2" id="smt_2">
                            </form>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    {{ __('Unggah Dokumen') }}
                                </div>
                                <div class="card-body">
                                    <div id="dmt1">
                                        <label for="akte">Upload AKTE</label>
                                        <div>
                                            <img src="" alt="data rapot">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <form action="">
                                    <input type="file" id="smt_2" name="semester_2" id="smt_2">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>     
                </div>
            </div>
@endsection