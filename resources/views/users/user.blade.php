<x-layout>
    <div class="w-full md:w-3/4 px-4 py-2 md:py-10 md:px-8">
        <h2 class="text-gray-600 font-bold text-2xl mb-2">{{$user->name}}'s Projects</h2>
        <div class="grid grid-cols-4">   
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Project</div>
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Members</div>
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Estimated Hours</div>
            <div class="font-bold text-gray-600 border-y-2 border-x-2 border-slate-400 py-2 px-4">Actions</div>
             @foreach($user->projects as $project) 
                <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400">{{ $project->title}}</div>
                <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400">{{ $project->members }}</div>
                <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400">{{ $project->totalHours }}</div>
                <div class="py-2 px-4 text-gray-700 border-y-2 border-x-2 border-slate-400"><a href="{{ route('projects.show', [ 'slug' => $project->slug ])}}"><span class="bg-gray-800 hover:bg-gray-600 px-2 rounded text-white cursor-pointer">View</span></a></div>
            @endforeach
        <div>
        <div class="my-4">
            <a href="{{ route('home') }}"><span class="bg-gray-800 hover:bg-gray-600 px-2 py-1 rounded text-white cursor-pointer">Home</span></a>
        </div>            
    </div>
</x-layout>