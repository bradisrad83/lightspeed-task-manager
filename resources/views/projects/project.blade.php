<x-layout>
    <div class="w-full md:w-3/4 px-4 py-2 md:py-10 md:px-8">
        <div class="w-full flex justify-between items-end mb-2">
            <h2 class="text-gray-600 font-bold text-2xl">{{ $project->title }}</h2>
            <p class="text-gray-600 font-bold text-xl ml-auto">{{$project->totalHours}} Hours<p>
        </div>
        <div class="grid grid-cols-4 md:grid-cols-5">   
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Task</div>
            <div class="md:col-span-2 font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Member</div>
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Hours</div>
            <div class="font-bold text-gray-600 border-y-2 border-x-2 border-slate-400 py-2 px-4">Actions</div>
            @foreach($project->tasks as $task)
                <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400">{{ $task->title }}</div>
                <div class="py-2 px-4 text-gray-700 md:col-span-2 border-y-2 border-l-2 border-slate-400"><a href="{{ route('users.show', ['user' => $task->user] )}}" class="cursor-pointer hover:underline hover:text-blue-800">{{ $task->user->name }}</a></div>
                <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400">{{ $task->estimated_hours }}</div>
                <div class="py-2 px-4 text-gray-700 border-y-2 border-x-2 border-slate-400"><a href="{{ route('tasks.show', ['task' => $task])}}"><span class="bg-gray-800 hover:bg-gray-600 px-2 rounded text-white cursor-pointer">View</span></a></div>
            @endforeach
        <div>
        <div class="my-4">
            <a href="{{ route('home') }}"><span class="mx-1 bg-gray-800 hover:bg-gray-600 px-2 py-1 rounded text-white cursor-pointer">Home</span></a>
        </div>
    </div>
</x-layout>