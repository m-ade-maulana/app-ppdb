@extends('layouts.main')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @elseif(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mb-4">
        <h5 class="card-header">Formulir Siswa</h5>
        <div class="card-body">
            <form action="{{ route('save_siswa') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama-siswa" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" id="nama-siswa"
                        placeholder="contoh: Alif" />
                </div>
                <div class="form-group mb-3">
                    <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat-lahir"
                        placeholder="contoh: Tangerang" />
                </div>
                <div class="form-group mb-3">
                    <label for="tanggal-lahir" class="form-label">Tanggal lahir</label>
                    <input type="text" class="form-control" name="tanggal_lahir" id="tanggal-lahir"
                        placeholder="dd/mm/yyyy" />
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="disabilitas" class="form-label">Disabilitas</label>
                            <select class="form-control" name="disabilitas" id="disabilitas">
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="num" class="form-control" name="nik" id="nik" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="status-tinggal" class="form-label">Status Tinggal</label>
                            <select class="form-control" name="status_tinggal" id="status-tinggal">
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Sendiri">Sendiri</option>
                                <option value="Menumpang">Menumpang</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="5"
                        placeholder="contoh: JL. Nusantara 1 No. 12 RT 002 RW 004 Kel. Nusa Jaya Kec. Karawaci Kota Tangerang"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-md btn-primary w-100">Simpan</button>
                </div>
            </form>

        </div>

    </div>
@endsection
