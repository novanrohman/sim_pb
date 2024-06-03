<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form class="form-group" wire:submit.defer='filter'>
        <label for="">Jurusan</label>
        <label for="Select"  class="form-label" >Kelas</label>

        <select  wire:model="selected" id="Select" class="form-select mb-3" name="selectedCategory">
            <option>Select a class</option>
            @foreach ($kelas as $kelasItem)
                <option wire:key="{{ $kelasItem->id }}" value="{{ $kelasItem->id }}">{{ $kelasItem->id . $kelasItem->kelas }}</option>
            @endforeach
        </select>
        {{-- <input type="text" name="" id="" value="{{ $selected }}"> --}}
        <button type="submit"  class="btn btn-primary w-100">Pilih</button>
    </form>
</div>
