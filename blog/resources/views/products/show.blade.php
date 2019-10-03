@extends('layouts.shop')

@section('content')


    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Product Details Area -->
        <section class="htc__product__details bg__white mt--100">
            <!-- Start Product Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="htc__product__details__tab__content">
                                <!-- Start Product Big Images -->
                                <div class="product__big__images">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                            @isset($product->image)
                                                {{-- Tikriname ar nuotrauka yra is storage ar is nuotolinio source --}}
                                                @if(strpos($product->image, "https://") !== false || strpos($product->image, "http://") !== false)
                                                    <img src="{{ $product->image }} " style="max-width: 100%">
                                                @else
                                                    <img src="{{ Storage::url($product->image) }}" style="max-width: 100%">
                                                @endif
                                            @endisset
                                                <table>
                                                    @if ( $product->reviews()->count() )
                                                        <h2 class="mt--20">Comments:</h2>
                                                    @else
                                                    @endif


                                                    <br>

                                                    @foreach($product->reviews() as $review)
                                                     <tr>
                                                       <td>{{$review->comment}}</td>
                                                     </tr>
                                                    @endforeach
                                                </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Big Images -->
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="ht__product__dtl">
                                <h2>{{$product->name}}</h2>
                                <ul  class="pro__prize">
                                    <li>SKU: {{$product->sku}}</li>
                                </ul>
                                <ul  class="pro__prize">
                                    <li>Price {{$product->baseprice}} Eur</li>

                                    <br>
                                </ul>
                                <ul  class="pro__prize">
                                    <li>Taxes: 21%</li>
                                </ul>
                                <ul  class="pro__prize">
                                    <li>Price with taxes: {{ $product->tax() }} Eur</li>
                                </ul>
                                @if($product->discount != 0)
                                    <ul  class="pro__prize">
                                        <li>Discount: - {{ $product->discount }} %</li>
                                    </ul>
                                    <ul  class="pro__prize">
                                        <li>Price with discount: {{ $product->discounted() }} Eur</li>
                                    </ul>
                                @endif

                                <h4 class="ht__pro__title mt--10">Description:</h4>

                                <p class="pro__info">{!!$product->description!!}</p>


                                <h2 class="mt--40">Reviews</h2>

                                @if ( $product->reviews()->count() )
                                    {{number_format($product->reviews()->avg('rating'),2) }} / 5.00
                                     <br>
                                     {{ $product->reviews()->count() }} votes
                                    @else
                                        No ratings yet.
                                @endif
                                <h3 class="mt--10">Leave a review</h3>

                                <form action="{{route('review.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    Your rating:
                                    <select name="rating">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option selected>4</option>
                                        <option>5</option>
                                    </select>
                                    <br>
                                    Comment:
                                    <br>
                                    <textarea class="form-control" name="comment"></textarea>
                                    <br>
                                    <input class="btn btn-success mb--10" type="submit" value="Save rating">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- End Product Details Top -->
        </section>
        <!-- End Product Details Area -->

    </div>


@endsection
