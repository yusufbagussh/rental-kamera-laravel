<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">YUSASI Rental Kamera</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/#home">Home</a></li>
                </li>
                <li class="nav-item"><a class="nav-link active" href="/#about">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="/#profil">Profil</a></li>
                <li class="nav-item"><a class="nav-link active" href="/#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" href="/product">Products</a></li>
                <li class="nav-item"><a class="nav-link active" href="/category">Categories</a></li>
                <li class="nav-item">
                    <form action="/logout" method="post" style="outline: none;">
                        @csrf
                        <button class="nav-link active btn-danger rounded-3" style="text-decoration: none; outline: none;">logout</button>
                    </form>
                </li>
                <li class="nav-item"><a class="nav-link active" href="/category">{{ auth()->user() }}</a></li>
            </ul>
        </div>
    </div>
</nav>