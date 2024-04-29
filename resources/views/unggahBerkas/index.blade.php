@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- sekolah -->
            <div class="row justify-content-between mt-3">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            {{ __('Data Rapot Semester 1') }}
                        </div>
                        <div class="card-body">
                            <div id="dmt1">
                                <label for="smt_1">Upload Rapot Semester 1</label>
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
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            {{ __('Data Rapot Semester 2') }}
                        </div>
                        <div class="card-body">
                            <div id="dmt1">
                                <label for="smt_1">Upload Rapot Semester 2</label>
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
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            {{ __('Data Rapot Semester 3') }}
                        </div>
                        <div class="card-body">
                            <div id="dmt1">
                                <label for="smt_1">Upload Rapot Semester 3</label>
                                <div>
                                    <img src="" alt="data rapot">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <form action="">
                            <input type="file" id="smt_3" name="semester_3" id="smt_3">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            {{ __('Data Rapot Semester 4') }}
                        </div>
                        <div class="card-body">
                            <div id="dmt1">
                                <label for="smt_1">Upload Rapot Semester 4</label>
                                <div>
                                    <img src="" alt="data rapot">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <form action="">
                            <input type="file" id="smt_4" name="semester_4" id="smt_4">
                        </form>
                    </div>
                </div>
            </div>
@endsection