<div>
    @foreach ($projects as $project)
        <div>
            <p class="text-black dark:text-sred  font-bold text-center"> {{ $project->title }} </p>
        </div>
    @endforeach
</div>
