<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Fast Express</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @section('sidebar')
            <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm ">
                <div class="container">
                    <a class="navbar-brand" href="/kargo-gonderileri">Fast Express</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/kargo-gonderileri">Anasayfa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kargo-gonderileri">Kargo Gönderileri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kargo-gonderileri/yeni-kargo">Kargo Gönderisi Oluştur</a>
                            </li>
                        </ul>
                        @if(Auth::user())
                        <div class="d-flex">
                            {{Auth::user()->name}}, <a href="/cikis-yap" class="text-danger text-decoration-none ms-1">çıkış yap!</a>
                        </div>
                        @else
                        <div class="d-flex gap-2">
                            <a href="/kayit-ol" class="btn btn-sm btn-outline-primary" type="submit">Kayıt Ol</a>
                            <a href="/giris-yap" class="btn btn-sm btn-outline-info" type="submit">Giriş yap</a>
                        </div>
                        @endif
                    </div>
                </div>
            </nav>
            @show
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper-config.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>