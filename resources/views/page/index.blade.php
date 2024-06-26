@extends('layout.master')

@section('content')	
	<div class="rev-slider">
		<div class="fullwidthbanner-container">
			<div class="fullwidthbanner">
				<div class="bannercontainer" >
					<div class="banner" >
						<ul>
							@isset($slides)
								@foreach ($slides as $slide )
			
									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
									<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="/images/slide/{{$slide->image}}" data-src="/images/slide/{{$slide->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('/images/slide/{{$slide->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>

									</li>
								@endforeach
								
							@endisset
						
						</ul>
					</div>
				</div>
				<div class="tp-bannertimer">
					
				</div>
			</div>
		</div>		
		<!--slider-->
	</div>

	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản phẩm mới </h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($new_products)}} styles found</p>
								<div class="clearfix"></div>
							</div>
                            
							<div class="row">
                                @php $stt=0; @endphp
                                @foreach($new_products as $new_product)
                                @php $stt++; @endphp
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        @if($new_product->promotion_price!=0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="/images/product/{{$new_product->image}}" alt="" height="250px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$new_product->name}}</p>
                                            <p class="single-item-price" style="font-size: 15px; font-weight: bold;">
                                                @if($new_product->promotion_price==0)
                                                <span class="flash-sale">{{ number_format($new_product->unit_price) }} đồng</span>
                                                @else
                                                <span class="flash-del">{{ number_format($new_product->unit_price) }} đồng</span>
                                                <span class="flash-sale">{{ number_format($new_product->promotion_price) }} đồng</span>
                                              
                                                @endif
                                                
                                            
                                        </div>
                                      
                                        <div class="single-item-caption">
                                            @if(Auth::check())
                                                <a href="{{route('product.favorite',$new_product->id)}}" class="add-to-favorites pull-left">
                                                    <i class="fa fa-heart"></i> Yêu thích
                                                </a> <br><br>
                                            @endif
											<a class="add-to-cart pull-left" href="{{ route('page.addtocart',$new_product->id) }}"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{route('page.product',['id'=>$new_product->id] ) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                            
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <!-- cứ 4 sản phẩm thì ngắt dòng -->
                                    @if($stt % 4==0)
                                    <div class="space40">&nbsp;</div>
                                    @endif
                                </div>
                                
                               
                                @endforeach
                                
                            </div> <!-- .beta-products-list -->
							
						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm giá tót</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($products)}} styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
                                @php $stt=0; @endphp
                                @foreach($products as $product)
                                @php $stt++; @endphp
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        @if($product->promotion_price!=0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="/images/product/{{$product->image}}" alt="" height="250px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$product->name}}</p>
                                            <p class="single-item-price" style="font-size: 15px; font-weight: bold;">
                                                @if($product->promotion_price==0)
                                                <span class="flash-sale">{{ number_format($product->unit_price) }} đồng</span>
                                                @else
                                                <span class="flash-del">{{ number_format($product->unit_price) }} đồng</span>
                                                <span class="flash-sale">{{ number_format($product->promotion_price) }} đồng</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            @if(Auth::check())
                                            <a href="{{route('product.favorite',$product->id)}}" class="add-to-favorites pull-left">
                                                <i class="fa fa-heart"></i> Yêu thích
                                            </a> <br><br>
                                        @endif
											<a class="add-to-cart pull-left" href="{{ route('page.addtocart',$product->id) }}"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{route('page.product',['id'=>$product->id] ) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                     <!-- cứ 4 sản phẩm thì ngắt dòng -->
                                @if($stt % 4==0)
                                <div class="space40">&nbsp;</div>
                                @endif
                                </div>
                               
                                @endforeach
                            </div> <!-- .beta-products-list -->
							{{ $products->links() }}
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
</div>
@endsection

@section('js')
<!--customjs-->
<script src="/source/assets/dest/js/custom2.js"></script>
<script>
$(document).ready(function($) {    
	$(window).scroll(function(){
		if($(this).scrollTop()>150){
		$(".header-bottom").addClass('fixNav')
		}else{
			$(".header-bottom").removeClass('fixNav')
		}}
	)
})
</script>
@endsection
