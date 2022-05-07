<?php

namespace App\Http\Livewire;

use App\Models\ModelBebida;
use App\Models\ModelMenu;
use App\Models\ModelTipoPlatillo;
use Livewire\Component;

class Platillo extends Component
{
    public $nombre_platillo = "asdfasdf";
    public $tipo_platillo;
    public $guarniciones;
    public $precio_platillo;

    public function render()
    {
        $tipoPlatillos =ModelTipoPlatillo::all();

        return view('livewire.platillo', compact('tipoPlatillos'));
    }

    public function store()
    {
        $this->validate(['nombre_platillo' => 'required']);
        $this->validate(['guarnicion_platillo' => 'required']);
        $this->validate(['precio_platillo' => 'required']);
        $this->validate(['tipo_platillo_id_tipo_platillo' => 'required']);

        $platillo =ModelMenu::create([
            'nombre_platillo' => $this->nombre_platillo,
            'guarnicion_platillo' => $this->guarniciones,
            'precio_platillo' => $this->precio_platillo,
            'tipo_platillo_id_tipo_platillo' => $this->tipo_platillo,
        ]);
    }
}
