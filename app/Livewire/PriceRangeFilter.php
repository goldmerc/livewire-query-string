<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class PriceRangeFilter extends Component
{
    #[Url(history: true)]
    public $minPrice;

    #[Url(history: true)]
    public $maxPrice;
}
