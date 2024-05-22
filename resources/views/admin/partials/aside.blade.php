<aside class="text-white">
    <div class="dashboard">
        <h5 class="my_db">
            <span>My</span> Dashboard
        </h5>
    </div>

    <div>
        <ul>
            <li>
                <a class="text-white" href="{{ route('admin.home') }}">
                    <i class="fa-solid fa-house"></i>
                    Home
                </a>
            </li>

            <li>
                <a class="text-white" href="#">
                    <i class="fa-solid fa-diagram-project"></i>
                    Categories
                </a>
            </li>

            <li>
                <a class="text-white" href="{{ route('admin.technologies.index') }}">
                    <i class="fa-solid fa-keyboard"></i>
                    Technologies
                </a>
            </li>

            <li>
                <a class="text-white" href="{{ route('admin.types.index') }}">
                    <i class="fa-solid fa-keyboard"></i>
                    Types
                </a>
            </li>
        </ul>
    </div>

</aside>
