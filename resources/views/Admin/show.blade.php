@extends('layouts.app')

@section('title', 'Kargo Gönderi Detayları')

@section('content')
    <div class="container">
        <div class="row" id="cargo">
            <h2 class="col-12 mt-4">Kargo Gönderi Detayları</h2>
            <div class="row mt-2 mx-0 px-0 ">
                <div class="col-12">
                    @if (session('updated'))
                        <div class="alert alert-success text-center ">
                            {{ session('updated') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12 my-2 cargo-container">
                <div class="cargo-item">
                    <div class="header">
                        <h6>{{ $cargo->user_name . ' ' . $cargo->user_surname }}</h6>
                        <div class="btn-group dropstart">
                            <button type="button" class="btn btn-sm btn-info text-light dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="/kargo-gonderileri">
                                        Geri dön
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content">
                        <div class="item">
                            <h6>Ürün adı</h6>
                            <span> {{ $cargo->product_name }} </span>
                        </div>
                        <div class="item">
                            <h6>Ürün içeriği</h6>
                            <span>{{ $cargo->product_content }} </span>
                        </div>
                        <div class="item">
                            <h6>Ürün açıklaması</h6>
                            <span>{{ $cargo->product_description }}</span>
                        </div>
                        <div class="item">
                            <h6>Ürün ağırlığı</h6>
                            <span> {{ $cargo->product_kilogram }} kilogram </span>
                        </div>
                    </div>
                    <div class="footer">
                        {{ $cargo->created_at->format('d/m/Y H:i') }}
                    </div>
                </div>
            </div>
            <div class="col-12 text-end mt-2">
                <form action="{{ route('cargo.destroy', $cargo->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Kargoyu sil</button>
                    <a href="/kargo-gonderileri/{{ $cargo->id }}/duzenle"
                        class="btn btn-warning btn-sm text-light">Kargoyu düzenle</a>
                    <a href="/kargo-gonderileri" class="btn btn-info btn-sm text-light">Geri dön</a>
                </form>
            </div>
        </div>
    </div>
@endsection
