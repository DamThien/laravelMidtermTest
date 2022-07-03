@include('head')
   <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4><a href="/">Trang chủ</a></h4>
                            <ul class ="vinhabc">
                                <li class="hoai"><a href="/hoaqua{{1}}">Hoaqua</a> </li>
                                 <li class="hoai"><a href="/hoaqua{{0}}">Thực phẩm khô</a> </li>
                            </ul>
                            <div class="beta-products-details">
                                <p class="pull-left">438 styles found</p>
                                <div class="clearfix"></div>
                            </div>
                            @if (isset($listProduct))
                                    @foreach ($listProduct as $key =>$product )
                                            <div class="col-sm-3">
                                                <div class="single-item">
                                                    <div class="single-item-header">
                                                        <a href="product.html"><img src="{{$product->image}}" alt="Lỗi hiển thi"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{$product->name}}</p>
                                                        <p class="single-item-title">{{$product->old_price}}</p>
                                                        <p class="single-item-price">
                                                            <span>{{$product->new_price}}</span>
                                                        </p>
                                                    </div>
                                                    <div class="single-item-caption">
                                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                        <a class="beta-btn primary" href="detail/{{$product->id}}">Details <i class="fa fa-chevron-right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                            </div> 
                                            </div>

                                    @endforeach
                                    <br>
                                    <br>
                                    
                                @endif
                                <br>
                                <br>