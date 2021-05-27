<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                @include('_aside-menu');
            </div>
            <div class="col-9">
                <div class="product">
                    <div class="product__content d-flex flex-row">
                        <div class="product__info">
                            <img src="{{asset($product->img)}}" alt="" class="product__img">
                        </div>
                        <div class="product__info">
                            <h1>{{$product->name}}</h1>
                            <p>{{$product->subcategory->name}} / {{$product->subcategory->category->name}}</p>
                            <p>{{$product->price}}</p>
                            <p>{{$product->color}}</p>
                            <p>{{$product->availability}}</p>
                        </div>
                    </div>
                    <div class="product__content"></div>                    
                </div>
            </div>
        </div>
    </div>

</x-layout>