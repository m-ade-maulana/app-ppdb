<!-- resources/views/livewire/document-uploader.blade.php -->
<div>
    @foreach ($types as $key => $label)
        <div class="row mb-3 align-items-end">
            <div class="col-sm-10">
                <label class="form-label">{{ $label }}</label>

                @if (isset($documents[$key]))
                    <div class="text-success">
                        Sudah upload: {{ basename($documents[$key]) }}<br>
                        <a href="{{ asset('storage/' . $documents[$key]) }}" target="_blank"
                            class="btn btn-outline-secondary btn-sm mt-1">
                            Lihat
                        </a>
                    </div>
                @else
                    <input type="file" wire:model='fileInputs.{{ $key }}' class="form-control">
                    <div wire:loading wire:target="fileInputs.{{ $key }}">
                        <small class="text-muted">Mengunggah...</small>
                    </div>

                    @error("fileInputs.$key")
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                @endif
            </div>
            <div class="col-sm-2">
                @if (isset($documents[$key]))
                    <button class="btn btn-success w-100" disabled>
                        <i class="bi bi-check-circle"></i> Selesai
                    </button>
                @else
                    <button wire:click.prevent="upload('{{ $key }}')" class="btn btn-primary w-100"
                        @if (empty($fileInputs[$key])) disabled @endif>
                        Upload
                    </button>
                @endif
            </div>
        </div>
    @endforeach

    @if (session()->has('message'))
        <div class="alert alert-success mt-2">
            {{ session('message') }}
        </div>
    @endif
</div>
