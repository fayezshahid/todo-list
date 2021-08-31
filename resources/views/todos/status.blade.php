@if($todo->completed)
  <span onclick="event.preventDefault();document.getElementById('form-incomplete-{{$todo->id}}').submit()" class="fas fa-check px-2" style="color:green"></span>
  <form style="display:none" id="{{ 'form-incomplete-'.$todo->id }}" action="{{ route('todo.incomplete',$todo->id) }}" method="post">
    @csrf
    @method('delete')
  </form>
@else
  <span onclick="event.preventDefault();document.getElementById('form-complete-{{$todo->id}}').submit()" class="fas fa-check px-2" style="color:gray"></span>
  <form style="display:none" id="{{ 'form-complete-'.$todo->id }}" action="{{ route('todo.complete',$todo->id) }}" method="post">
    @csrf
    @method('put')
  </form>
@endif
@if($todo->completed)
  <p class="text-center h4"><del>{{ $todo->title }}</del></p>
@else
  <a href="{{ route('todo.show',$todo->id) }}" style="color:black" class="text-decoration-none text-center h4">{{ $todo->title }}</a>
@endif