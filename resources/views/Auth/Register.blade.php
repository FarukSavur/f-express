@extends('layouts.app')

@section('title', 'Kayıt Ol')

@section('content')
<div class="row" id="auth">
    <div class="col-12 col-md-4 offset-md-4 mt-4 mt-md-5 ">
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
                    <input type="password" placeholder="Şifreniz" class="form-control" name="password" id="password" value="{{ old('password') }}" required minlength="6" maxlength="50">
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
            <div class="or mt-4">Zaten bir hesabım var</div>
            <a href="/giris-yap">Giriş yap</a>
        </div>

        <div class="swiper mySwiper6">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="shape">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <h5>Hızlı Teslimat</h5>
                    <p>
                        Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.
                    </p>
                </div>
                <div class="swiper-slide">
                    <div class="shape">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h5>Güvenlik</h5>
                    <p>
                        Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.
                    </p>
                </div>
                <div class="swiper-slide">
                    <div class="shape">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h5>Kesintisiz Hizmet</h5>
                    <p>
                        Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.
                    </p>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

@endsection