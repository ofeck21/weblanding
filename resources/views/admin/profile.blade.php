@extends('layouts.admin')

@section('title', 'Profil Admin - '.config('app.name'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Profil Admin</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <input id="name" type="text" class="form-control" name="name" placeholder="Nama" value="{{ auth()->user()->name }}" required autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ auth()->user()->email }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Update Profil
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Ganti Password</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('profile.password') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="current_password" class="col-md-4 control-label">Password Saat Ini</label>

                            <input id="current_password" type="password" class="form-control" name="current_password" placeholder="Password Saat Ini" required>
                            <div class="form-group mb-3"></div>
                                <label for="new_password" class="col-md-4 control-label">Password Baru</label>

                                <input id="new_password" type="password" class="form-control" name="new_password" placeholder="Password Baru" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="confirm_password" class="col-md-4 control-label">Konfirmasi Password</label>

                                <input id="confirm_password" type="password" class="form-control" name="new_password_confirmation" placeholder="Konfirmasi Password" required>
                            </div>

                            <div class="form-group mb-3">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        Ganti Password
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
