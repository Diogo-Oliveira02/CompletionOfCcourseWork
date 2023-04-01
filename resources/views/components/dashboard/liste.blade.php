<form action="/search/{{$service}}" method="post" class="container d-flex form-inline mt-2 justify-content-center">
    @csrf
    <div class="input-group w-75 mb-3">
        <input name="search" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Pesquise o produto...">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit"><img src="{{ asset('storage/imagem/icon/lupa.png') }}" alt="lupa"></button>
        </div>
    </div> 
</form>
@if (isset($result))
    <div class="container">
        <div class="row g-5">
            @foreach ($result as $key)
                @if ($service == 'category')
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                            <div class="card-body">
                                <h4 class="fs-5"style="text-transform: uppercase;">{{ $service }}
                                    {{ $key->id }}</h4>
                                <p class="fs-5">{{ $key->name }}</p>
                            </div>
                            <div class="d-flex justify-content-between card-footer">
                                <form action="/editar/{{ $service }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key->id }}">
                                    <button type="submit" class="btn"><img src="{{ asset('storage/imagem/icon/editar.png') }}" width="45"height="45" alt="editar"></button>
                                </form>
                                <form action="/deletar/{{ $service }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key->id }}">
                                    <button type="submit" class="btn"><img
                                            src="{{ asset('storage/imagem/icon/excluir.png') }}" width="45"
                                            height="45" alt="excluir"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @elseif($service == 'collection')
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow-lg" style="width: 18rem; margin: auto;">
                            <div class="card-body">
                                <h4 class="fs-5"style="text-transform: uppercase;">{{ $service }} {{ $key->id }}</h4>
                                <p class="fs-5">{{ $key->description}}</p>
                            </div>
                            <div class="d-flex justify-content-between card-footer">
                                <form action="/editar/{{ $service }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key->id }}">
                                    <button type="submit" class="btn"><img src="{{ asset('storage/imagem/icon/editar.png') }}" width="45"height="45" alt="editar"></button>
                                </form>
                                <form action="/deletar/{{ $service}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key->id }}">
                                    <button type="submit" class="btn"><img src="{{ asset('storage/imagem/icon/excluir.png') }}" width="45" height="45" alt="excluir"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @elseif($service == 'clothing')
                    <p class="card-text">{{ $key->name }}</p>
                    <p class="card-text">{{ $key->description }}</p>
                @elseif($service == 'user_email')
                    <p class="card-text">{{ $key->name }}</p>
                    <p class="card-text">{{ $key->email }}</p>
                @endif


                <br>
            @endforeach
        </div>
    </div>
@endif
