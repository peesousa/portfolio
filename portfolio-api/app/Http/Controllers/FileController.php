<?php

namespace App\Http\Controllers;

class FileController extends Controller
{
    public function download()
    {
        $path = public_path('files/CV - Pedro Sousa.pdf');
        return response()->download($path);
    }
}
