@extends('layouts.app')

@section('title', 'Kargo Gönderileri')

@section('content')
    <div class="container">
        <div class="row" id="cargo">
            <h2 class="col-12 mt-4">Kargo Gönderileri</h2>
            <div class="row mt-2 mx-0 px-0 ">
                <div class="col-12">
                    @if (session('message'))
                        <div class="alert alert-danger text-center ">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
            @foreach ($cargos as $cargo)
                <div class="col-12 col-md-6 my-2 cargo-container">
                    <div class="cargo-item">
                        <div class="header">
                            <h6>{{ $cargo->user_name . ' ' . $cargo->user_surname }}</h6>
                            <div class="btn-group dropstart">
                                <button type="button" class="btn btn-sm btn-info text-light dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/kargo-gonderileri/{{ $cargo->id }}">Kargoyu
                                            Görüntüle</a></li>
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
            @endforeach
            <div class="row mt-3">
                <div class="d-flex justify-content-center" id="pagination">
                    {!! $cargos->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
