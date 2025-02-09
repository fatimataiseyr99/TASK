
@extends("layout.app")
@section("content")
<h1 class="text-xl"> the list of task</h1>
<div>
  <a href="{{ route('tasks.create') }}">Add Task!</a>
</div>
  @forelse ($tasks as $task)
  <div>
    <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
      @class(['line-through' => $task->completed])>{{ $task->name }}</a>
    </div>
@empty
  <div>There are no tasks!</div>
@endforelse

@if ($tasks->count())
  <nav class="mt-4">
    {{ $tasks->links() }}
  </nav>
@endif
@endsection