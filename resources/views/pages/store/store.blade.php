@extends('layouts.master')

@section('content')
  <div class="storepage">
    <div class="banner swiper-container">
      <div class="swiper-wrapper">
        @for ($i = 0; $i < 5; $i++)
          <div class="swiper-slide">
            <figure><img src="{{asset('img/slide.png')}}" alt=""></figure>
          </div>
        @endfor
      </div>

      <div class="swiper-pagination"></div>
    </div>

    <div class="breadcrumb">
      <p>หน้าแรก</p>
      <p>/</p>
      <p>ร้านค้าทั้งหมด</p>
    </div>

    <div class="container head-page-margin">
      <div class="head-page">
          <h3 class="top-head">ร้านค้าแนะนำ</h3>
      </div>
      <div class="swiper-container mySwiper">
          <div class="swiper-wrapper">
            @for ($i = 0; $i < 6; $i++)
              <div class="swiper-slide">
                <div class="col-6 col-pad">
                    <div class="card color-gradian">
                        <div class="container" style="background-image: url('{{asset("img/Background.png")}}'); background-size: cover; border-radius: 3px;">
                            <div class="row flex-content m-b-3">
                                <div class="col-5 flex-content">
                                    <div class="img-con">
                                        <img src="img/p4.jpg" alt="" class="img-store">
                                    </div>
                                    <div class="name-con">
                                        <h6 class="font-bold">Evan Lee</h6>
                                        <p>59 เบอร์</p>
                                        <p>20k</p>
                                        <p>จ.ขอนแก่น</p>
                                    </div>
                                </div>
                                <div class="col-7 flex-content">
                                    <div class="rating flex-content">
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star_half</span>
                                        <span class="material-icons">star_outline</span>
                                        <p>4.8</p>
                                        <i class="fas fa-crown"></i>
                                    </div>
                                    <div class="action-con flex-content">
                                        <a href="" class="btn-ac">Pro</a>
                                        <a href="" class="flex-content btn-ac"><i class="fas fa-user-plus"></i></i><p>Follow</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-content">
                                <div  class="op m-b-1">
                                    <img src="img/dtac_logo.png" alt="">
                                    <p>Dtac</p>
                                </div>
                                <div  class="op">
                                    <img src="img/true_logo.png" alt="">
                                    <p>True move</p>
                                </div>
                                <div  class="op">
                                    <img src="img/ais_logo.png" alt="">
                                    <p>AIS</p>
                                </div>
                                <div  class="op">
                                    <img src="img/mu_logo.png" alt="">
                                    <p>Line mobile</p>
                                </div>
                                <div  class="op">
                                    <img src="img/tot_logo.png" alt="">
                                    <p>TOT</p>
                                </div>
                                <div  class="op">
                                    <img src="img/Group 915.png" alt="">
                                    <p>Penguin</p>
                                </div>
                                <div  class="op">
                                    <img src="img/mu_logo.png" alt="">
                                    <p>Mybycat</p>
                                </div>
                                <div  class="op">
                                    <img src="img/Group 917.png" alt="">
                                    <p>Myworld</p>
                                </div>
                                <div  class="op">
                                    <img src="img/Group 916.png" alt="">
                                    <p>imobile</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-pad">
                    <div class="card color-gradian">
                        <div class="container" style="background-image: url('img/Background.png'); background-size: cover; border-radius: 3px;">
                            <div class="row flex-content m-b-3">
                                <div class="col-5 flex-content">
                                    <div class="img-con">
                                        <img src="img/p4.jpg" alt="" class="img-store">
                                    </div>
                                    <div class="name-con">
                                        <h6 class="font-bold">Evan Lee</h6>
                                        <p>59 เบอร์</p>
                                        <p>20k</p>
                                        <p>จ.ขอนแก่น</p>
                                    </div>
                                </div>
                                <div class="col-7 flex-content">
                                    <div class="rating flex-content">
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star</span>
                                        <span class="material-icons">star_half</span>
                                        <span class="material-icons">star_outline</span>
                                        <p>4.8</p>
                                        <i class="fas fa-crown"></i>
                                    </div>
                                    <div class="action-con flex-content">
                                        <a href="" class="btn-ac">Pro</a>
                                        <a href="" class="flex-content btn-ac"><i class="fas fa-user-plus"></i></i><p>Follow</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-content">
                                <div  class="op m-b-1">
                                    <img src="img/dtac_logo.png" alt="">
                                    <p>Dtac</p>
                                </div>
                                <div  class="op">
                                    <img src="img/true_logo.png" alt="">
                                    <p>True move</p>
                                </div>
                                <div  class="op">
                                    <img src="img/ais_logo.png" alt="">
                                    <p>AIS</p>
                                </div>
                                <div  class="op">
                                    <img src="img/mu_logo.png" alt="">
                                    <p>Line mobile</p>
                                </div>
                                <div  class="op">
                                    <img src="img/tot_logo.png" alt="">
                                    <p>TOT</p>
                                </div>
                                <div  class="op">
                                    <img src="img/Group 915.png" alt="">
                                    <p>Penguin</p>
                                </div>
                                <div  class="op">
                                    <img src="img/mu_logo.png" alt="">
                                    <p>Mybycat</p>
                                </div>
                                <div  class="op">
                                    <img src="img/Group 917.png" alt="">
                                    <p>Myworld</p>
                                </div>
                                <div  class="op">
                                    <img src="img/Group 916.png" alt="">
                                    <p>imobile</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            @endfor
          </div> 
      </div>
      <div class="control">
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
      </div>
      <div class="row flex-content">
          <div class="col-6">
            <div class="p-5">
              <img src="{{asset('img/pic3.png')}}" alt="">
            </div>
          </div>
          <div class="col-6 p-t-r-5">
              <h2>รวมร้านค้าเบอร์คุณภาพมากมาย 
                <br>ให้คุณได้เลือก กว่า 1,500 รานค้า</h2>
              <p class="m-t-2">123456789</p>
              <div class="m-t-4 flex-content social">
                <p>social :</p>
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-line"></i></a>
              </div>
          </div>
      </div>
      <div class="head-page flex-content justify-be w-100">
        <div class="flex-content w-100">
          <h3 class="content-head">ร้านค้าทั้งหมด</h3>
          <p class="w-10 count-s"><i class="">1,500 ร้านค้า</i></p>
        </div>
        <div class="con-btn">
          <a href="#" class="btn-filter"><i class="fas fa-filter"></i>Filter</a>
        </div>
      </div>
      <div class="paginate m-t-1">
        <i class="fas fa-chevron-left m-r-1"></i>
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">4</a>
        <a href="">5</a>
        <p class="m-r-1 m-l-1">...</p>
        <a href="">52</a>
        <a href="">53</a>
        <a href="">54</a>
        <a href="">56</a>
        <a href="">57</a>
        <i class="fas fa-chevron-right m-l-1"></i>
      </div>
      <div class="container">
        @for ($i = 0; $i < 5; $i++)
        <div class="row flex-content">
          <div class="col-3">
            <div class="card">
              <div class="container" style="background-image: url('img/Background.png'); background-size: cover; border-radius: 3px;">
                <div class="flex-content">
                  <div class="img-con m-t-4">
                      <img src="img/p4.jpg" alt="" class="img-store">
                  </div>
                  <div class="name-store m-t-4">
                      <h6 class="font-bold">Evan Lee</h6>
                      <div class="flex-content">
                        <p>59 เบอร์</p>
                        <div class="rating flex-content">
                          <span class="material-icons">star</span>
                          <span class="material-icons">star</span>
                          <span class="material-icons">star</span>
                          <span class="material-icons">star_half</span>
                          <span class="material-icons">star_outline</span>
                          <p>4.8</p>
                        </div>
                      </div>
                      <div class="action-con flex-content">
                        <a href="" class="btn-ac">Pro</a>
                        <a href="" class="flex-content btn-ac"><i class="fas fa-user-check"></i></i><p>Follow</p></a>
                        <p>20k</p>
                        <i class="fas fa-crown"></i>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3">
            <a href="">
              <div class="card">
                <div class="container" style="background-image: url('img/Background.png'); background-size: cover; border-radius: 3px;">
                  <div class="flex-content">
                    <div class="img-con m-t-4">
                        <img src="img/p4.jpg" alt="" class="img-store">
                    </div>
                    <div class="name-store m-t-4">
                        <h6 class="font-bold">Evan Lee</h6>
                        <div class="flex-content">
                          <p>59 เบอร์</p>
                          <div class="rating flex-content">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star_half</span>
                            <span class="material-icons">star_outline</span>
                            <p>4.8</p>
                          </div>
                        </div>
                        <div class="action-con flex-content">
                          <a href="" class="btn-ac">Pro</a>
                          <a href="" class="flex-content btn-ac"><i class="fas fa-user-check"></i></i><p>Follow</p></a>
                          <p>20k</p>
                          <i class="fas fa-crown"></i>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-3">
            <a href="">
              <div class="card">
                <div class="container" style="background-image: url('img/Background.png'); background-size: cover; border-radius: 3px;">
                  <div class="flex-content">
                    <div class="img-con m-t-4">
                        <img src="img/p4.jpg" alt="" class="img-store">
                    </div>
                    <div class="name-store m-t-4">
                        <h6 class="font-bold">Evan Lee</h6>
                        <div class="flex-content">
                          <p>59 เบอร์</p>
                          <div class="rating flex-content">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star_half</span>
                            <span class="material-icons">star_outline</span>
                            <p>4.8</p>
                          </div>
                        </div>
                        <div class="action-con flex-content">
                          <a href="" class="btn-ac">Pro</a>
                          <a href="" class="flex-content btn-ac"><i class="fas fa-user-check"></i></i><p>Follow</p></a>
                          <p>20k</p>
                          <i class="fas fa-crown"></i>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-3">
            <a href="">
              <div class="card">
                <div class="container" style="background-image: url('img/Background.png'); background-size: cover; border-radius: 3px;">
                  <div class="flex-content">
                    <div class="img-con m-t-4">
                        <img src="img/p4.jpg" alt="" class="img-store">
                    </div>
                    <div class="name-store m-t-4">
                        <h6 class="font-bold">Evan Lee</h6>
                        <div class="flex-content">
                          <p>59 เบอร์</p>
                          <div class="rating flex-content">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star_half</span>
                            <span class="material-icons">star_outline</span>
                            <p>4.8</p>
                          </div>
                        </div>
                        <div class="action-con flex-content">
                          <a href="" class="btn-ac">Pro</a>
                          <a href="" class="flex-content btn-ac"><i class="fas fa-user-check"></i></i><p>Follow</p></a>
                          <p>20k</p>
                          <i class="fas fa-crown"></i>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-3">
            <a href="">
              <div class="card">
                <div class="container" style="background-image: url('img/Background.png'); background-size: cover; border-radius: 3px;">
                  <div class="flex-content">
                    <div class="img-con m-t-4">
                        <img src="img/p4.jpg" alt="" class="img-store">
                    </div>
                    <div class="name-store m-t-4">
                        <h6 class="font-bold">Evan Lee</h6>
                        <div class="flex-content">
                          <p>59 เบอร์</p>
                          <div class="rating flex-content">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star_half</span>
                            <span class="material-icons">star_outline</span>
                            <p>4.8</p>
                          </div>
                        </div>
                        <div class="action-con flex-content">
                          <a href="" class="btn-ac">Pro</a>
                          <a href="" class="flex-content btn-ac"><i class="fas fa-user-check"></i></i><p>Follow</p></a>
                          <p>20k</p>
                          <i class="fas fa-crown"></i>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        @endfor
      </div>
      <div class="paginate m-t-1">
        <i class="fas fa-chevron-left m-r-1"></i>
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">4</a>
        <a href="">5</a>
        <p class="m-r-1 m-l-1">...</p>
        <a href="">52</a>
        <a href="">53</a>
        <a href="">54</a>
        <a href="">56</a>
        <a href="">57</a>
        <i class="fas fa-chevron-right m-l-1"></i>
      </div>
    </div>
  </div>
@endsection


@push('style')
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{asset('css/store.min.css')}}">
@endpush

@push('script')
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script async>
    ////////////////////////////////////////////
    // slide
    const homeslide = new Swiper('.banner', {
      loop: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });

    const shopslide = new Swiper('.mySwiper', {
      loop: true,
      autoplay: {
        delay: 5000,
      },
      navigation: {
        nextEl: '.control .swiper-button-next',
        prevEl: '.control .swiper-button-prev',
      },
    });
  </script>
@endpush