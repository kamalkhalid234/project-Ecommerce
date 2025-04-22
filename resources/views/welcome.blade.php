
@extends('Layouts.master')

@section('content')

<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">TYPE</span> Products</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                </div>
            </div>
        </div>
        <div class="row">
             @foreach ($categories as $item)
                 <div class="col-lg-4 col-md-6 text-center">
                     <div class="single-product-item">
                         <div class="product-image">
                             <a href="single-product.html">
                                  <img src="{{ url($item -> imageCategories) }}"
                                  style="max-height: 250px;min-height:250px !important"
                                  alt="" ></a>
                         </div>
                         <h3>{{$item -> nomCategories}}</h3>
                         <h3>{{$item -> texteCategories}}</h3>
                     </div>
                 </div>
             @endforeach
        </div>
    </div>
</div>
<!-- end product section -->

@endsection



{{-- comenter erreu --}}
{{-- @section('xyz')
kamal khalid
@endsection

 --}}
