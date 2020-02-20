@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="pt-3 mb-3">
                            <a href="{{route('master.tampilkan.form-baru.industri')}}" class="btn btn-outline-info">
                                Create New Industri
                            </a>
                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama industri</th>
                                <th>Nama Pimpinan</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($industris as $industri)
                                <tr>
                                    <td>{{$industri->nama_industri}}</td>
                                    <td>{{$industri->nama_pimpinan}}</td>
                                    <td>{{$industri->alamat}}</td>
                                    <td>{{$industri->email}}</td>
                                    <td>
                            <!-- Action edit data dan hapus data  -->
                            <form action="{{route('master.hapus.data.industri', $industri->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                                <a href="{{route('master.edit1-industri', $industri->id)}}" class="btn btn-outline-info btn-sm">
                                     Edit Data
                               </a>
                               <a href="{{route('master.pkl', $industri->id)}}" class="btn btn-outline-success btn-sm">
                                     Ajukan PKL
                               </a>
                               <button type="submit" class="btn btn-outline-danger btn-sm">
                                     Hapus Data
                               </button>
                            </form>
                            <!-- penutup -->
                        </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        data yang anda minta belum tersedia.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection