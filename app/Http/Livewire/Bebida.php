<?php

namespace App\Http\Livewire;

use App\Models\ModelBebida;
use Livewire\Component;

class Bebida extends Component
{
    public $nombre_bebida;
    public $tipo_bebida;
    public $precio_bebida;

    public function render()
    {
        $tipoBebidas = ModelBebida::all();

        return view('livewire.bebida', compact('tipoBebidas'));
    }

    public function store()
    {
        $this->validate(['nombre_bebida' => 'required']);
        $this->validate(['tipo_bebida_id_tipo_bebida' => 'required']);
        $this->validate(['precio_bebida' => 'required']);

        $bebida =ModelBebida::create([
            'nombre_bebida' => $this->nombre_bebida,
            'tipo_bebida_id_tipo_bebida' => $this->tipo_bebida,
            'precio_bebida' => $this->precio_bebida,
        ]);
    }
}
