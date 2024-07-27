<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public function render(): View
    {
        $tags = \App\Models\Tag::all();

        return view('components.app-layout', compact('tags'));
    }
}
