<div class="space-y-6">
    
    <div>
        <x-input-label for="id_parada" :value="__('Id Parada')"/>
        <x-text-input id="id_parada" name="id_parada" type="text" class="mt-1 block w-full" :value="old('id_parada', $parada?->id_parada)" autocomplete="id_parada" placeholder="Id Parada"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_parada')"/>
    </div>
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $parada?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre')"/>
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion')"/>
        <x-text-input id="descripcion" name="descripcion" type="text" class="mt-1 block w-full" :value="old('descripcion', $parada?->descripcion)" autocomplete="descripcion" placeholder="Descripcion"/>
        <x-input-error class="mt-2" :messages="$errors->get('descripcion')"/>
    </div>
    <div>
        <x-input-label for="activo" :value="__('Activo')"/>
        <x-text-input id="activo" name="activo" type="text" class="mt-1 block w-full" :value="old('activo', $parada?->activo)" autocomplete="activo" placeholder="Activo"/>
        <x-input-error class="mt-2" :messages="$errors->get('activo')"/>
    </div>
    <div>
        <x-input-label for="ruta_id_ruta" :value="__('Ruta Id Ruta')"/>
        <x-text-input id="ruta_id_ruta" name="ruta_id_ruta" type="text" class="mt-1 block w-full" :value="old('ruta_id_ruta', $parada?->ruta_id_ruta)" autocomplete="ruta_id_ruta" placeholder="Ruta Id Ruta"/>
        <x-input-error class="mt-2" :messages="$errors->get('ruta_id_ruta')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>