
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          @foreach ($homes as $item)
          <h1>{{$item->title}}</h1>
          <ul>
            <li><i class="ri-check-line"></i> {{$item->subtitle}}</li>
            <li><i class="ri-check-line"></i> {{$item->subtitle2}}</li>
            <li><i class="ri-check-line"></i> {{$item->subtitle3}}</li>
          </ul>
          <div class="mt-3">
            <a href="#about" class="btn-get-started scrollto">{{$item->btn}}</a>
            <a href="" class="btn-get-quote">{{$item->btn2}}</a>
          </div>
          @endforeach
         
      
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{asset('img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->