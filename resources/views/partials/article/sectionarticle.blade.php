<br><br><br><br><br>
<section id="why-us" class="why-us">
    <div class="container">

      <div class="row">
        @foreach ($article as $item)
     
        
        <div class="col-lg-4 mt-4 mt-lg-4">
          
          <div class="box">
            <center> <h2>{{$item->title2}}</h2></center>
            <span>0{{$item->id}}</span>
            <h4>{{$item->title}}</h4>
            <p>{{$item->text}}</p>
          </div>
        </div>
          @endforeach
      </div>

    </div>
  </section><!-- End Why Us Section -->