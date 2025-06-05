@extends('layouts.main')

@section('content')
    <div class="card shadow-sm">
        <div class="row g-0">
            <!-- Foto Profil -->
            <div class="col-md-4 d-flex justify-content-center align-items-center p-3 bg-light">
                <img src="{{ $user->avatar }}" class="img-fluid rounded-circle" alt="Foto Profil"
                    style="width: 150px; height: 150px;">
            </div>
            <!-- Detail Profil -->
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ $user->name }}</h4>
                    <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                    <p class="card-text"><strong>Update Account:</strong> {{ $user->updated_at }}</p>
                    <button class="btn btn-primary mt-3">Edit Profil</button>
                </div>
            </div>
        </div>
    </div>
@endsection
