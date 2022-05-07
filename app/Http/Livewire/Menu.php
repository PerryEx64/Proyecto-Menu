<?php

namespace App\Http\Livewire;

use App\Models\ModelTipoPlatillo;
use Livewire\Component;

class Menu extends Component
{
    public $nombre_tipo_platillo ="que es eso";


    public function render()
    {
        return view('livewire.menu');
    }

    public function guardarTipoPlatillo()
    {
        $this->validate(['nombre_tipo_platillo' => 'required']);
        //dd($this->toogle);

        ModelTipoPlatillo::create([
            'id_tipo_platillo' => "",
            'nombre_tipo_platillo' => $this->nombre_tipo_platillo,
        ]);
    }
}
