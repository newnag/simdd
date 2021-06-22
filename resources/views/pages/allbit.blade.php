@extends('layouts.master')

@section('content')
<div class="homepage">
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

  <div class="head-bit container">
    <div class="title-bit"><p>กำลังจะหมดเวลา</p></div>

    <div class="bit-slide swiper-container">
      <div class="swiper-wrapper">
        @for ($i = 0; $i < 9; $i++)
          <div class="box swiper-slide">
            <div class="head-box">
              <p>เบอร์ประมูล</p>
              <div class="time">
                <i class="far fa-clock"></i>
                <p>00:00:25</p>
              </div>
            </div>

            <div class="body-box">
              <div class="ber">
                <img src="{{asset('img/dtac_logo.png')}}" alt="">
                <p>089-682-6459</p>
              </div>

              <div class="detail">
                <div class="sum grid">
                  <p>ผลรวม</p>
                  <p>29 : พลังความรุ่งเรืองสุขสมหวังทั้งความรักและเงินตรา</p>
                </div>
                <div class="grade grid">
                  <p>เกรด</p>
                  <div class="grade-box">
                    <p>A+</p>
                    <a href="" class="shop"><i class="fas fa-store"></i></a>
                    <div class="like"><i class="fas fa-heart"></i></div>
                  </div>
                </div>
                <div class="price grid">
                  <p>ราคาล่าสุด</p>
                  <p>9,000,000 THB</p>
                </div>
              </div>
            </div>
          </div>
        @endfor
      </div>

      <div class="swiper-pagination"></div>
    </div>

    <div class="pagi-slide-bit"></div>
  </div>

  <div class="slide1 swiper-container container">
    <div class="swiper-wrapper">
      @for ($i = 0; $i < 6; $i++)
        <div class="swiper-slide">
          <figure><img src="{{asset('img/pic1.png')}}" alt=""></figure>
          <div class="detail">
            <p class="title">เราคัดสรรเบอร์สวยเบอร์มงคลดีที่สุด ให้คุณได้เลือก</p>
            <p class="desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Consequuntur, corporis cumque? 
              Libero, 
              quos aspernatur quaerat nostrum sunt minus sed iusto? 
              Ipsa quas animi delectus consequuntur expedita quibusdam maxime inventore voluptatem?
            </p>
            <button class="form-component button bg">ดูเบอร์ทั้งหมด</button>
            <div class="social">
              <p>
                Social: 
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
                <a href=""><i class="fab fa-line"></i></a>
              </p>
            </div>
          </div>
        </div>
      @endfor
    </div>
    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev">Back</div>
    <div class="swiper-button-next">Next</div>
  </div>

  <div class="bitber grid-box container" id="bitber">
    <div class="head">
      <div class="title">
        <h2>ประมูลเบอร์</h2>
        <p>ดูเบอร์ประมูลทั้งหมด 524</p>
      </div>
      <button class="form-component button bg"><a href="">ทั้งหมด</a></button>
    </div>
    <div class="grid-ber">
      <div class="item">
        <div class="time timeup">
          <i class="far fa-clock"></i>
          <p>00:00:25</p>
        </div>

        <div class="ber">
          <figure class="logober"><img src="{{asset('img/dtaclogo.png')}}" alt=""></figure>
          <h3><a href="">083-682-6459</a></h3>
        </div>

        <div class="detail">
          <div class="sum grid">
            <p>ผลรวม</p>
            <p>
              29 : พลังความรุ่งเรืองสุขสมหวังทั้งความรักและเงินตรา
            </p>
          </div>
          <div class="grade-ber grid">
            <p>เกรด</p>
            <div class="icon">
              <div class="grade">A+</div>
              <div class="store"><a href=""><i class="fas fa-store"></i></a></div>
              <div class="like"><i class="fas fa-heart"></i></div>
            </div>
          </div>
          <div class="price grid">
            <p>ราคาล่าสุด</p>
            <p>9,000,000 THB</p>
          </div>
        </div>
      </div>

      @for ($i = 0; $i < 50; $i++)
        <div class="item">
          <div class="time">
            <i class="far fa-clock"></i>
            <p>01:00:25</p>
          </div>

          <div class="ber">
            <figure class="logober"><img src="{{asset('img/truelogo.png')}}" alt=""></figure>
            <h3><a href="">083-682-6459</a></h3>
          </div>

          <div class="detail">
            <div class="sum grid">
              <p>ผลรวม</p>
              <p>
                29 : พลังความรุ่งเรืองสุขสมหวังทั้งความรักและเงินตรา
              </p>
            </div>
            <div class="grade-ber grid">
              <p>เกรด</p>
              <div class="icon">
                <div class="grade">A</div>
                <div class="store"><a href=""><i class="fas fa-store"></i></a></div>
                <div class="unlike"><i class="fas fa-heart"></i></div>
              </div>
            </div>
            <div class="price grid">
              <p>ราคาล่าสุด</p>
              <p>9,000,000 THB</p>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="time">
            <i class="far fa-clock"></i>
            <p>01:00:25</p>
          </div>

          <div class="ber">
            <figure class="logober"><img src="{{asset('img/aislogo.png')}}" alt=""></figure>
            <h3><a href="">083-682-6459</a></h3>
          </div>

          <div class="detail">
            <div class="sum grid">
              <p>ผลรวม</p>
              <p>
                29 : พลังความรุ่งเรืองสุขสมหวังทั้งความรักและเงินตรา
              </p>
            </div>
            <div class="grade-ber grid">
              <p>เกรด</p>
              <div class="icon">
                <div class="grade">A</div>
                <div class="store"><a href=""><i class="fas fa-store"></i></a></div>
                <div class="unlike"><i class="fas fa-heart"></i></div>
              </div>
            </div>
            <div class="price grid">
              <p>ราคาล่าสุด</p>
              <p>9,000,000 THB</p>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="time">
            <i class="far fa-clock"></i>
            <p>01:00:25</p>
          </div>

          <div class="ber">
            <figure class="logober"><img src="{{asset('img/truelogo.png')}}" alt=""></figure>
            <h3><a href="">083-682-6459</a></h3>
          </div>

          <div class="detail">
            <div class="sum grid">
              <p>ผลรวม</p>
              <p>
                29 : พลังความรุ่งเรืองสุขสมหวังทั้งความรักและเงินตรา
              </p>
            </div>
            <div class="grade-ber grid">
              <p>เกรด</p>
              <div class="icon">
                <div class="grade">A</div>
                <div class="store"><a href=""><i class="fas fa-store"></i></a></div>
                <div class="unlike"><i class="fas fa-heart"></i></div>
              </div>
            </div>
            <div class="price grid">
              <p>ราคาล่าสุด</p>
              <p>9,000,000 THB</p>
            </div>
          </div>
        </div>
      @endfor
    </div>
    <div class="pagination">
      <div class="prev"><a href=""><i class="fas fa-chevron-left"></i></a></div>
      <ul class="page">
        <a href=""><li class="current">1</li></a>
        <a href=""><li>2</li></a>
        <a href=""><li>3</li></a>
        <a href=""><li>4</li></a>
        <a href=""><li>5</li></a>
        <a href=""><li>...</li></a>
        <a href=""><li>8</li></a>
        <a href=""><li>9</li></a>
        <a href=""><li>10</li></a>
        <a href=""><li>11</li></a>
        <a href=""><li>12</li></a>
      </ul>
      <div class="next"><a href=""><i class="fas fa-chevron-right"></i></a></div>
    </div>
  </div>

  <div class="slide3 swiper-container container">
    <div class="swiper-wrapper">
      @for ($i = 0; $i < 6; $i++)
        <div class="swiper-slide">
          <figure><img src="{{asset('img/pic1.png')}}" alt=""></figure>
          <div class="detail">
            <p class="title">เราคัดสรรเบอร์สวยเบอร์มงคลดีที่สุด ให้คุณได้เลือก</p>
            <p class="desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Consequuntur, corporis cumque? 
              Libero, 
              quos aspernatur quaerat nostrum sunt minus sed iusto? 
              Ipsa quas animi delectus consequuntur expedita quibusdam maxime inventore voluptatem?
            </p>
            <button class="form-component button bg">ดูเบอร์ทั้งหมด</button>
            <div class="social">
              <p>
                Social: 
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
                <a href=""><i class="fab fa-line"></i></a>
              </p>
            </div>
          </div>
        </div>
      @endfor
    </div>
    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev">Back</div>
    <div class="swiper-button-next">Next</div>
  </div>

  <div class="article">
    <h2>บทความ</h2>

    <div class="article-slide swiper-container container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="">
            <div class="box">
              <figure><img src="{{asset('img/article1.png')}}" alt=""></figure>
              <div class="detail">
                <div class="menu-bar">
                  <div class="left">
                    <div class="like"><i class="fas fa-heart"></i></div>
                    <div class="share"><i class="fas fa-share-alt"></i></div>
                  </div>
                  <div class="right">
                    <div class="date">25/06/2021</div>
                  </div>
                </div>

                <div class="name">
                  <figure><img src="{{asset('img/p4.jpg')}}" alt=""></figure>
                  <span>Hanekawa</span>
                </div>

                <div class="title">
                  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod commodi unde eius. Repellendus quasi sequi tempore, quidem numquam, animi corrupti laboriosam deserunt placeat accusamus dolorem in debitis! Exercitationem, quos recusandae.</h3>
                </div>

                <p class="desc">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  Corporis, dolore molestiae! Enim,
                  magnam possimus reiciendis facilis quod, 
                  doloribus quaerat saepe, aut quasi cum modi ex dolores perferendis porro sit ut.
                </p>
              </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="">
            <div class="box">
              <figure><img src="{{asset('img/article2.png')}}" alt=""></figure>
              <div class="detail">
                <div class="menu-bar">
                  <div class="left">
                    <div class="like"><i class="fas fa-heart"></i></div>
                    <div class="share"><i class="fas fa-share-alt"></i></div>
                  </div>
                  <div class="right">
                    <div class="date">25/06/2021</div>
                  </div>
                </div>

                <div class="name">
                  <figure><img src="{{asset('img/p4.jpg')}}" alt=""></figure>
                  <span>Hanekawa</span>
                </div>

                <div class="title">
                  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod commodi unde eius. Repellendus quasi sequi tempore, quidem numquam, animi corrupti laboriosam deserunt placeat accusamus dolorem in debitis! Exercitationem, quos recusandae.</h3>
                </div>

                <p class="desc">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  Corporis, dolore molestiae! Enim,
                  magnam possimus reiciendis facilis quod, 
                  doloribus quaerat saepe, aut quasi cum modi ex dolores perferendis porro sit ut.
                </p>
              </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="">
            <div class="box">
              <figure><img src="{{asset('img/article3.png')}}" alt=""></figure>
              <div class="detail">
                <div class="menu-bar">
                  <div class="left">
                    <div class="like"><i class="fas fa-heart"></i></div>
                    <div class="share"><i class="fas fa-share-alt"></i></div>
                  </div>
                  <div class="right">
                    <div class="date">25/06/2021</div>
                  </div>
                </div>

                <div class="name">
                  <figure><img src="{{asset('img/p4.jpg')}}" alt=""></figure>
                  <span>Hanekawa</span>
                </div>

                <div class="title">
                  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod commodi unde eius. Repellendus quasi sequi tempore, quidem numquam, animi corrupti laboriosam deserunt placeat accusamus dolorem in debitis! Exercitationem, quos recusandae.</h3>
                </div>

                <p class="desc">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  Corporis, dolore molestiae! Enim,
                  magnam possimus reiciendis facilis quod, 
                  doloribus quaerat saepe, aut quasi cum modi ex dolores perferendis porro sit ut.
                </p>
              </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="">
            <div class="box">
              <figure><img src="{{asset('img/article4.png')}}" alt=""></figure>
              <div class="detail">
                <div class="menu-bar">
                  <div class="left">
                    <div class="like"><i class="fas fa-heart"></i></div>
                    <div class="share"><i class="fas fa-share-alt"></i></div>
                  </div>
                  <div class="right">
                    <div class="date">25/06/2021</div>
                  </div>
                </div>

                <div class="name">
                  <figure><img src="{{asset('img/p4.jpg')}}" alt=""></figure>
                  <span>Hanekawa</span>
                </div>

                <div class="title">
                  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod commodi unde eius. Repellendus quasi sequi tempore, quidem numquam, animi corrupti laboriosam deserunt placeat accusamus dolorem in debitis! Exercitationem, quos recusandae.</h3>
                </div>

                <p class="desc">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  Corporis, dolore molestiae! Enim,
                  magnam possimus reiciendis facilis quod, 
                  doloribus quaerat saepe, aut quasi cum modi ex dolores perferendis porro sit ut.
                </p>
              </div>
            </div>
          </a>
        </div>

        @for ($i = 0; $i < 2; $i++)
          <div class="swiper-slide">
            <a href="">
              <div class="box">
                <figure><img src="{{asset('img/article1.png')}}" alt=""></figure>
                <div class="detail">
                  <div class="menu-bar">
                    <div class="left">
                      <div class="like"><i class="fas fa-heart"></i></div>
                      <div class="share"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="right">
                      <div class="date">25/06/2021</div>
                    </div>
                  </div>

                  <div class="name">
                    <figure><img src="{{asset('img/p4.jpg')}}" alt=""></figure>
                    <span>Hanekawa</span>
                  </div>

                  <div class="title">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod commodi unde eius. Repellendus quasi sequi tempore, quidem numquam, animi corrupti laboriosam deserunt placeat accusamus dolorem in debitis! Exercitationem, quos recusandae.</h3>
                  </div>

                  <p class="desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Corporis, dolore molestiae! Enim,
                    magnam possimus reiciendis facilis quod, 
                    doloribus quaerat saepe, aut quasi cum modi ex dolores perferendis porro sit ut.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="">
              <div class="box">
                <figure><img src="{{asset('img/article2.png')}}" alt=""></figure>
                <div class="detail">
                  <div class="menu-bar">
                    <div class="left">
                      <div class="like"><i class="fas fa-heart"></i></div>
                      <div class="share"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="right">
                      <div class="date">25/06/2021</div>
                    </div>
                  </div>

                  <div class="name">
                    <figure><img src="{{asset('img/p4.jpg')}}" alt=""></figure>
                    <span>Hanekawa</span>
                  </div>

                  <div class="title">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod commodi unde eius. Repellendus quasi sequi tempore, quidem numquam, animi corrupti laboriosam deserunt placeat accusamus dolorem in debitis! Exercitationem, quos recusandae.</h3>
                  </div>

                  <p class="desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Corporis, dolore molestiae! Enim,
                    magnam possimus reiciendis facilis quod, 
                    doloribus quaerat saepe, aut quasi cum modi ex dolores perferendis porro sit ut.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="">
              <div class="box">
                <figure><img src="{{asset('img/article3.png')}}" alt=""></figure>
                <div class="detail">
                  <div class="menu-bar">
                    <div class="left">
                      <div class="like"><i class="fas fa-heart"></i></div>
                      <div class="share"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="right">
                      <div class="date">25/06/2021</div>
                    </div>
                  </div>

                  <div class="name">
                    <figure><img src="{{asset('img/p4.jpg')}}" alt=""></figure>
                    <span>Hanekawa</span>
                  </div>

                  <div class="title">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod commodi unde eius. Repellendus quasi sequi tempore, quidem numquam, animi corrupti laboriosam deserunt placeat accusamus dolorem in debitis! Exercitationem, quos recusandae.</h3>
                  </div>

                  <p class="desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Corporis, dolore molestiae! Enim,
                    magnam possimus reiciendis facilis quod, 
                    doloribus quaerat saepe, aut quasi cum modi ex dolores perferendis porro sit ut.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="">
              <div class="box">
                <figure><img src="{{asset('img/article4.png')}}" alt=""></figure>
                <div class="detail">
                  <div class="menu-bar">
                    <div class="left">
                      <div class="like"><i class="fas fa-heart"></i></div>
                      <div class="share"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="right">
                      <div class="date">25/06/2021</div>
                    </div>
                  </div>

                  <div class="name">
                    <figure><img src="{{asset('img/p4.jpg')}}" alt=""></figure>
                    <span>Hanekawa</span>
                  </div>

                  <div class="title">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod commodi unde eius. Repellendus quasi sequi tempore, quidem numquam, animi corrupti laboriosam deserunt placeat accusamus dolorem in debitis! Exercitationem, quos recusandae.</h3>
                  </div>

                  <p class="desc">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Corporis, dolore molestiae! Enim,
                    magnam possimus reiciendis facilis quod, 
                    doloribus quaerat saepe, aut quasi cum modi ex dolores perferendis porro sit ut.
                  </p>
                </div>
              </div>
            </a>
          </div>
        @endfor
      </div>

      <div class="swiper-button-prev">Back</div>
      <div class="swiper-button-next">Next</div>
    </div>

    <div class="button-all-article">
      <button class="form-component button bg"><a href="">บทความทั้งหมด</a></button>
    </div>

    <div class="bg"><img src="{{asset('img/backgroup-article.png')}}" alt=""></div>
  </div>

  <div class="package container">
    <div class="head"><div class="title"><h2>โปรโมชั่นเน็ต โทร แต่ละเครือข่าย</h2></div></div>

    <div class="select-brand">
      <div class="item">
        <figure><img src="{{asset('img/ais_logo.png')}}" alt=""></figure>
        <button class="form-component button active">AIS</button>
      </div>

      @for ($i = 0; $i < 4; $i++)
        <div class="item">
          <figure><img src="{{asset('img/dtac_logo.png')}}" alt=""></figure>
          <button class="form-component button">Dtac</button>
        </div>

        <div class="item">
          <figure><img src="{{asset('img/true_logo.png')}}" alt=""></figure>
          <button class="form-component button">True</button>
        </div>
      @endfor
      
    </div>

    <div class="select-type-package">
      <p>เลือกแพ็คเกจ</p>
      <div class="select">
        <div class="select-button" onclick="swif_package(this,'left')">เติมเงิน</div>
        <div class="select-button active" onclick="swif_package(this,'right')">รายเดือน</div>
        <div class="bg"></div>
      </div>
    </div>

    <div class="name-package">
      <p>Dtac : รายเดือน</p>
    </div>

    <div class="package-slide swiper-container">
      <div class="swiper-wrapper">
        @for ($i = 0; $i < 8; $i++)
        <div class="swiper-slide">
          <div class="box">
            <div class="title">
              <p>Internet Booster 50GB</p>
              <p>นาน 30 วัน</p>
            </div>

            <div class="detail">
              <div class="price">
                <span>฿349</span>
                <span>/เดือน</span>
              </div>

              <div class="content">
                <p>50GB เน็ตความเร็วสูงสุด</p>
                <p>โทรฟรีในเครือข่าย 24 ชม.</p>
                <p>โทรนอกเครือข่าย 1,000 นาที</p>
                <p>ฟรี Youtube Premium 3 เดือน</p>
                <p>เกม ROV / Free Fire ไม่เสียค่าเน็ต</p>
                <p>Google Meet / Zoom ไม่เสียค่าเน็ต</p>
                <p>อื่นๆ</p>
              </div>

              <div class="button"><button class="form-component button bg">สมัครแพ็คเกจ</button></div>
            </div>

            <div class="bg"><img src="{{asset('img/dtac-bg.png')}}" alt=""></div>
          </div>
        </div>
        @endfor
      </div>

      <div class="swiper-button-prev">Back</div>
      <div class="swiper-button-next">Next</div>
    </div>
  </div>
</div>
@endsection

@push('style')
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{asset('css/home.min.css')}}">
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

    const slide1 = new Swiper('.slide1', {
      loop: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    const slide3 = new Swiper('.slide3', {
      loop: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    const bit_slide = new Swiper('.bit-slide', {
      loop: true,
      autoplay: {
        delay: 5000,
      },
      slidesPerView: 1,
      spaceBetween: 10,
      breakpoints: {
        1280:{
          slidesPerView: 3,
          spaceBetween: 10
        },
        1536:{
          slidesPerView: 3,
          spaceBetween: 60
        },
      },
      pagination: {
        el: '.pagi-slide-bit',
      },
    });

    const article_slide = new Swiper('.article .article-slide', {
      slidesPerView: 1,
      spaceBetween: 10,
      breakpoints: {
        1280:{
          slidesPerView: 3,
          spaceBetween: 30
        },
        1536:{
          slidesPerView: 4,
          spaceBetween: 30
        },
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    const package_slide = new Swiper('.package .package-slide', {
      slidesPerView: 1,
      spaceBetween: 10,
      breakpoints: {
        1280:{
          slidesPerView: 3,
          spaceBetween: 10
        },
        1536:{
          slidesPerView: 4,
          spaceBetween: 50,
        },
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    ///////////////////////////////////////////

    // ฟังก์ชั่นกดปุ่มเบอร์ที่ชอบไม่ชอบ
    function click_likenum(that){
      that.classList.toggle('active')
    }

    // ฟังก์ชั่นกดปุ่มเลื่อน filter
    function swif_filter(that,dir){
      let element = that.closest('.filter').querySelector('.bg')
      if(dir === "left"){
        element.classList.remove('swif')
      }
      else if(dir === "right"){
        element.classList.add('swif')
      }
      else{
        console.error('Missing parametor dir');
      }
    }

    function select_filter_mean(that,dir){
      let element = that.closest('.filter-type').querySelector('.bg')
      if(dir === "left"){
        element.classList.remove('right')
      }
      else if(dir === "right"){
        element.classList.add('right')
      }
      else{
        console.error('Missing parametor dir');
      }
    }

    function select_mean(that){
      that.classList.toggle('active')
    }

    // ฟังก์ชั่นกดปุ่มเลื่อน package
    function swif_package(that,dir){
      let element = that.closest('.select').querySelector('.bg')

      that.closest('.select').querySelectorAll('.select-button').forEach(Element => {
        Element.classList.remove('active')
      });
      that.classList.add('active')

      if(dir === "left"){
        element.classList.add('left')
      }
      else if(dir === "right"){
        element.classList.remove('left')
      }
      else{
        console.error('Missing parametor dir');
      }
    }
  </script>
@endpush