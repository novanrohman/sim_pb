<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form class="form-group" wire:model='query' wire:keyup.debounce='selectedCategory'>
        <label for="">Jurusan</label>
        <label for="Select" class="form-label">Kelas</label>

        <select wire:model='categoryId' wire:change='selectedCategory' id="Select" class="form-select" name="selectedCategory">
            <option value="">Select a class</option>
            @foreach ($kelas as $kelasItem)
                <option  value="{{ $kelasItem->id }}">{{ $kelasItem->id . $kelasItem->kelas }}</option>
            @endforeach
        </select>
        {{-- <input type="text" name="" id="" value="{{ $selected }}"> --}}
    </form>
</div>
