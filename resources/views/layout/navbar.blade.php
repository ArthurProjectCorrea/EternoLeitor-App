<nav class="border border-blue-500 bg-gray-100 dark:bg-gray-900 p-4 flex  items-center w-full">
    <div class=" border border-blue-500 w-1/5 flex justify-center items-center">
        @include('layout.logo')
    </div>
    <div class="w-3/5">
        <ul class="border border-blue-500 flex gap-4 uppercase font-bold">
            <li>
                <a href="{{route('home.index')}}">news</a>
            </li>
            <li>
                <a href="">library</a>
            </li>
        </ul>
    </div>
    <div class="border border-blue-500 w-1/5 gap-4 flex">
        <div>
            <i class="fa-solid fa-bell"></i>
        </div>
        <div>user</div>
    </div>
</nav>
