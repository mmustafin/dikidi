<?php

namespace App\Http\Controllers;

use App\Actions\FileManagerAction;
use Illuminate\Support\Facades\Storage;

class FileManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($folder)
    {
        $action = new FileManagerAction($folder);
        $directories = $action->directories();
        $files = $action->files();
        $back = $action->back();
        return view('file-manager', compact('directories', 'files', 'back'));
    }

    public function show($file): string
    {
        return Storage::disk('public')->url($file);
    }


}
