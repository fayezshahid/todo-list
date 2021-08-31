@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="card">
        <div class="card body p-1">
          <div class="d-flex justify-content-between align-items-baseline"> 
          <p class="h3 text-center p-1 card-title font-weight-bold">{{ $todo->title }}</p>
          <a href="{{ route('todo.index') }}" class="btn btn-lg mb-3">
            <span class="fas fa-arrow-left"></span>
          </a>
          </div>
          <div class="text-center">
            <h4 class="text-decoration-underline"><u>Description</u> :</h4>
            <p class="h5">{{ $todo->description }}</p>
          </div>
          @if($todo->steps->count() > 0)
            <div class="text-center">
              <h4 class=""><u>Steps for this task</u> :</h4>
              @foreach($todo->steps as $step)
                <p class="h5">{{ $step->name }}</p>
              @endforeach
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
