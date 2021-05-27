<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('_aside-menu')
            </div>
            <div class="col-10">
                <div class="products__info">
                    <h1 class="text-center pt-2 pb-5">{{$category->name}}</h1>
                    <p class="text-center pb-5">{{$category->description}}</p>
                </div>
                <div class="products__content d-flex justify-content-column flex-wrap justify-content-center flex-grow">

                    @foreach ($products as $product)
                    <div class="card" style="width: 15rem;">
                        <a href="/product/{{$product->slug}}">
                                <img class="card-img-top" src="{{asset($product->img)}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5> 
                                </a>
                                    <p class="card-text">{{$product->subcategory->name}}</p>
                                    <p class="card-text">{{$product->brand}}</p>
                                    <p class="card-text">Cena: {{$product->price}}</p>
                                    <a href="#" class="btn btn-primary">Dodaj do koszyka</a>
                                </div>
                            </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    
</x-layout>