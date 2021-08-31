@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="card">
        <div class="card-body p-1">
          <div class="d-flex justify-content-between align-items-baseline">
            <p class="h3 text-center p-1 card-title">Update this todo</p>
            <a href="{{ route('todo.index') }}" class="btn btn-lg mb-3">
              <span class="fas fa-arrow-left"></span>
            </a>
          </div>
          <x-alert/>
          <form action="{{ route('todo.update',$todo->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <div class="text-center p-1">
                <div>
                  <input type="text" name="title" value="{{ $todo->title }}" class="form-control">
                </div>
                <div class="py-2">
                  <textarea class="form-control w-100" name="description" placeholder="Description">{{ $todo->description }}</textarea>
                </div>
                {{-- <div class="py-2">
                  @livewire('edit-step',['steps' => $todo->steps])
                </div> --}}
                <div>
                  <input type="submit" value="Update" class="btn btn-info ml-1">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
