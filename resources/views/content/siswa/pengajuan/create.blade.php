@extends('layouts.app')

@section('content')
<div class="card border-0 shadow">
    <div class="card-body">
        <form action="" method="post">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                    <label for="">Nama Industri</label>
                        <select name="" id="" class="form-control">
                            <option value="">Pilih Industri</option>
                            <option value="">~~Rekayasa Perangkat Lunak~~</option>
                            <option value="">~-MultiMedia-~</option>
                            <option value="">/\Teknik Komputer dan Jaringan\/</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama Siswa"id="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Kelas</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Kelas</option>
                                    <option value="">Kelas 10</option>
                                    <option value="">Kelas 11</option>
                                    <option value="">Kelas 12</option>
                                </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" placeholder="alamat" id="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" placeholder="+62" id="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input type="email" class="form-control" placeholder="example@gmail.com" id="">
                        </div>
                    </div><div class="col-md-3">
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" name="" class="form-control" placeholder="pengajuan psg" id="" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Agama</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Agama</option>
                                    <option value="">Islam</option>
                                    <option value="">Kristen</option>
                                    <option value="">Budha</option>
                                    <option value="">Hindu</option>
                                    <option value="">Konghucu</option>
                                    <option value="">Atheis</option>
                                    <option value="">Katholik</option>
                                </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="">Laki-Laki</option>
                                    <option value="">Perempuan</option>
                                </select>
                        </div>
                    </div>
            </div>
        </form>
    </div>
</div>

@endsection