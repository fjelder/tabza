<nav id="sidebar" class="active">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
    <div class="p-4 pt-5">
        <h1><a href="index.html" class="logo">{{ config('app.name') }}</a></h1>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Stacje kolejowe</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="{{ route('stations.index')}}">Lista stacji</a>
                    </li>
                    <li>
                        <a href="{{ route('stations.create')}}">Dodaj nową</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('iz.index')}}">Zaklady linii kolejowych</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Linie kolejowe</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="{{ route('lk.index') }}">Lista linii</a>
                    </li>
                    <li>
                        <a href="{{ route('lk.create') }}">Dodaj nową</a>
                    </li>
                </ul>
            </li>
        </ul>


        <div class="footer">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>

    </div>
</nav>