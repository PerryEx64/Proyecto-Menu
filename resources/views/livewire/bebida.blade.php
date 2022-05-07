<div class="mockup-window border border-base-300 ml-2">
    <div class="grid flex justify-center px-4 py-5 border-t border-base-300">
        <div class="badge badge-ghost text-xl px-4 py-4 italic">Bebidas</div>
        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Nombre de la Bebida</span>
                <span class="label-text-alt">Ej. Coca-Cola</span>
            </label>
            <input type="text" placeholder="Escribe Aqui" class="input input-bordered w-full max-w-xs">
        </div>

        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Elige tipo de Bebida</span>
                <span class="label-text-alt">Ej. Alcoholica</span>
            </label>
            <select class="select select-bordered">
                <option disabled selected>Elige</option>
                @foreach($tipoBebidas as $tipoBebida)
                    <option  value="{{$tipoBebida->id_tipo_bebida}}" >{{$tipoBebida->nombre_tipo_bebida}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-control h-full">
            <label class="label">
                <span class="label-text">Ingreso Precio</span>
            </label>
            <label class="input-group">
                <span>Precio</span>
                <input type="text" placeholder="10" class="input input-bordered">
                <span>Q.</span>
            </label>
        </div>

        <input type="submit" value="Guardar" class="btn btn-ghost mt-4">
    </div>
</div>
