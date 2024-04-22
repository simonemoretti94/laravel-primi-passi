<!-- Nav tabs -->
<ul
    class="nav nav-tabs"
    id="navId"
    role="tablist"
>
    <li class="nav-item">
        <a
            href="/about"
            class="nav-link active"
            data-bs-toggle="tab"
            aria-current="page"
            >This page</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{route('home')}}" class="nav-link"
            >Home</a
        >
    </li>
    <li class="nav-item dropdown">
        <a
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
            href="/about"
            role="button"
            aria-haspopup="true"
            aria-expanded="false"
            >Empy</a
        >
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Null</a>
            <a class="dropdown-item" href="#">Nul</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Null</a>
        </div>
    </li>
</ul>

<script>
    var triggerEl = document.querySelector("#navId a");
    bootstrap.Tab.getInstance(triggerEl).show();
</script>