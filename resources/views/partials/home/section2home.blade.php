<section id="about" class="about">
    <div class="container">

      <div class="row content">
        <div class="col-lg-6">
          @foreach ($homes as $item)
          <h2>{{$item->title2}}</h2>
          <h3>{{$item->subtitle11}}</h3>
          <img style="width: 500px;" src="{{$item->img}}" alt="">
          @endforeach
        </div>

        <div class="col-lg-6 pt-4 pt-lg-0">
          @foreach ($homes as $item)
          <p>
            {{$item->text}}
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> {{$item->subtitle22}}</li>
            <li><i class="ri-check-double-line"></i> {{$item->subtitle33}}</li>
            <li><i class="ri-check-double-line"></i> {{$item->subtitle44}}</li>
          </ul>
          <p class="font-italic">
            {{$item->lorem}}
          </p>
          @endforeach
        </div>
      </div>

    </div>
  </section>