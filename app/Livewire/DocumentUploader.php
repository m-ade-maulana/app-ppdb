<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DocumentUpload;
use Illuminate\Support\Facades\Auth;

class DocumentUploader extends Component
{

    use WithFileUploads;

    public $fileInputs = [];
    public $documents = [];

    public $types = [
        'ktp' => 'Kartu Tanda Penduduk',
        'kk' => 'Kartu Keluarga',
        'akte_lahir' => 'Akte Kelahiran',
        'ktp_orang_tua' => 'KTP Orang Tua',
        'skl' => 'Surat Keterangan Lulus',
        'raport' => 'Raport SMP',
        'kartu_pkh_kps' => 'Kartu PKH/KPS'
    ];

    public function mount()
    {
        $uploads = DocumentUpload::where('user_id', Auth::id())->get();
        foreach ($uploads as $upload) {
            $this->documents[$upload->type] = $upload->file_path;
        }
    }

    public function upload($type)
    {
        $this->validate([
            "fileInputs.$type" => 'required|mimes:pdf|max:5000'
        ]);

        logger($type);
        logger($this->fileInputs);

        $file = $this->fileInputs[$type];
        $path = $file->store("uploads/$type", 'public');

        DocumentUpload::updateOrCreate(
            ['user_id' => Auth::id(), 'type' => $type],
            ['file_path' => $path]
        );

        $this->documents[$type] = $path;
        $this->fileInputs[$type] = null;

        session()->flash('success', "$this->types[$type] berhasil diupload.");
    }

    public function render()
    {
        return view('livewire.document-uploader');
    }
}
