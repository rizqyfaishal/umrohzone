@extends('layouts.app')

@section('content')
    <div class="container dashboard-container">
        <div class="row">
            <div class="col-lg-3">
                @include('dashboard._dashboard-user-side-nav')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="dashboard-content">
                            <h1>Informasi Akun Jamaah</h1>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap Pemilik Akun</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="Rizqy Faishal" placeholder="Rizqy Faishal">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="rizqy@gmail.com" placeholder="abata@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor HP</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="087884187967" placeholder="087884187967">
                                </div>
                                <div class="form-group">
                                    <label for="alamat-agent">Alamat Pemilik Akun</label>
                                    <textarea class="form-control" id="alamat-agent" name="jalan teratai putih 1 gang 3 nomor 131 RT 04 RW 04 Perumnas Klender Jakarta" rows="3" placeholder="jalan teratai putih 1 gang 3 nomor 131 RT 04 RW 04 Perumnas Klender Jakarta"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ganti Password Baru</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password Baru">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <br>

            </div>
        </div>
    </div>
@endsection