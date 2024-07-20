@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-title text-center">
                <h2>Chi tiết sản phẩm: {{$product->title}}</h2>
                {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p> --}}
            </div>
        </div>
    </div>
    <div class="">
        <div class="col-lg-4 col-md-6 special-grid drinks">
            <table class="table-detail">
                <tr>
                    <td><img src="../../images/{{$product->img}}" alt="Image" style="width : 500px" height="300px"></td>
                    <td>
                        <strong> Name Product: </strong>{{$product->title}} <br>
                        <div class="d-flex flex-row bd-highlight mb-3">
                            <strong> Description: </strong><p>{{$product->description}}</p>
                        </div>
                        
                        <strong> Price Product: </strong>{{$product->price}}
                    </td>
                </tr>
            </table>
                
                
            
        </div>
    </div>
</div>
@endsection
{{-- @section('gallery')
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
@endsection --}}