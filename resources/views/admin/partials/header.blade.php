<header>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('admin.home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" target='_blank' href="{{ route('home') }}">Vai al sito</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">li
                <li>
                    {{ Auth::user()->name }}
                </li>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Logout</a>
        </li>
    </ul>
</header>
