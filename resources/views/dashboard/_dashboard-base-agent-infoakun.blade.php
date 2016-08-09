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
                                    <label for="exampleInputEmail1">Nama Travel Agent</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="Travel Agent Abata" placeholder="Travel Agent Abata">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="abata@gmail.com" placeholder="abata@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor HP</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="087884187967" placeholder="087884187967">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Direktur</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="Bapak Anto Abdurrahim" placeholder="Bapak Anto Abdurrahim">
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