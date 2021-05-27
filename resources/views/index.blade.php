<x-layout>
<div class="container">
        <div class="menu d-flex flex-row justify-content-center">
            @foreach ($categories as $category)
            <div class="menu__category">
                <a href="/products/{{$category->slug}}" class="menu__btn">{{$category->name}}</a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/slide1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/slide2.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/slide3.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/slide4.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/slide5.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/slide6.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <section class="brands">
        <div class="container brand__icons d-flex justify-content-between py-5 flex-wrap">
                <img src="{{asset('img/brand1.jpg')}}" alt="" class="img-fluid">
                <img src="{{asset('img/brand2.jpeg')}}" alt="" class="img-fluid">
                <img src="{{asset('img/brand3.jpg')}}" alt="" class="img-fluid">
                <img src="{{asset('img/brand4.png')}}" alt="" class="img-fluid">
                <img src="{{asset('img/brand5.jpg')}}" alt="" class="img-fluid">
                <img src="{{asset('img/brand6.png')}}" alt="" class="img-fluid">
                <img src="{{asset('img/brand7.png')}}" alt="" class="img-fluid">
            </div>
    </section>

    <section class="contact">
        <div class="container-fluid d-flex flex-row justify-content-around">
            <div class="contact__content">
                <img src="{{asset('img/logo.png')}}" alt="" class="img-fluid">
            </div>
            <div class="contact__content">
                <h5 class="contact__header">Manifix Hurtownia Kosmetyczna</h5>
                <p class="contact__info">ul. Wierzbowa 25</p>
                <p class="contact__info">65-500 Ostrzeszów</p>
                <p class="contact__info">NIP 6221670191</p>
            </div>
            <div class="contact__content">
                <h5 class="contact__header">Godziny otwarcia</h5>
                <p class="contact__info">Poniedziałek - Piątek 8.00-16.00</p>
                <p class="contact__info">Sobota 9.00 - 14.00</p>
            </div>
            <div class="contact__content">
                <h5 class="contact__header">Telefon</h5>
                <p class="contact__info">+48 533 788 948</p>
            </div>
            
        </div>
    </section>

</x-layout>
