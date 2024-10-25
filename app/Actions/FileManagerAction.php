<?php

namespace App\Actions;

use AllowDynamicProperties;
use Illuminate\Support\Facades\Storage;

#[AllowDynamicProperties] class FileManagerAction
{
    public function __construct($folder)
    {
        $this->folder = $folder;
    }

    public function directories(): array
    {
        return Storage::disk('public')->directories($this->folder);
    }

    public function files(): array
    {
        return Storage::disk('public')->files($this->folder);
    }

    public function back(): string
    {
        $back = explode('/', $this->folder);
        array_pop($back);
        return implode('/', $back);
    }
}
