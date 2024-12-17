@extends('layouts.app')

@section('head')
    <!-- Memasukkan file CSS register khusus -->
    <link rel="stylesheet" href="{{ asset('assets/view/register.css') }}">
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h4>Form Pendaftaran Pengguna</h4>
                </div>
                <div class="card-body">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Daftar</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <p>Sudah punya akun? <a href="/login" class="text-primary">Login di sini</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
