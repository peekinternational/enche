@extends('frontend.layout.app')
@section('style')
@endsection

@section('content')

<div class="row">
	<div class="col-md-9">
		<div id="mainBanner" class="carousel slide" data-bs-ride="carousel">

		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="{{asset('frontend/images/slider.png')}}" alt="Slide" width="1100" height="400">
		      <div class="carousel-caption d-md-block">
        		<h5>Merchant Are Welcome to Join</h5>
      		</div>
		    </div>
		    <div class="carousel-item">
		      <img src="{{asset('frontend/images/slider.png')}}" alt="Slide" width="1100" height="400">
		      <div class="carousel-caption d-md-block">
        		<h5>Merchant Are Welcome to Join</h5>
      		</div>
		    </div>
		    <div class="carousel-item">
		      <img src="{{asset('frontend/images/slider.png')}}" alt="Slide" width="1100" height="400">
		      <div class="carousel-caption d-md-block">
        		<h5>Merchant Are Welcome to Join</h5>
      		</div>
		    </div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a> -->
		  <ol class="carousel-indicators">
          <li data-bs-target="#mainBanner" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#mainBanner" data-bs-slide-to="1" ></li>
          <li data-bs-target="#mainBanner" data-bs-slide-to="2" ></li>
      </ol>
		</div>
	</div>
	<div class="col-md-3">
		<div class="row text-center general_cat">
			<div class="col-md-6 col-6 mb-3">
				<img class="mb-2" src="{{asset('frontend/images/products/images/csrCart.png')}}">
				<p class="text-uppercase">CSR CART</p>
			</div>
			<div class="col-md-6 col-6 mb-3">
				<img class="mb-2" src="{{asset('frontend/images/products/images/enchepreneur.png')}}">
				<p class="text-uppercase">Enchepreneur</p>
			</div>
			<div class="col-md-6 col-6 mb-3">
				<img class="mb-2" src="{{asset('frontend/images/products/images/csrGallery.png')}}">
				<p class="text-uppercase">CSR Gallery</p>
			</div>
			<div class="col-md-6 col-6 mb-3">
				<img class="mb-2" src="{{asset('frontend/images/products/images/affliate.png')}}">
				<p class="text-uppercase">EncheFfiliate</p>
			</div>
			<div class="col-md-6 col-6 mb-1">
				<img class="mb-2" src="{{asset('frontend/images/products/images/partner.png')}}">
				<p class="text-uppercase mb-0">Partner with us</p>
			</div>
			<div class="col-md-6 col-6 mb-1">
				<img class="mb-2" src="{{asset('frontend/images/products/images/artisanCraft.png')}}">
				<p class="text-uppercase mb-0">Artisan Craft</p>
			</div>
		</div>
	</div>
	
</div>
<!-- Quote section -->
<section class="my-3">
	<div class="row">
		<div class="col-md-4 mb-3 mb-md-0 pe-2">
			<div class="multi-products border border-2">
				<div class="d-flex justify-content-between p-3">
					<h6 class="text-uppercase title">Request for quote</h6>
					<a href="" class="text-decoration-none">See More ></a>
				</div>
				<div class="row mt-3">
					<div class="col-md-6 col-6 text-center">
						<div class="item">
							<div class="product-img bag-img">
								<img class="w-100 mb-2 object-fit-contain" height="102" src="{{asset('frontend/images/products/bag.png')}}">
							</div>
							<div class="product-desc">
								<h6>RM 1.00</h6>
								<h6>1 Piece</h6>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-6 text-center">
						<div class="item">
							<div class="product-img">
								<img class="w-100 mb-2" src="{{asset('frontend/images/products/sweets.png')}}">
							</div>
							<div class="product-desc">
								<h6>RM 1.00</h6>
								<h6>1 Piece</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-3 mb-md-0 pe-2">
			<div class="multi-products border border-2">
				<div class="d-flex justify-content-between p-3">
					<h6 class="text-uppercase title">Enchepreneur</h6>
					<a href="" class="text-decoration-none">See More ></a>
				</div>
				<div class="row mt-3">
					<div class="col-md-6 col-6 text-center">
						<div class="item">
							<div class="product-img">
								<img class="w-100 mb-2" src="{{asset('frontend/images/products/shoes.png')}}">
							</div>
							<div class="product-desc">
								<h6>Dealer Price</h6>
								<h6>RM 10.00/1 Piece</h6>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-6 text-center">
						<div class="item">
							<div class="product-img">
								<img class="w-100 mb-2" src="{{asset('frontend/images/products/dryFruit.png')}}">
							</div>
							<div class="product-desc">
								<h6>Dealer Price</h6>
								<h6>RM 10.00/1 Piece</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-3 mb-md-0 ps-2">
			<div class="multi-products border border-2">
				<div class="d-flex justify-content-between p-3">
					<h6 class="text-uppercase title">EncheFfiliate</h6>
					<a href="" class="text-decoration-none">See More ></a>
				</div>
				<div class="row mt-3">
					<div class="col-md-6 col-6 text-center">
						<div class="item">
							<div class="product-img">
								<img class="w-100 mb-2" src="{{asset('frontend/images/products/ladiesBag.png')}}">
							</div>
							<div class="product-desc">
								<h6>3%</h6>
								<h6>Commission</h6>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-6 text-center">
						<div class="item">
							<div class="product-img">
								<img class="w-100 mb-2" src="{{asset('frontend/images/products/plant.png')}}">
							</div>
							<div class="product-desc">
								<h6>3%</h6>
								<h6>Commission</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Surprise Sale -->
<section class="mb-4 sales-products">
	<h5 class="text-black text-uppercase d-flex align-items-center">Surprise Sale  
		<div id="countdown">
		    <ul>
		      <li><span id="days"></span></li>
		      <li><span id="hours">0</span></li>
		      <li><span id="minutes"></span></li>
		      <!-- <li><span id="seconds"></span></li> -->
		    </ul>
		  </div>
	</h5>
	<div class="row">
		<div class="col-6 col-md-2 mb-3 mb-md-0 pe-2">
			<div class="product-item border text-center  position-relative position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img pt-4">
					<img class="w-100" src="{{asset('frontend/images/products/ladiesBag.png')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center  position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img bag-img">
					<img class="w-100" src="{{asset('frontend/images/products/bag.png')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center  position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img">
					<img class="w-100" src="{{asset('frontend/images/products/plant.png')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center  position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img">
					<img class="w-100" src="{{asset('frontend/images/products/cloths.jpg')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center  position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img">
					<img class="w-100" src="{{asset('frontend/images/products/gents.png')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 ps-2">
			<div class="product-item border text-center  position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img">
					<img class="w-100" src="{{asset('frontend/images/products/shoes.png')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Surprise Sale -->
<section class="mb-4 sales-products">
	<h5 class="text-black text-uppercase">New Arrival </h5>
	<div class="row">
		<div class="col-6 col-md-2 mb-3 mb-md-0 pe-2">
			<div class="product-item border text-center  position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img">
					<img class="w-100" src="{{asset('frontend/images/products/ladiesBag.png')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center  position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img bag-img">
					<img class="w-100" src="{{asset('frontend/images/products/bag.png')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center  position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img">
					<img class="w-100" src="{{asset('frontend/images/products/plant.png')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center  position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img">
					<img class="w-100" src="{{asset('frontend/images/products/cloths.jpg')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center  position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img">
					<img class="w-100" src="{{asset('frontend/images/products/gents.png')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 ps-2">
			<div class="product-item border text-center position-relative">
				<div class="flag position-absolute end-0 text-end">
					<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
				</div>
				<div class="product-img">
					<img class="w-100" src="{{asset('frontend/images/products/shoes.png')}}">
				</div>
				<div class="product-desc d-flex">
					<div class="sale w-25">
						<h5 class="text-start">20% Off</h5>
					</div>
					<div class="w-75">
						<h4 class="text-muted mb-0 text-start"><del>RM80.00</del></h4>
						<h4 class="text-black mb-0 text-start">RM20.00</h4>
					</div>
				</div>
				<div class="product-btn">
					<span class="badge rounded-pill w-100">20 sold</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Categories -->
<section class="mb-4">
	<h5 class="text-black text-uppercase">Categories</h5>
	<div class="row d-flex justify-content-between cat_row">
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/agriculture.png')}}">
				</div>
				<div class="cat_title">
					<h6>Agriculture</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/books.png')}}">
				</div>
				<div class="cat_title">
					<h6>Books</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/personalCare.png')}}">
				</div>
				<div class="cat_title">
					<h6>Beauty & Personal Care</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/fabric.png')}}">
				</div>
				<div class="cat_title">
					<h6>Fabric & Textile</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/fashion.png')}}">
				</div>
				<div class="cat_title">
					<h6>Fashion</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/health.png')}}">
				</div>
				<div class="cat_title">
					<h6>Health Supplements</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/home.png')}}">
				</div>
				<div class="cat_title">
					<h6>Home Appliances</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/mommy.png')}}">
				</div>
				<div class="cat_title">
					<h6>Mommy & Babies</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/muslim.png')}}">
				</div>
				<div class="cat_title">
					<h6>Muslim Fashion</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/ppe.png')}}">
				</div>
				<div class="cat_title">
					<h6>Personal Protective Equipment (PPE)</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-between d-flex cat_row">
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/electronics.png')}}">
				</div>
				<div class="cat_title">
					<h6>Electronics Accessories</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/entertainment.png')}}">
				</div>
				<div class="cat_title">
					<h6>Entertainment</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/gift.png')}}">
				</div>
				<div class="cat_title">
					<h6>Souvenir, Handicraft, Gift</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/security.png')}}">
				</div>
				<div class="cat_title">
					<h6>Security & Protection</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/product.png')}}">
				</div>
				<div class="cat_title">
					<h6>Product Packaging</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/office.png')}}">
				</div>
				<div class="cat_title">
					<h6>Office Supplies</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/wedding.png')}}">
				</div>
				<div class="cat_title">
					<h6>Wedding Supplies</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/tools.png')}}">
				</div>
				<div class="cat_title">
					<h6>Tool & Home Improvment</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/sports.png')}}">
				</div>
				<div class="cat_title">
					<h6>Sports and Hobbies</h6>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="cat-item p-1 text-center">
				<div class="cat-img">
					<img class="w-100 mb-2" src="{{asset('frontend/images/products/images/green.png')}}">
				</div>
				<div class="cat_title">
					<h6>Go Green</h6>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Surprise Sale -->
<section class="mb-5 slider_products">
	<h5 class="text-black text-uppercase">CSR CART</h5>
	<div class="row">
		<div class="col-6 col-md-4 d-none d-sm-block pe-2">
			<div id="CSRcart" class="carousel slide" data-bs-ride="carousel">

			  <!-- Indicators -->
			  <ul class="carousel-indicators">
			    <li data-bs-target="#CSRcart" data-bs-slide-to="0" class="active"></li>
			    <li data-bs-target="#CSRcart" data-bs-slide-to="1"></li>
			    <li data-bs-target="#CSRcart" data-bs-slide-to="2"></li>
			  </ul>
			  
			  <!-- The slideshow -->
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="{{asset('frontend/images/products/corporate.png')}}" alt="Los Angeles" width="1100" height="380">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('frontend/images/products/corporate.png')}}" alt="Chicago" width="1100" height="380">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('frontend/images/products/corporate.png')}}" alt="New York" width="1100" height="380">
			    </div>
			  </div>
			  
			  <!-- Left and right controls -->
			  <!-- <a class="carousel-control-prev" href="#CSRcart" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#CSRcart" data-bs-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a> -->
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img pt-5">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/dates2.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Dates Palm Fruits</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM40.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">50% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img class="" src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img pt-5">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/dates.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Raisin</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM24.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM12.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">50% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img pt-5">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/sweets.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Dried Apricots</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM50.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM25.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">50% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-01.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 ps-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img pt-5">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/dryFruit.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Dried Figs</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM50.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM25.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">50% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-03.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Artisan -->
<section class="mb-5 slider_products">
	<h5 class="text-black text-uppercase">Artisan</h5>
	<div class="row">
		<div class="col-6 col-md-4 d-none d-sm-block pe-2">
			<div id="artisanSlider" class="carousel slide" data-bs-ride="carousel">

			  <!-- Indicators -->
			  <ul class="carousel-indicators">
			    <li data-bs-target="#artisanSlider" data-bs-slide-to="0" class="active"></li>
			    <li data-bs-target="#artisanSlider" data-bs-slide-to="1"></li>
			    <li data-bs-target="#artisanSlider" data-bs-slide-to="2"></li>
			  </ul>
			  
			  <!-- The slideshow -->
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="{{asset('frontend/images/products/tailor.png')}}" alt="Los Angeles" width="1100" height="380">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('frontend/images/products/tailor.png')}}" alt="Chicago" width="1100" height="380">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('frontend/images/products/tailor.png')}}" alt="New York" width="1100" height="380">
			    </div>
			  </div>
			  
			  <!-- Left and right controls -->
			  <!-- <a class="carousel-control-prev" href="#artisanSlider" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#artisanSlider" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a> -->
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img pt-5">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/dates2.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Dates Palm Fruits</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM40.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">50% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img pt-5">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/dates.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Raisin</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM24.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM12.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">50% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img pt-5">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/sweets.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Dried Apricots</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM50.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM25.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">50% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fal fa-star"></i>
							<i class="fal fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-01.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 ps-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img pt-5">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/dryFruit.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Dried Figs</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM50.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM25.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">50% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-03.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Just for you -->
<section class="mb-5 all_products">
	<h5 class="text-black text-uppercase">Just for You</h5>
	<div class="row">
		<div class="col-6 col-md-2 mb-3 mb-md-0 pe-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/longShoes.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Universsl Traveler Boot</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM40.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">50% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-05.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/jersy.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Sports Sweater</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">60% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/soap.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Organic Soap</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">70% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-01.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/brush.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Electrical Tootbrush</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">80% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-01.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/plant.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Handmande Indoor Plant</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">90% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 ps-2">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/tissue.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Thermal Paper</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">99% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-03.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 pe-2 mt-3">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/honey.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">KAK NOOR Sambal Paste 50gram </p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">50% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-05.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2 mt-3">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/biscuits.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">SNY Homemade Cookies</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">60% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2 mt-3">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/ladiesBag.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Genuine Leather PVC High Grade Handy Bag</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">70% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-01.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2 mt-3">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/men.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">Good Fabric Slim Fit Shirt</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">80% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-01.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 px-2 mt-3">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/screw.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">(500) Bolt Varieties Size Stainless Steel</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">90% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-02.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-2 mb-3 mb-md-0 ps-2 mt-3">
			<div class="product-item border text-center position-relative h-100">
				<div class="product-header border-bottom p-1">
					<h6 class="text-center mb-0 text-uppercase">Company Name/Brand</h6>
				</div>
				<div class="product-data">
					<div class="product-img">
						<img class="w-100 mb-2" src="{{asset('frontend/images/products/cap.png')}}">
					</div>
					<div class="product-desc d-flex flex-column">
						<p class="text-start mt-3">100% Cotton Customade Cap</p>
						<div class="price-section d-flex align-items-center my-3 mb-4">
							<div class="w-50 ">
								<h6 class="text-muted mb-0 text-start"><del>RM80.00</del></h6>
								<h6 class="text-black mb-0 text-start">RM20.00</h6>
							</div>
							<div class="flash-sale w-50 rounded">
								<span class="badge rounded">99% Off</span>
							</div>
							
						</div>
					</div>
					<div class="product-footer d-dlex text-start">
						<span>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</span>
						<small class="">(20 sold)</small>
					</div>
					<div class="bottom-flag position-absolute end-0 text-end">
						<img src="{{asset('frontend/images/flag/img-03.png')}}" width="30">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="mb-5">
	<div class="row d-flex justify-content-center">
		<div class="col-md-4 d-grid px-2 mx-auto">
			<button class="btn browse-btn">Browse More</button>
		</div>
	</div>
</section>
<section class="mt-3 subscribe p-4">
	<div class="row d-flex justify-content-center">
		<div class="col-md-5 d-grid px-2 mx-auto">
			<p class="fw-bold text-center">We will deliver the latest trends and industry news straight to your inbox.</p>
			<form class="subscribe-form">
				<div class="input-group">
         <input type="email" class="form-control-lg form-control" placeholder="Your Email">
         <span class="input-group-btn ms-3">
         	<button class="btn browse-btn h-100 px-4 text-capitalize" type="submit">Subscribe</button>
         </span>
        </div>
			</form>
		</div>
	</div>
</section>
@endsection

@section('script')
<script>
	(function () {
	  const second = 1000,
	        minute = second * 60,
	        hour = minute * 60,
	        day = hour * 24;

	  //I'm adding this section so I don't have to keep updating this pen every year :-)
	  //remove this if you don't need it
	  let today = new Date(),
	      dd = String(today.getDate()).padStart(2, "0"),
	      mm = String(today.getMonth() + 1).padStart(2, "0"),
	      yyyy = today.getFullYear(),
	      nextYear = yyyy + 1,
	      dayMonth = "11/20/",
	      birthday = dayMonth + yyyy;
	  
	  today = mm + "/" + dd + "/" + yyyy;
	  if (today > birthday) {
	    birthday = dayMonth + nextYear;
	  }
	  //end
	  
	  const countDown = new Date(birthday).getTime(),
	      x = setInterval(function() {    

	        const now = new Date().getTime(),
	              distance = countDown - now;

	        document.getElementById("days").innerText = Math.floor(distance / (day)),
	          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
	          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute));
	          // document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

	        //do something later when date is reached
	        if (distance < 0) {
	          document.getElementById("headline").innerText = "It's my birthday!";
	          document.getElementById("countdown").style.display = "none";
	          document.getElementById("content").style.display = "block";
	          clearInterval(x);
	        }
	        //seconds
	      }, 0)
	  }());
</script>
@endsection