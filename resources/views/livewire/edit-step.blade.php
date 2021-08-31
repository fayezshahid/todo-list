<div>
    <div class="d-flex justify-content-between align-items-baseline p-2">
        <h2 class="text-center">Update Steps</h2>
        <span wire:click="increment" class="fas fa-plus" style="cursor:pointer"></span>
    </div>

    @foreach($steps as $step)
    <div class="d-flex justify-content-between align-items-baseline" wire:key="{{$loop->index}}">
        @if (empty($stepId))
            <input type="text" name="stepName[]" value="{{$step['name']}}" class="form-control w-100" placeholder="{{ 'Describe step '.($loop->index+1) }}">
            <input type="hidden" name="stepId[]" value="{{$step['id']}}">
            <span wire:click="remove({{$loop->index}})" class="fas fa-times" style="color:red;padding-left:10px;cursor:pointer"></span>
        @endif
        {{-- <input type="text" name="stepName[]" value="{{$step['name']}}" class="form-control w-100" placeholder="{{ 'Describe step '.($loop->index+1) }}">
        <input type="hidden" name="stepId[]" value="{{$step['id']}}"> --}}
    </div>
    @endforeach
</div>
