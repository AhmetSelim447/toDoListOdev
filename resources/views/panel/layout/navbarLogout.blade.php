
<nav class="navbar px-lg-5  navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <div>
            <a class="navbar-brand" href="{{route("task.todoList")}}">todoList</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{\Illuminate\Support\Facades\Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route("home.logout")}}">Logout</a></li>
                            <li><a class="dropdown-item" href="{{route("task.todoList")}}">Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
