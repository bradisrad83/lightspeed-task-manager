<x-layout>
    <div class="w-full md:w-3/4 px-4 py-2 md:py-10 md:px-8">
        <div class="flex flex-wrap mb-4">
            <div class="mx-4 cursor-pointer"><a href="{{ route('projects.index') }}"><span class="text-gray-500 hover:text-gray-700 text-2xl">Projects</span></a></div>
            <div class="mx-4 cursor-pointer"><span class="text-gray-700 font-bold text-2xl">Tasks</span></div>
            <div class="mx-4 cursor-pointer"><a href="{{ route('users.index') }}"><span class="text-gray-500 hover:text-gray-700 text-2xl">Members</span></a></div>
        </div>
        <div class="ml-4 grid grid-cols-5">   
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Task</div>
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Project</div>
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Member</div>
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Hours</div>
            <div class="font-bold text-gray-600 border-y-2 border-x-2 border-slate-400 py-2 px-4">Actions</div>
            @foreach($tasks as $task)
                <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400">{{ $task->title }}</div>
                <div class="font-bold text-gray-700 border-y-2 border-l-2 border-slate-400 py-2 px-4">{{$task->project->title}}</div>
                <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400"><a href="{{ route('users.show', ['user' => $task->user] )}}" class="cursor-pointer hover:underline hover:text-blue-800">{{ $task->user->first_name }}</a></div>
                <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400">{{ $task->estimated_hours }}</div>
                <div class="py-2 px-4 text-gray-700 border-y-2 border-x-2 border-slate-400"><a href="{{ route('tasks.show', [ 'task' => $task ])}}"><span class="bg-gray-800 hover:bg-gray-600 px-2 rounded text-white cursor-pointer">View</span></a></div>
            @endforeach
        <div>
    </div>
</x-layout>