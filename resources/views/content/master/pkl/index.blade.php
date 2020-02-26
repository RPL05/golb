@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="pt-3 mb-3">
                            <h3>Master Permohonan PSG</h3>
                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Program / Keahlian</th>
                                <th>Nama PT</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pengajuanpsg as $pengajuan)
                                <tr>
                                    <td>{{$pengajuan->nama}}</td>
                                    <td>{{$pengajuan->jurusan->nama_kelas}} - {{$pengajuan->jurusan->nama_jurusan}}</td>
                                    <td>{{$pengajuan->industri->nama_industri}}</td>
                                    <td>
                            <!-- Action Detail PSG  -->
                            <form action="{{route('master.hapus.data.pengajuan', $pengajuan->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                                <a href="{{route('master.tampilkan.detail.permohonan.pkl-psg', $pengajuan->id)}}" class="btn btn-outline-info btn-sm">
                                     Detail Pengajuan
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