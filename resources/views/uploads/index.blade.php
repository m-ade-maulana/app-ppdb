@extends('layouts.main')

@section('content')
    <div class="card mb-4">
        <h5 class="card-header fs-2 fw-bold">Upload Berkas</h5>
        <div class="card-body">
            @livewire('document-uploader')
        </div>
    </div>
@endsection
