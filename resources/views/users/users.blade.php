<x-layout>
    <div class="w-full md:w-3/4 px-4 py-2 md:py-10 md:px-8">
        <div class="flex flex-wrap mb-4">
            <div class="mx-4 cursor-pointer"><a href="{{ route('projects.index') }}"><span class="text-gray-500 hover:text-gray-700 text-2xl">Projects</span></a></div>
            <div class="mx-4 cursor-pointer"><a href="{{ route('tasks.index') }}"><span class="text-gray-500 hover:text-gray-700 text-2xl">Tasks</span></a></div>
            <div class="mx-4 cursor-pointer"><span class="text-gray-700 font-bold text-2xl">Members</span></div>
        </div>
        <div class="ml-4 grid grid-cols-4">   
            <div class="font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Member</div>
            <div class="col-span-2 font-bold text-gray-600 border-y-2 border-l-2 border-slate-400 py-2 px-4">Projects</div>
            <div class="font-bold text-gray-600 border-y-2 border-x-2 border-slate-400 py-2 px-4">Actions</div>
            @foreach($users as $user)
                <div class="py-2 px-4 text-gray-700 border-y-2 border-l-2 border-slate-400">{{ $user->name }}</div>
                <div class="py-2 px-4 text-gray-700 col-span-2 border-y-2 border-l-2 border-slate-400">{{ $user->projectTitles }}</div>
                <div class="py-2 px-4 text-gray-700 border-y-2 border-x-2 border-slate-400"><a href="{{ route('users.show', [ 'user' => $user ])}}"><span class="bg-gray-800 hover:bg-gray-600 px-2 rounded text-white cursor-pointer">View</span></a></div>
            @endforeach
        <div>
    </div>
</x-layout>