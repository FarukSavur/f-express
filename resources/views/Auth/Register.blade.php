@extends('layouts.app')

@section('title', 'Kayıt Ol')

@section('content')
<div class="row" id="auth">
    <div class="col-12 col-md-6 offset-md-3 mt-md-5">
        <form action="{{route('register.store')}}" method="POST">
            @csrf
            <h5>Yeni Hesap Oluştur</h5>
            <div class="input-container">
                <div class="input" class="@error('name') is-invalid @enderror">
                    <input type="text" class="form-control" placeholder="Adınız" name="name">
                    <i class="fa-regular fa-user"></i>
                </div>
            </div>
            <div class="input-container">
                <div class="input" class="@error('name') is-invalid @enderror">
                    <input type="text" class="form-control" placeholder="Soyadınız" name="surname">
                    <i class="fa-solid fa-signature"></i>
                </div>
            </div>
            <div class="input-container">
                <div class="input" class="@error('email') is-invalid @enderror">
                    <input type="text" class="form-control" placeholder="E-posta" name="email">
                    <i class="fa-solid fa-at"></i>
                </div>
            </div>
            <div class="input-container">
                <div class="input" class="@error('password') is-invalid @enderror">
                    <input type="text" class="form-control" placeholder="Şifreniz" name="password">
                    <i class="fa-regular fa-eye"></i>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-info text-light">Kayıt ol</button>
            </div>
        </form>
        <div class="swiper mySwiper6">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
        </div>
    </div>
</div>

@endsection