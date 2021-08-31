@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline">
          <p class="h3 text-center p-1">Your Todo</p>
          <a href="{{ route('todo.index') }}" class="btn btn-lg mb-3">
            <span class="fas fa-arrow-left"></span>
          </a>
          </div>
          <x-alert/>
          <form action="{{ route('todo.store') }}" method="post">
            @csrf
            <div class="form-group">
              <div class="text-center p-1">
                <div class="py-2">
                  <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="py-2">
                  <textarea class="form-control w-100" name="description" placeholder="Description"></textarea>
                </div>
                {{-- <div class="py-4">
                  @livewire('step')
                </div> --}}
                <div class="py-2">
                  <input type="submit" value="Create" class="btn btn-info ml-1">
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
