<x-layout>
    <div class="w-full md:w-3/4 px-4 py-2 md:py-10 md:px-8">
        <h2 class="text-gray-600 font-bold text-2xl mb-2">{{$task->title }} </h2>
        <div class="grid grid-cols-4">   
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Member</div>
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Hours</div>
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Project</div>
            <div class="font-bold text-gray-600 border-y-2 border-x-2 border-slate-400 py-2 px-4">Actions</div>
            <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400">{{ $task->user->name }}</div>
            <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400">{{ $task->estimated_hours }}</div>
            <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400">{{ $task->project->title}}</div>
            <div class="py-2 px-4 text-gray-700 border-y-2 border-x-2 border-slate-400"><a href="{{ route('users.show', [ 'user' => $task->user ])}}"><span class="bg-gray-800 hover:bg-gray-600 px-2 rounded text-white cursor-pointer">View</span></a></div>
        <div>
        <div class="my-4">
            <a href="{{ URL::previous() }}"><span class="bg-gray-800 hover:bg-gray-600 px-2 py-1 rounded text-white cursor-pointer">Back</span></a>
        </div>            
    </div>
</x-layout>