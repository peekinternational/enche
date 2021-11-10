<header>
  <div class="top-bar py-2 px-2">
    <div class="row d-flex justify-content-between">
      <div class="col-md-4 col-6 left_col">
        <ul class="list-unstyled list-inline mb-0">
          <li class="list-inline-item d-none d-sm-inline-block"><a href="" class="text-uppercase text-decoration-none text-reset">Download Enche apps</a></li>
          <li class="list-inline-item">
            <select class="border-0 text-reset bg-transparent text-uppercase">
              <option>Langauge</option>
              <option>English</option>
              <option>Arabic</option>
              <option>Urdu</option>
            </select>
          </li>
          <li class="list-inline-item">
            <select class="border-0 text-reset bg-transparent text-uppercase">
              <option>Currency</option>
              <option>USD</option>
              <option>RM</option>
              <option>RS</option>
            </select>
          </li>
        </ul>
      </div>
      <div class="col-md-4 col-6 text-end right-menu">
        <ul class="list-unstyled list-inline mb-0">
          <li class="list-inline-item"><a href="" class="text-uppercase text-decoration-none text-reset">Sign up</a> | <a href="" class="text-uppercase text-decoration-none text-reset">Log In</a></li>
          <li class="list-inline-item d-none d-sm-inline-block"><a href="" class="text-uppercase text-decoration-none text-reset"><i class="fal fa-bell"></i> Notification</a></li>
          <li class="list-inline-item"><a href="" class="text-uppercase text-decoration-none text-reset">Ship to <img src="{{asset('frontend/images/flag/img-02.png')}}"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="{{asset('frontend/images/logo.png')}}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars" aria-hidden="true"></i>
        <!-- <span class="navbar-toggler-icon"></span> -->
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        
        <div class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll align-items-center">
          <div class="cate-btn pe-2 d-none d-sm-block">
            <!-- <i class="fa fa-bars"></i> -->
            <img src="{{asset('frontend/images/menudots.png')}}">
          </div>
          <form class="d-flex">
            <div class="search"> 
              <input type="text" class="form-control text-center" placeholder="Search for product, brand or shop"> 
              <button class="btn btn-primary"><i class="fal fa-search pe-2"></i>Search</button> 
            </div>
          </form>
        </div>
        
        <div class="d-flex align-items-center">
          <div class="cart-btn me-4">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <button class="btn track-btn text-uppercase"><i class="fal fa-truck pe-2"></i>Track My Order</button>
        </div>
      </div>
    </div>
  </nav>
</header>

<div class="nav-scroller py-1 mb-2 border-top border-bottom">
  <nav class="nav d-flex bottom-nav">
    <ul class="list-unstyled list-inline mb-0">
      <li class="list-inline-item">
        <select class="border-0 text-reset bg-transparent text-uppercase">
          <option>Join As</option>
          <option>Seller</option>
        </select>
      </li>
      <li class="list-inline-item">
        <a class="p-2 text-black text-decoration-none text-uppercase" href="#">Kudos</a>
      </li>
      <li class="list-inline-item">
        <select class="border-0 text-reset bg-transparent text-uppercase">
          <option>Help</option>
          <option>Help</option>
        </select>
      </li>
      <li class="list-inline-item">
        <a class="p-2 text-black text-decoration-none text-uppercase" href="#">EMA</a>
      </li>
    </ul>
  </nav>
</div>