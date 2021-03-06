<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Penggajian</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                       <ul class="nav nav-tabs">
                      
                        <!-- Authentication Links -->
                        <hr>
                        @if (Auth::guest())
                            <li role="presentation" class="active"><a href="{{ url('/login') }}">Login</a></li>
                        @else
                        <li role="presentation" class="@yield('golongan')" ><a href="{{ url('/golongan') }}">Golongan</a></li>
                        <li role="presentation" class="@yield('jabatan')"><a href="{{ url('/jabatan') }}">Jabatan</a></li>
                        <li role="presentation" class="@yield('pegawai')"><a href="{{ url('/pegawai') }}">Pegawai</a></li>
                        <li role="presentation" class="@yield('kategori')"><a href="{{ url('/kategori_lembur') }}">Kategori Lembur</a></li>
                        <li role="presentation" class="@yield('lemburp')"><a href="{{ url('/lembur_pegawai') }}">Lembur Pegawai</a></li>
                        <li role="presentation" class="@yield('tunjangan')"><a href="{{ url('/tunjangan') }}">Tunjangan</a></li>
                        <li role="presentation" class="@yield('tunjanganp')"><a href="{{ url('/tunjangan_pegawai') }}">Tunjangan Pegawai</a></li>
                        <li role="presentation" class="@yield('penggajian')"><a href="{{ url('/penggajian') }}">Penggajian</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
