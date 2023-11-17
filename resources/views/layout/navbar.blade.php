<nav class=" border border-blue-500 bg-red-500 p-2 flex justify-between items-center">
    <div class=" border border-blue-500">
        @include('layout.logo')
    </div>
    <div>
        <ul class=" border border-blue-500 flex gap-2 uppercase font-bold">
            <li>
                <a href="{{route('home.index')}}">Home</a>
            </li>
            <li>
                <div>pesquisa</div>
            </li>
        </ul>
    </div>
    {{-- <x-form.seach></x-form.seach> --}}
    <div>
        <div>notfic</div>
        <div>user</div>
    </div>
</nav>
