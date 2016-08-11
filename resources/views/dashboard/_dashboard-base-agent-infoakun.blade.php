@extends('layouts.app')

@section('content')
    <div class="container dashboard-container">
        <div class="row">
            <div class="col-lg-3">
                @include('dashboard._dashboard-agent-side-nav')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="dashboard-content">
                            <h1>Informasi Akun Travel Agent</h1>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label for="nama-agent">Nama Travel Agent</label>
                                    <input type="text" class="form-control" id="nama-agent" value="Travel Agent Abata" placeholder="Travel Agent Abata">
                                </div>
                                <div class="form-group">
                                    <label for="email-agent">Email</label>
                                    <input type="email" class="form-control" id="email-agent" value="abata@gmail.com" placeholder="abata@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="nohp">Nomor HP</label>
                                    <input type="text" class="form-control" id="nohp" value="087884187967" placeholder="087884187967">
                                </div>
                                <div class="form-group">
                                    <label for="bank">Nama Bank</label>
                                    <input type="text" class="form-control" id="bank" value="BNI" placeholder="0336689456">
                                </div>
                                <div class="form-group">
                                    <label for="norek">Nomor Rekening</label>
                                    <input type="text" class="form-control" id="norek" value="0336689456" placeholder="0336689456">
                                </div>
                                <div class="form-group">
                                    <label for="namadirektur">Nama Direktur</label>
                                    <input type="text" class="form-control" id="namadirektur" value="Bapak Anto Abdurrahim" placeholder="Bapak Anto Abdurrahim">
                                </div>
                                <div class="form-group">
                                    <label for="alamat-agent">Alamat Travel Agent</label>
                                    <textarea class="form-control" id="alamat-agent" name="jalan teratai putih 1 gang 3 nomor 131 RT 04 RW 04 Perumnas Klender Jakarta" rows="3" placeholder="jalan teratai putih 1 gang 3 nomor 131 RT 04 RW 04 Perumnas Klender Jakarta"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="propinsi">Propinsi Travel Agent</label>
                                    <input type="text" class="form-control" id="propinsi" value="Jawa Timur" placeholder="Jawa Timur">
                                </div>
                                <div class="form-group">
                                    <label for="kota">Kota Travel Agent</label>
                                    <input type="text" class="form-control" id="kota" value="Surabaya" placeholder="Surabaya">
                                </div>
                                <div class="form-group">
                                    <label for="foto">Logo Travel Agent</label>
                                    <input type="file" id="foto">
                                </div>
                                <div class="form-group">
                                    <label for="password-agent">Ganti Password Baru</label>
                                    <input type="password" class="form-control" id="password-agent" placeholder="Masukkan Password Baru">
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