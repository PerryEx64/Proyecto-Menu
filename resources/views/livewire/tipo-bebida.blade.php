<!-- The button to open modal -->
<label for="modal-tipo-bebida" class="btn btn-outline btn-info mx-2 my-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
    </svg>
    Agregar Tipo Bebida</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="modal-tipo-bebida" class="modal-toggle" />
<label for="modal-tipo-bebida" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <label for="modal-tipo-bebida" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <h3 class="text-lg font-bold">Registro Tipo Bebida</h3>
            <div class="form-control max-w-xs mt-4">
                <label class="label">
                    <span class="label-text">Nombre Tipo Bebida</span>
                    <span class="label-text-alt">Ej. Caliente</span>
                </label>
                <input wire:model="nombre_bebida" type="text" placeholder="Escribe Aqui" class="input input-bordered w-full max-w-xs">

                <input type="submit" value="Guardar" class="btn btn-ghost mt-4">
            </div>
    </label>
</label>




