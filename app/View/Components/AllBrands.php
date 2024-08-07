<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Master;
class AllBrands extends Component
{
    public $brands,$cartype;
    public function __construct($cartype)
    {
        $this->cartype = $cartype;
        $this->brands = Master::where('type', 'Brand')->get();
    }
    public function render(): View|Closure|string
    {
        return view('components.all-brands');
    }
}
