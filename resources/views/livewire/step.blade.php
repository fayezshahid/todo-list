<div>
    <div class="d-flex justify-content-between align-items-baseline p-2">
        <h2 class="text-center">Add Steps</h2>
        <span wire:click="increment" class="fas fa-plus"></span>
    </div>

    @foreach($steps as $step)
    <div class="d-flex justify-content-between align-items-baseline" wire:key="{{$step}}">
        <input type="text" class="form-control w-100" name="step[]" placeholder="{{ 'Describe step '. ($step+1) }}">
        <span wire:click="remove({{$step}})" class="fas fa-times" style="color:red;padding-left:10px;cursor:pointer"></span>
    </div>
    @endforeach
</div>
