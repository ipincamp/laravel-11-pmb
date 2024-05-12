@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Menampilkan semua data yang sudah diisi sebelumnya</h1>
            <p>Data bisa diedit dan langsung tersimpan</p>
            <p>Desain by mustofa</p>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Data Mahasiswa') }}</div>
                    <div class="card-body">
                        <form>
                            @if ($mahasiswas->isEmpty())
                                <div class="table-responsive">
                                    <table class="table table-responsive table-hover table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">NO</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Nama </th>
                                                <th class="text-center">Tanggal_lahir</th>
                                                <th class="text-center">Tempat_lahir</th>
                                                <th class="text-center">Jenis_kelamin</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">Agama</th>
                                                <th class="text-center">rt_rw</th>
                                                <th class="text-center">Kelurahan</th>
                                                <th class="text-center">Kecamatan</th>
                                                <th class="text-center">Kabupaten_kota</th>
                                                <th class="text-center">tanggal_lahir</th>
                                                <th class="text-center">Provinsi</th>
                                                <th class="text-center">No_hp</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                
                                            <?php $no=1; ?>
                                            @foreach($mahasiswas as $row)
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$row->email}}</td>
                                                <td>{{$row->nama}}</td>     
                                                <td>{{$row->tanggal_lahir}}</td>     
                                                <td>{{$row->tempat_lahir}}</td>     
                                                <td>{{$row->jenis_kelamin}}</td>     
                                                <td>{{$row->alamat}}</td>     
                                                <td>{{$row->agama}}</td>     
                                                <td>{{$row->rt_rw}}</td>     
                                                <td>{{$row->kelurahan}}</td>     
                                                <td>{{$row->kecamatan}}</td>     
                                                <td>{{$row->kabupaten_kota}}</td>     
                                                <td>{{$row->tanggal_lahir}}</td>     
                                                <td>{{$row->provinsi}}</td>     
                                                <td>{{$row->no_hp}}</td>    
                                               <!-- Button Edit -->
                                                <button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </button>
                                            </td>
                                            </tr>
                                            <?php $no++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                  </div>
                                </div>
                               
                            @else
                                @foreach ($mahasiswas as $row)

                                @endforeach
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- orang tua  --}}
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Data Orang Tua / Wali') }}</div>
                    <div class="card-body">
                            <form>
                                @if ($mahasiswas->isEmpty())
                                    <div class="table-responsive">
                                        <table class="table table-responsive table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">NO</th>
                                                    <th class="text-center">Hubungan</th>
                                                    <th class="text-center">Nama_Ayah </th>
                                                    <th class="text-center">Nama_Ibu</th>
                                                    <th class="text-center">Nomer_hp</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                    
                                                <?php $no=1; ?>
                                                @foreach($mahasiswas as $row)
                                                <tr>
                                                    <td>{{$no}}</td>
                                                    <td>{{$row->hubungan}}</td>
                                                    <td>{{$row->nama_ayah}}</td>     
                                                    <td>{{$row->nama_ibu}}</td>     
                                                    <td>{{$row->nomer_hp}}</td> 
                                                   <!-- Button Edit -->
                                                    <button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </button>
                                                </td>
                                                </tr>
                                                <?php $no++; ?>
                                                @endforeach
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                   
                                @else
                                    @foreach ($orangtua as $row)
    
                                    @endforeach
                                @endif
                            </form>
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
