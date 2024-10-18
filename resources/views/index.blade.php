<div>
    <h1>The list of tasks....</h1>
</div>

<div>
    @if(count($tasks))
        @foreach ($tasks as $task)
            <p> {{ $task->title }}</p>
        @endforeach

    @else
        There are not tasks
    @endif
</div>

