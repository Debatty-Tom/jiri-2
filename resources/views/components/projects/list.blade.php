@props(['projects'])

<ol>
    @foreach($projects as $project)
        <li>
            <a class="underline text-blue-500 flex items-center gap-2"
               href="/projects/{{ $project->id }}" >{{ $project->name }}</a>
        </li>
    @endforeach
</ol>
