@if (isset($result))
    <div class="container">
        <div class="row mt-lg-5 shadow-sm">
            @foreach ($result as $key)
                @if ($service == 'clothing')
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-3 mb-3">
                        <img src="{{Storage::url($key->patch)}}" class="card-img" alt="{{$key->name}}">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h1 class="mt-lg-5 text-navy">{{$key->name}}</h1>
                        <p class="fs-6 text-navy">Ref: #{{$key->reference}}</p>

                        <p class="fs-4 mt-lg-5 text-navy"><strong>Descrição</strong></p>
                        <p class="fs-4 text-navy">{{$key->description}} </p>

                        <p class="fs-4 mt-lg-5 text-navy">Categoria: Inverno 2023</p>
                        <p class="fs-4 text-navy">Tipo: Blazer</p>


                        <h2 class="fs-1 mt-lg-5 text-navy">R$ {{$key->price}},00</h2>

                    </div>
                @else
                @endif
            @endforeach
        </div>
    </div>
@endif