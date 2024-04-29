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
                        <p>09.00 - 12.00, kamis, 25 April 2024</p>
                        <form>
                                <button type="button" class="btn btn-primary btn-square" data-bs-toggle="modal"
                                    data-bs-target="#">
                                    Link Ujian
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection