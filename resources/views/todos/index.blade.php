@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="card">
        <div class="card-body p-2">
          <div class="text-center d-flex justify-content-between align-items-baseline">
            <p class="h3 p-1 font-weight-bold card-title">All Your Todos</p>
            <a href="{{ route('todo.create') }}" class="btn btn-info my-2 px-3">
              <span class="fas fa-plus-circle"></span>
            </a>
          </div>
              <ul class="list-group">
              <x-alert />
                @forelse($todos as $todo)
                    <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-baseline">
                      @include('todos.status')
                      <div>
                        <a href="{{ route('todo.edit',$todo->id) }}" class="btn btn-warning">
                          <span class="fas fa-edit"></span>
                        </a>
                        <a class="btn btn-danger">
                          <span class="fas fa-trash" onclick="event.preventDefault();if(confirm('Do you really want to delete it!')){document.getElementById('form-delete-{{$todo->id}}').submit()}"></span>
                          <form style="display:none" id="{{ 'form-delete-'.$todo->id }}" action="{{ route('todo.destroy',$todo->id) }}" method="post">
                            @csrf
                            @method('delete')
                          </form>
                        </a>
                      </div>
                    </div>
                    </li>
                @empty
                  <p>No task availabe, create one</p>
                @endforelse
              </ul>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection
