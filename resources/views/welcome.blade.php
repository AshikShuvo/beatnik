@extends('layouts.app')
@section('content')
<div class="card border-default mb-3" style="width: 100%; background-color:#f2f2f2">
    <div class="card-body text-dark">
        <div class="row">
            <div class="col-sm-8">
                <div class="container">
                    <h5 class="card-title "><strong>
                            <h3> Family Protection Plan</h3>
                        </strong></h5>
                    <p class="card-text ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo molestiae
                        quos architecto qui labore excepturi facilis natus animi soluta ea quidem omnis unde, voluptas
                        tenetur corporis consectetur culpa repudiandae quas praesentium facere quam inventore. Minus
                        omnis fugit, unde harum laborum perspiciatis cum eum cupiditate optio repellendus error?
                        Possimus iusto fugit soluta quidem animi architecto maxime facere aperiam similique laboriosam
                        perferendis, hic voluptates modi natus asperiores. Temporibus quisquam sed sit autem?</p>
                </div>
                <div class="d-flex flex-row text-dark allign-items-stretch text-center">
                    <div class="port-item p-4 m-2 bg-primary">
                        <i class="fas fa-piggy-bank"></i><br> Savings
                    </div>
                    <div class="port-item p-4 m-2 bg-success">
                        <i class="fas fa-umbrella"></i><br> Early Cash
                    </div>
                    <div class="port-item p-4 m-2 bg-warning">
                        <i class="fas fa-user-graduate"></i><br> Children
                    </div>
                    <div class="port-item p-4 m-2 bg-danger">
                        <i class="fas fa-user-check"></i><br> Retirement
                    </div>
                    <div class="port-item p-4 m-2 bg-info">
                        <i class="fas fa-hand-holding-usd"></i><br> Investment
                    </div>
                </div>
            </div>
            

        </div>
    </div>

</div>
{{----}}
<div class="center">
    <div class="d-flex flex-row  text-dark mx-5 allign-items-stretch text-center">
        <div class="port-item m-2 bg-default">
            <span style="font-size: 48px; color: rgb(231, 141, 39);"><i class="fas fa-search"></i></span> What do You
            need
        </div>
        <div class="d-flex flex-row text-dark allign-items-stretch text-center">
            <div class="port-item p-4 m-2 ">
                <span style=" color: rgb(231, 141, 39);"><i class="fas fa-shopping-cart"></i></span><br> Products
            </div>
            <div class="port-item p-4 m-2 ">
                <span style=" color: rgb(231, 141, 39);"><i class="fas fa-hospital"></i></span><br> Hospital
            </div>
            <div class="port-item p-4 m-2 ">
                <span style=" color: rgb(231, 141, 39);"><i class="fas fa-map-marker-alt"></i></span><br> branches
            </div>
        </div>
    </div>
</div>

<div class="center">
    <div class="card-columns">
        <div class="card bg-default">
            <div class="card-body text-center">
                <span style="font-size: 48px; color: Dodgerblue;"><i class="fas fa-calculator"></i></span>
                <p> Premium Calculator</p>
            </div>
        </div>
        <div class="card" style="background-color:#ffe6e6;">
            <div class="card-body text-center">
                <span style="font-size: 48px; color:#ff6666;"><i class="fas fa-qrcode"></i></span>
                <p>Policy Information</p>
            </div>
        </div>
        <div class="card " style="background-color: #ff80b3;">
            <div class="card-body text-center">
                <span style="font-size: 48px; color: #ff3385;"><i class="fas fa-exchange-alt"></i></span>
                <p>My Transictions</p>
            </div>
        </div>
    </div>
</div>
{{--our product--}}
<div class="card container border-default mb-3" style="width: 100%; background-color:#f2f2f2">
    <div class="card-body">
        <div class="card-title">
            <h1>Our Products</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reprehenderit est, eveniet
                deleniti error iure quae cum, a provident odio accusantium quo, distinctio nam veritatis nemo voluptate
                deserunt aperiam amet!</p>
                <div class="card bg-light mb-3" style="max-width: 100%;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="card" style="width: 100%;">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item port-item " data-toggle="collapse" data-target="#savings">Savings</li>
                            <li class="list-group-item port-item " data-toggle="collapse" data-target="#earlycash">Early Cash</li>
                            <li class="list-group-item port-item " data-toggle="collapse" data-target="#children">Children</li>
                            <li class="list-group-item port-item " data-toggle="collapse" data-target="#retirement">Retirement</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div id="savings" class="collapse show">
                          <div class="card " style="width: 100%;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 ">
                                        <h5 class="card-title">Savings </h5>
                                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Porro cumque tempora quis numquam voluptates autem corporis harum dicta,
                                            odit cupiditate.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                  </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        <div id="earlycash" class="collapse">
                          <div class="card " style="width: 100%;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 ">
                                        <h5 class="card-title">Earlycash </h5>
                                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Porro cumque tempora quis numquam voluptates autem corporis harum dicta,
                                            odit cupiditate.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                  </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        <div id="children" class="collapse">
                          <div class="card " style="width: 100%;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 ">
                                        <h5 class="card-title">children </h5>
                                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Porro cumque tempora quis numquam voluptates autem corporis harum dicta,
                                            odit cupiditate.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                  </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        <div id="retirement" class="collapse ">
                          <div class="card " style="width: 100%;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 ">
                                        <h5 class="card-title">Retirement </h5>
                                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Porro cumque tempora quis numquam voluptates autem corporis harum dicta,
                                            odit cupiditate.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                  </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
        </div>

    </div>
</div>

{{-- best seller --}}
<div class="centeragain">
    <h2>Bestseller</h2>
</div>
<div class="container">

    <section>
  
        <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2 product-carousel" data-ride="carousel">
  
          <!--Controls-->
          <div class="controls-top my-3">
            <a class="btn-floating btn-sm" href="#carousel-example-multi" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
            <a class="btn-floating btn-sm" href="#carousel-example-multi" data-slide="next"><i class="fas fa-chevron-right"></i></a>
          </div>
          <!--/.Controls-->
  
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-multi" data-slide-to="1"></li>
            <li data-target="#carousel-example-multi" data-slide-to="2"></li>
            <li data-target="#carousel-example-multi" data-slide-to="3"></li>
            <li data-target="#carousel-example-multi" data-slide-to="4"></li>
            <li data-target="#carousel-example-multi" data-slide-to="5"></li>
            <li data-target="#carousel-example-multi" data-slide-to="6"></li>
            <li data-target="#carousel-example-multi" data-slide-to="7"></li>
            <li data-target="#carousel-example-multi" data-slide-to="8"></li>
          </ol>
          <!--/.Indicators-->
  
          <div class="carousel-inner" role="listbox">
  
            <div class="carousel-item active mx-auto">
              <div class="col-12 col-md-4 col-lg-2 mx-auto">
                <div class="card mb-2">
                  <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(4).jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <div class="card-body p-3">
                    <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Moda</h5>
                    <p class="aqua-sky-text mb-0">Plan B</p>
                    <ul class="list-unstyled list-inline my-2">
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt mimosa-text"></i></li>
                    </ul>
                    <p class="chili-pepper-text mb-0">9,99 $</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-12 col-md-4 col-lg-2 mx-auto">
                <div class="card mb-2">
                  <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(1).jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <div class="card-body p-3">
                    <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Indie City</h5>
                    <p class="aqua-sky-text mb-0">Pixies</p>
                    <ul class="list-unstyled list-inline my-2">
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="far fa-star mimosa-text"></i></li>
                    </ul>
                    <p class="chili-pepper-text mb-0">14,99 $</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-12 col-md-4 col-lg-2 mx-auto">
                <div class="card mb-2">
                  <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(7).jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <div class="card-body p-3">
                    <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Year</h5>
                    <p class="aqua-sky-text mb-0">Indielectru</p>
                    <ul class="list-unstyled list-inline my-2">
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                    </ul>
                    <p class="chili-pepper-text mb-0">12,99 $</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-12 col-md-4 col-lg-2 mx-auto">
                <div class="card mb-2">
                  <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(8).jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <div class="card-body p-3">
                    <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">L'Hiver Indien</h5>
                    <p class="aqua-sky-text mb-0">Baloji</p>
                    <ul class="list-unstyled list-inline my-2">
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt mimosa-text"></i></li>
                    </ul>
                    <p class="chili-pepper-text mb-0">10,99 $</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-12 col-md-4 col-lg-2 mx-auto">
                <div class="card mb-2">
                  <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(6).jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <div class="card-body p-3">
                    <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Indie Funk</h5>
                    <p class="aqua-sky-text mb-0">Generation Funk</p>
                    <ul class="list-unstyled list-inline my-2">
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                    </ul>
                    <p class="chili-pepper-text mb-0">19,99 $</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-12 col-md-4 col-lg-2 mx-auto">
                <div class="card mb-2">
                  <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(2).jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <div class="card-body p-3">
                    <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Rockferry</h5>
                    <p class="aqua-sky-text mb-0">Duffy</p>
                    <ul class="list-unstyled list-inline my-2">
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt mimosa-text"></i></li>
                    </ul>
                    <p class="chili-pepper-text mb-0">17,99 $</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-12 col-md-4 col-lg-2 mx-auto">
                <div class="card mb-2">
                  <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(3).jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <div class="card-body p-3">
                    <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Female Indie Pop</h5>
                    <p class="aqua-sky-text mb-0">Various artists</p>
                    <ul class="list-unstyled list-inline my-2">
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="far fa-star mimosa-text"></i></li>
                    </ul>
                    <p class="chili-pepper-text mb-0">9,99 $</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-12 col-md-4 col-lg-2 mx-auto">
                <div class="card mb-2">
                  <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(5).jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <div class="card-body p-3">
                    <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Rock 'N' Roll</h5>
                    <p class="aqua-sky-text mb-0">Chuck Berry</p>
                    <ul class="list-unstyled list-inline my-2">
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt mimosa-text"></i></li>
                    </ul>
                    <p class="chili-pepper-text mb-0">29,99 $</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-12 col-md-4 col-lg-2 mx-auto">
                <div class="card mb-2">
                  <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(9).jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <div class="card-body p-3">
                    <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">High Voltage</h5>
                    <p class="aqua-sky-text mb-0">AC/DC</p>
                    <ul class="list-unstyled list-inline my-2">
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                      <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i></li>
                    </ul>
                    <p class="chili-pepper-text mb-0">24,99 $</p>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
  
    </section>
  
  </div>
  {{-- News --}}
  <div class="centeragain">
      <h2>news & <strong>Events</strong></h2>
  </div>
  <div class="container">
  <div class="card bg-light mb-3" style="max-width: 100%;">
    <div class="card-body">
      <div class="row">
          <div class="col-md-7">
            <div class="card-group">
              <div class="card">
                <img class="card-img-top" src="http://127.0.0.1:8000/storage/news/{{$news[0]->image}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$news[0]->title}}</h5>

                  <a href="{{route('news.show',$news[0]->id)}}" class="btn btn-primary">view</a>
                  </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="http://127.0.0.1:8000/storage/news/{{$news[1]->image}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$news[1]->title}}</h5>
                  <a href="{{route('news.show',$news[1]->id)}}" class="btn btn-primary">view</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card" style="width: 100%;">
              <div class="card-header">
                Recent News
              </div>
              <table class="table">
                <tbody>
                  @foreach ($news as $item)
                  <tr>
                  <td><img src="http://127.0.0.1:8000/storage/news/{{$item->image}}" width="120px"height="70 px" alt=""></td>
                  <td class="text-center"><div class="p-2"><a href="{{route('news.show',$item->id)}}">{{$item->title}}</a></div></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>
      <div class="centeragain">
        <a href="{{route('news.index')}}" class="btn btn-primary">Go to Blog</a>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')
<script>
  $('.port-item').click(function(){
  $('.collapse').collapse('hide');
});
</script>

@endsection