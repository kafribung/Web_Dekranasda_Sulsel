<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('pages.registrasi');
    }
    // Donwload Document
    public function donwload()
    {
        return Storage::download('document/Dokument Registrasi Dekranasda.docx');
    }
}
