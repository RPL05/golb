@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-8">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="px-5 py-5 text-center">
                        <div class="d-flex justify-content-center align-item-center">
                                <div>
                                <img src="{{asset('images/Logo Al bahri.jpg')}}" width="15%" height="10%" alt="" align="left">
                                <h2 class="font-weight-bolder ">
                                    SURAT PENGAJUAN PKL / PSG
                                </h2>
                                <h3>SMK AL-BAHRI KAMPUS C</h3>
                                <p class="text-muted">
                                    Jl. Yon Armed 7/105-GS No. 143 Kelurahan Cikiwul Kecamatan Bantargebang Kota Bekasi Telp : (021) 82610140
                                </p>
                                <hr class = "border border-dark">
                                    <a class="d-flex">Nomor     :</a>
                                    <a class="d-flex">Lampiran  :</a>
                                    <h6 class="d-flex"> Perihal  :
                                     <span class="font-weight-bold"> Permohonan Pendidikan Sistem Ganda (PSG) Tahun Ajaran 2019/2020 
                                     </span> </h6>
                                    <br>
                                    <a class="d-flex">Kepada Yth :</a>
                                    <p class="d-flex">Bapak/Ibu Pimpinan</p>
                                    <br>
                                    <p class="d-flex">Dengan Hormat,</p>
                                    <div style="text-align:justify">Sehubungan dengan Pelaksanaan program kegiatan PSG pada SMK AL-BAHRI tahun ajaran 2019/2020 dimana kami mewajibkan kepada setiap siswa/i untuk melaksanakan kegiatan Pendidikan Sistem Ganda (PSG) sebagai salah satu syarat untuk menempuh ujian akhir di kelas XII </div>
                                    <br>
                                    <p style="text-align:justify">Kami Bermaksud menyampaikan permohonan serta kesediaan  Instansi/Perusahaan yang Bapak/Ibu pimpin untuk dapat menerima siswa/i kami dalam pelaksanaan kegiatan PSG tersebut di atas mulai 07 oktober 2019 s.d 10 januari 2020</p>
                                    <br>
                                    <p style="text-align:justify">Adapun Siswa/i kami yang akan melaksanakan kegiatan PSG adalah sebagai berikut.</p>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NIS</th>
                                            <th>NAMA</th>
                                            <th>L / P</th>
                                            <th>PROGRAM KEAHLIAN</th>
                                            <th>NOMOR TELEPON</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>600070952</td>
                                            <td>M.Bayu.Setiawan</td>
                                            <td>Laki - Laki</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                            <td>089698922721</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="py-4">
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <h5>Kepala Sekolah</h5>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <h5>Miftachurochman, S.T</h5>
                                </div>

                                <div class="">
                                    <h5>Hormat kami</h5>
                                    <h5>Kepala Program Keahlian</h5>
                                    <h5>RPL</h5>
                                    <br>
                                    <br>
                                    <br>
                                    <h5>Ahfid Bachtiar, S.Kom</h5>
                                </div>
                            </div>
                        </div>
                        <tbody>
                                    <tr>
                                        <td>
                                            <form action="" method="post">
                                            @csrf
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-info ">Setujui Permintaan PSG</button>
                                                    <a href="{{route('master.industri')}}" class="btn btn-outline-secondary border-0">Kembali</a>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                       
@endsection