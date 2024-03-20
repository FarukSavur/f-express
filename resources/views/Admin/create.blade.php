@extends('layouts.app')

@section('title', 'Kargo Gönderisi Oluştur')

@section('content')
    <div class="container">
        <div class="row" id="cargo">
            <h2 class="col-12 mt-4 text-center">Kargo Gönderisi Oluştur</h2>
            <div class="col-12 col-md-6 offset-md-3 mt-4 mt-md-5 ">
                <form action="{{ route('cargo.store') }}" method="POST">
                    @csrf
                    <div class="input-container">
                        <div class="input @error('user_name') is-invalid @enderror">
                            <input type="text" placeholder="Adınız" class="form-control" name="user_name" id="name"
                                value="{{ old('user_name') }}" required minlength="3" maxlength="50">
                            <label for="name">Adınız</label>
                            <i class="fa-regular fa-user"></i>
                        </div>
                        @error('user_name')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-container">
                        <div class="input @error('user_surname') is-invalid @enderror">
                            <input type="text" placeholder="Soyadınız" class="form-control" name="user_surname"
                                id="user_surname" value="{{ old('user_surname') }}" required minlength="2" maxlength="50">
                            <label for="user_surname">Soyadınız</label>
                            <i class="fa-solid fa-signature"></i>
                        </div>
                        @error('user_surname')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-container">
                        <div class="input @error('product_name') is-invalid @enderror">
                            <input type="text" placeholder="Ürün adı" class="form-control" name="product_name"
                                id="product_name" value="{{ old('product_name') }}" required minlength="2" maxlength="50">
                            <label for="product_name">Ürün adı</label>
                            <i class="fa-solid fa-list-ol"></i>
                        </div>
                        @error('product_name')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-container">
                        <div class="input @error('product_content') is-invalid @enderror">
                            <input type="text" placeholder="Ürün içeriği" class="form-control" name="product_content"
                                id="product_content" value="{{ old('product_content') }}" required minlength="2"
                                maxlength="50">
                            <label for="product_content">Ürün içeriği</label>
                            <i class="fa-solid fa-align-left"></i>
                        </div>
                        @error('product_content')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-container">
                        <div class="input @error('product_kilogram') is-invalid @enderror">
                            <input type="number" placeholder="Ürün ağırlığı" class="form-control" name="product_kilogram"
                                id="product_kilogram" value="{{ old('product_kilogram') }}" required min="1"
                                max="1000" step="0.1">
                            <label for="product_kilogram">Ürün ağırlığı</label>
                            <i class="fa-solid fa-arrow-up-9-1"></i>
                        </div>
                        @error('product_kilogram')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-container">
                        <div class="input @error('product_description') is-invalid @enderror">
                            <textarea placeholder="Ürün açıklaması" class="form-control" name="product_description" id="product_description"
                                value="{{ old('product_description') }}" required minlength="2" maxlength="1000"></textarea>
                            <label for="product_description">Ürün açıklaması</label>
                            <i class="fa-solid fa-list-check"></i>
                        </div>
                        @error('product_description')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-info text-light">Oluştur</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
