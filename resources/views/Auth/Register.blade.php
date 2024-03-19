@extends('layouts.app')

@section('title', 'Kayıt Ol')

@section('content')
<div class="row" id="auth">
    <div class="col-12 col-md-6 offset-md-3 mt-4 mt-md-5 ">
        <form action="{{route('register.store')}}" method="POST">
            @csrf
            <h5>Yeni Hesap Oluştur</h5>
            <div class="input-container">
                <div class="input @error('name') is-invalid @enderror">
                    <input type="text" placeholder="Adınız" class="form-control" name="name" id="name" value="{{ old('name') }}" required minlength="3" maxlength="50">
                    <label for="name">Adınız</label>
                    <i class="fa-regular fa-user"></i>
                </div>
                @error('name')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="input-container">
                <div class="input @error('name') is-invalid @enderror">
                    <input type="text" placeholder="Soyadınız" class="form-control" name="surname" id="surname" value="{{ old('surname') }}" required minlength="2" maxlength="50">
                    <label for="surname">Soyadınız</label>
                    <i class="fa-solid fa-signature"></i>
                </div>
                @error('surname')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="input-container">
                <div class="input @error('email') is-invalid @enderror">
                    <input type="email" placeholder="E-posta adresiniz" class="form-control" name="email" id="email" value="{{ old('email') }}" required minlength="4" maxlength="80">
                    <label for="email">E-posta</label>
                    <i class="fa-solid fa-at"></i>
                </div>
                @error('email')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="input-container">
                <div class="input @error('password') is-invalid @enderror">
                    <input type="password" placeholder="Şifreniz" class="form-control" name="password" id="password" required minlength="6" maxlength="50">
                    <label for="password">Şifreniz</label>
                    <i class="fa-regular fa-eye"></i>
                </div>
                @error('password')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-info text-light">Kayıt ol</button>
            </div>
        </form>

        <div class="or-container">
            <div class="or mt-4">Zaten bir hesabım var?</div>
            <a href="/giris-yap">Giriş yap</a>
        </div>

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