@extends('layout')
@section('menu-box')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-title text-center">
                <h2>Special Menu</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="special-menu text-center">
                <div class="button-group filter-button-group">
                    <button class="active" data-filter="*">All</button>
                    <button data-filter=".drinks">Drinks</button>
                    <button data-filter=".lunch">Lunch</button>
                    <button data-filter=".dinner">Dinner</button>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row special-list">
    @foreach ($products as $p)
        <div class="col-lg-4 col-md-6 special-grid drinks">
            <div class="gallery-single fix">
                <img src="../../images/{{$p->img}}" class="img-fluid" alt="Image">
                <div class="why-text">
                    <h4><a href="{{Route('product-detail',$p->id)}}">{{$p->title}}</a></h4>
                    <p>{{$p->description}}</p>
                    <h5>{{$p->price}}K</h5>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
@section('gallery')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-title text-center">
                <h2>Gallery</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
            </div>
        </div>
    </div>
    <div class="tz-gallery">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <a class="lightbox" href="images/gallery-img-01.jpg">
                    <img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <a class="lightbox" href="images/gallery-img-02.jpg">
                    <img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <a class="lightbox" href="images/gallery-img-03.jpg">
                    <img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
                </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <a class="lightbox" href="images/gallery-img-04.jpg">
                    <img class="img-fluid" src="images/gallery-img-04.jpg" alt="Gallery Images">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <a class="lightbox" href="images/gallery-img-05.jpg">
                    <img class="img-fluid" src="images/gallery-img-05.jpg" alt="Gallery Images">
                </a>
            </div> 
            <div class="col-sm-6 col-md-4 col-lg-4">
                <a class="lightbox" href="images/gallery-img-06.jpg">
                    <img class="img-fluid" src="images/gallery-img-06.jpg" alt="Gallery Images">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection