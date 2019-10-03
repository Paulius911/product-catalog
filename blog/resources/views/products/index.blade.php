@extends('layouts.shop')


@section('content')
    <section class="htc__category__area ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title--2 text-center">
                        <h2 class="title__line">Products</h2>
                        <p>find all you need</p>
                    </div>
                </div>
            </div>
            <div class="htc__product__container">
                <div class="row">
                    <div class="product__list clearfix mt--30">
                    @foreach($products as $product)


                        <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12 single-product mt--50">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="{{ route('products.show', [$product->id]) }}">
                                            @isset($product->image)
                                                {{-- Tikriname ar nuotrauka yra is storage ar is nuotolinio source --}}
                                                @if(strpos($product->image, "https://") !== false || strpos($product->image, "http://") !== false)
                                                    <img src="{{ $product->image }} " style="max-width: 100%">
                                                @else
                                                    <img src="{{ Storage::url($product->image) }}" style="max-width: 100%">
                                                @endif
                                            @endisset
                                        </a>
                                    </div>
                                    <div class="fr__product__inner text-center">
                                        <span>Rating:</span>
                                        @if ( $product->reviews()->count() )
                                            <span>{{number_format($product->reviews()->avg('rating'),2) }} / 5.00</span>
                                        @else
                                            <span><small>No ratings yet.</small></span>
                                        @endif
                                        <h3>
                                            <a href="{{ route('products.show', [$product->id]) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h3>
                                        <ul>
                                            <li>SKU: {{ $product->sku }}</li>
                                        </ul>
                                        @if($product->discount != 0)
                                            <del>{{ $product->tax() }} €</del>


                                           {{ $product->discounted() }} €

                                            @else

                                            {{ $product->tax() }} €

                                        @endif

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
                        @endforeach
                        <div class="row">
                            <div class="col-md-12 text-center">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
