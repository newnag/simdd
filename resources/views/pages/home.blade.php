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

    <div class="search-zone container">
      <div class="search-head">
        <div class="left">
          <p class="active">ค้นหาเบอร์</p>
          <p>เบอร์จากความหมาย <label class="number">74</label></p>
          <p>ทำนายเบอร์</p>
        </div>
        <div class="right">
          <div class="manual">คู่มือการใช้งานค้นหาเบอร์ <i class="fas fa-book"></i></div>
        </div>
      </div>
      <div class="search-box hidden">
        <div class="ber-interest box-border">
          <div class="left">
            <p><i class="fas fa-sim-card"></i> ค้นหาเบอร์ที่คุณสนใจ</p>
            <p class="sub">กรอกหมายเลขเบอร์ที่คุณสนใจให้ครบถ้วน</p>
          </div>
          <div class="right">
            <div class="input-ber">
              <input type="number" class="num" id="num1">
              <input type="number" class="num" id="num2">
              <input type="number" class="num" id="num3">
              <div class="keed"></div>
              <input type="number" class="num" id="num4">
              <input type="number" class="num" id="num5">
              <input type="number" class="num" id="num6">
              <div class="keed"></div>
              <input type="number" class="num" id="num7">
              <input type="number" class="num" id="num8">
              <input type="number" class="num" id="num9">
              <input type="number" class="num" id="num10">
            </div>
            <div class="random-ber">
              <button class="form-component button bg"><i class="fas fa-sync-alt"></i> สุ่มหมายเลข</button>
            </div>
          </div>
        </div>

        <div class="berlike-unlike box-border">
          <div class="left">
            <p class="blue"><i class="fas fa-heart"></i> หมายเลขที่คุณชื่นชอบ</p>
            <p class="sub">เลือกตัวเลขที่คุณชื่นชอบ</p>
            <p class="yellow"><i class="fas fa-heart-broken"></i> หมายเลขที่คุณไม่ชอบ</p>
            <p class="sub">เลือกตัวเลขที่คุณไม่ชอบ</p>
          </div>
          <div class="right">
            <div class="input-ber like">
              <div class="num" onclick="click_likenum(this)">0</div>
              <div class="num" onclick="click_likenum(this)">1</div>
              <div class="num" onclick="click_likenum(this)">2</div>
              <div class="num" onclick="click_likenum(this)">3</div>
              <div class="num" onclick="click_likenum(this)">4</div>
              <div class="num" onclick="click_likenum(this)">5</div>
              <div class="num" onclick="click_likenum(this)">6</div>
              <div class="num" onclick="click_likenum(this)">7</div>
              <div class="num" onclick="click_likenum(this)">8</div>
              <div class="num" onclick="click_likenum(this)">9</div>
            </div>
            <div class="input-ber unlike">
              <div class="num" onclick="click_likenum(this)">0</div>
              <div class="num" onclick="click_likenum(this)">1</div>
              <div class="num" onclick="click_likenum(this)">2</div>
              <div class="num" onclick="click_likenum(this)">3</div>
              <div class="num" onclick="click_likenum(this)">4</div>
              <div class="num" onclick="click_likenum(this)">5</div>
              <div class="num" onclick="click_likenum(this)">6</div>
              <div class="num" onclick="click_likenum(this)">7</div>
              <div class="num" onclick="click_likenum(this)">8</div>
              <div class="num" onclick="click_likenum(this)">9</div>
            </div>
          </div>
        </div>

        <div class="ber-cate box-border">
          <div class="left">
            <p><i class="fas fa-chart-pie"></i> หมวดหมู่เบอร์</p>
            <p class="sub">เบอร์มงคลเสริมบารมี,เบอร์มงคลเสริมโชคลาภ,และเบอร์อื่นๆอีกมากมาย</p>
          </div>
          <div class="right">
            <div class="cate-select">
              <select name="" id="" class="form-component select" placeholder="กรุณาเลือกหมวดหมู่เบอร์">
                @for ($i = 0; $i < 10; $i++)
                  <option value="">หมวดหมู่{{$i}}</option>
                @endfor
              </select>
            </div>
          </div>
        </div>

        <div class="range-price box-border">
          <div class="left">
            <p><i class="fas fa-dollar-sign"></i> ช่วงราคา</p>
            <p class="sub">เลือกช่วงราคาที่คุณต้องการ เพื่อง่ายต่อการค้นหา</p>
          </div>
          <div class="right">
            <div class="price">
              <div class="input-box" data-cur="THB">
                <input type="number" class="form-component input" placeholder="900">
              </div>
              <div class="keed"></div>
              <div class="input-box" data-cur="THB">
                <input type="number" class="form-component input" placeholder="9,000,000">
              </div>
            </div>
            <div class="filter">
              <div class="select-button" onclick="swif_filter(this,'left')">น้อยไปมาก</div>
              <div class="select-button" onclick="swif_filter(this,'right')">มากไปน้อย</div>
              <div class="bg"></div>
            </div>
          </div>
        </div>

        <div class="ber-sum box-border">
          <div class="left">
            <p><i class="fas fa-calculator"></i> ผลรวม</p>
            <p class="sub">พลังเสริมขอเบอร์ยิ่งผลรวมเยอะพลังยิ่งยอดเยี่ยม</p>
          </div>
          <div class="right">
            <div class="sum-select">
              <select name="" id="" class="form-component select" placeholder="กรุณาเลือกผลรวม">
                @for ($i = 0; $i < 10; $i++)
                  <option value="">{{$i}} : พลังแห่งความสำเร็จจากความมุ่นมั่น</option>
                @endfor
              </select>
            </div>
          </div>
        </div>

        <div class="brand-ber box-border">
          <div class="left">
            <p><i class="fas fa-wifi"></i> เครือข่าย</p>
            <p class="sub">การเลือกเครือข่าย จะทำให้คุณได้เรือข่ายตามที่ต้องการ</p>
          </div>
          <div class="right">
            <div class="brand-select">
              <img src="{{asset('img/Dtac.png')}}" class="icon-select" alt="">
              <select name="" id="" class="form-component select" placeholder="กรุณาเลือกผลรวม">
                <option value="" data-brand-pic="{{asset('img/Dtac.png')}}">เครือข่าย Dtac</option>
                <option value="" data-brand-pic="{{asset('img/Dtac.png')}}">เครือข่าย True</option>
                <option value="" data-brand-pic="{{asset('img/Dtac.png')}}">เครือข่าย AIS</option>
              </select>
            </div>
          </div>
        </div>

        <div class="brand-ber box-border">
          <div class="left">
            <p><i class="fas fa-star"></i> ชุดตัวเลขโปรด</p>
            <p class="sub">ตัวอย่าง เช่น 123,444,5555</p>
          </div>
          <div class="right">
            <div class="input-box">
              <input type="number" class="form-component input" placeholder="00000">
            </div>
          </div>
        </div>
      </div>
      <div class="bermean hidden">
        <div class="select-mean">
          @for ($i = 0; $i < 5; $i++)
            <div class="item">
              <figure><img src="{{asset('img/awesome-bitcoin.png')}}" alt=""></figure>
              <p>เบอร์มังกร,หงส์,เบอร์กวนอู</p>
              <div class="delete"><i class="fas fa-times-circle"></i></div>
              <div class="palm">
                <img src="{{asset('img/leaf.png')}}" class="left" alt="">
                <img src="{{asset('img/right.png')}}" class="right" alt="">
              </div>
            </div>
          @endfor
          
        </div>

        <div class="filter-type">
          <div class="select" onclick="select_filter_mean(this,'left')">แบบรวดเร็ว</div>
          <div class="select" onclick="select_filter_mean(this,'right')">แบบละเอียด</div>
          <div class="bg"></div>
        </div>

        <div class="box-select" style="display: none">
          @for ($i = 0; $i < 20; $i++)
            <div class="item" onclick="select_mean(this)">
              <figure><img src="{{asset('img/awesome-bitcoin.png')}}" alt=""></figure>
              <p>วาจา</p>
            </div>
          @endfor
        </div>

        <div class="box-select-detailed">
          <div class="boxselect">
            <select name="" id="" class="form-component select">
              <option value="">อาชีพ การงาน</option>
              <option value="">อาชีพ การงาน</option>
              <option value="">อาชีพ การงาน</option>
              <option value="">อาชีพ การงาน</option>
              <option value="">อาชีพ การงาน</option>
              <option value="">อาชีพ การงาน</option>
            </select>
          </div>

          <div class="box">
            @for ($i = 0; $i < 20; $i++)
              <div class="item" onclick="select_mean(this)">
                <figure><img src="{{asset('img/awesome-bitcoin.png')}}" alt=""></figure>
                <p>วาจา</p>
              </div>
            @endfor
          </div>
        </div>
      </div>
      <div class="fortune-ber">
        <p class="title">ทำนายหมายเลขที่ต้องการ</p>
        <p>กรอกหมายเลขเบอร์ที่คุณต้องการ</p>

        <div class="input-box">
          <input type="number">
          <input type="number">
          <input type="number">
          <div class="keed"></div>
          <input type="number">
          <input type="number">
          <input type="number">
          <div class="keed"></div>
          <input type="number">
          <input type="number">
          <input type="number">
          <input type="number">

          <div class="palm">
            <div class="left"><img src="{{asset('img/leaf.png')}}" alt=""></div>
            <div class="right"><img src="{{asset('img/right.png')}}" alt=""></div>
          </div>
        </div>

        <div class="button"><button class="form-component button bg">เริ่มทำนายเบอร์</button></div>
      </div>
    </div>
    <div class="confirm-search container">
      <div class="group-button">
        <button class="form-component button gray">ล้างข้อมูล</button>
        <button class="form-component button bg">ค้นหา</button>
      </div>
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

    <div class="warp-element container">
      <li class="active"><a href="#">ร้านค้าแนะนำ</a></li>
      <li><a href="#">แนะนำหมอดู</a></li>
      <li><a href="#">ประมูลเบอร์</a></li>
      <li><a href="#">เบอร์แนะนำ</a></li>
      <li><a href="#">เบอร์เด็ด เบอร์Hot</a></li>
      <li><a href="#">เบอร์โปรโมชั่น</a></li>
    </div>

    <div class="shop-recomment grid-box container" id="shop-recomment">
      <div class="head">
        <div class="title"><h2>ร้านค้าแนะนำ</h2></div>
        <button class="form-component button bg"><a href="">ทั้งหมด</a></button>
      </div>
      <div class="grid-item">
        <a href="">
          <div class="item">
            <div class="detail">
              <figure><img src="{{asset('img/p1.jpg')}}" alt=""></figure>
              <div class="right">
                <p class="name">Even Lee</p>
                <div class="ber-star">
                  <span class="ber">9,643,859 เบอร์</span>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    4.8
                  </span>
                </div>
                <div class="accesibility">
                  <span class="pro">Pro</span>
                  <span class="follow"><i class="fas fa-user-plus"></i> Follow</span>
                  <span>20K</span>
                  <span class="store"><i class="fas fa-store"></i></span>
                  <span class="crown"><i class="fas fa-crown"></i></span>
                </div>
              </div>
            </div>
  
            <div class="bg"><img src="{{asset('img/mock1.jpg')}}" alt=""></div>
          </div>
        </a>

        <a href="">
          <div class="item">
            <div class="detail">
              <figure><img src="{{asset('img/p1.jpg')}}" alt=""></figure>
              <div class="right">
                <p class="name">Even Lee</p>
                <div class="ber-star">
                  <span class="ber">9,643,859 เบอร์</span>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    3.8
                  </span>
                </div>
                <div class="accesibility">
                  <span class="pro">Pro</span>
                  <span class="follow"><i class="fas fa-user-check"></i> Following</span>
                  <span>20K</span>
                  <span class="store"><i class="fas fa-store"></i></span>
                  <span class="crown"><i class="fas fa-crown"></i></span>
                </div>
              </div>
            </div>
  
            <div class="bg"><img src="{{asset('img/mock1.jpg')}}" alt=""></div>
          </div>
        </a>

        <a href="">
          <div class="item">
            <div class="detail">
              <figure><img src="{{asset('img/p1.jpg')}}" alt=""></figure>
              <div class="right">
                <p class="name">Even Lee</p>
                <div class="ber-star">
                  <span class="ber">9,643,859 เบอร์</span>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    4.8
                  </span>
                </div>
                <div class="accesibility">
                  <span class="pro">Pro</span>
                  <span class="follow"><i class="fas fa-user-plus"></i> Follow</span>
                  <span>20K</span>
                  <span class="store"><i class="fas fa-store"></i></span>
                  <span class="crown"><i class="fas fa-crown"></i></span>
                </div>
              </div>
            </div>
  
            <div class="bg"><img src="{{asset('img/mock1.jpg')}}" alt=""></div>
          </div>
        </a>

        <a href="">
          <div class="item">
            <div class="detail">
              <figure><img src="{{asset('img/p1.jpg')}}" alt=""></figure>
              <div class="right">
                <p class="name">Even Lee</p>
                <div class="ber-star">
                  <span class="ber">9,643,859 เบอร์</span>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    4.8
                  </span>
                </div>
                <div class="accesibility">
                  <span class="pro">Pro</span>
                  <span class="follow"><i class="fas fa-user-plus"></i> Follow</span>
                  <span>20K</span>
                  <span class="store"><i class="fas fa-store"></i></span>
                  <span class="crown"><i class="fas fa-crown"></i></span>
                </div>
              </div>
            </div>
  
            <div class="bg"><img src="{{asset('img/mock1.jpg')}}" alt=""></div>
          </div>
        </a>

        <a href="">
          <div class="item">
            <div class="detail">
              <figure><img src="{{asset('img/p1.jpg')}}" alt=""></figure>
              <div class="right">
                <p class="name">Even Lee</p>
                <div class="ber-star">
                  <span class="ber">9,643,859 เบอร์</span>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    4.8
                  </span>
                </div>
                <div class="accesibility">
                  <span class="pro">Pro</span>
                  <span class="follow"><i class="fas fa-user-plus"></i> Follow</span>
                  <span>20K</span>
                  <span class="store"><i class="fas fa-store"></i></span>
                  <span class="crown"><i class="fas fa-crown"></i></span>
                </div>
              </div>
            </div>
  
            <div class="bg"><img src="{{asset('img/mock1.jpg')}}" alt=""></div>
          </div>
        </a>
      </div>
    </div>

    <div class="fortune grid-box container" id="fortune">
      <div class="head">
        <div class="title"><h2>ทำนายเบอร์โดยหมอดู</h2></div>
        <button class="form-component button bg"><a href="">ทั้งหมด</a></button>
      </div>
      <div class="grid-item">
        <a href="">
          <div class="item">
            <div class="detail">
              <figure><img src="{{asset('img/p1.jpg')}}" alt=""></figure>
              <div class="right">
                <p class="name">Even Lee</p>
                <div class="ber-star">
                  <span class="ber">9,643,859 เบอร์</span>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    4.8
                  </span>
                </div>
                <div class="accesibility">
                  <span class="pro">Pro</span>
                  <span class="follow"><i class="fas fa-user-plus"></i> Follow</span>
                  <span>20K</span>
                  <span class="store"><i class="fas fa-store"></i></span>
                  <span class="fortune"><img src="{{asset('img/icon/fortune.svg')}}" alt=""></span>
                </div>
              </div>
            </div>
  
            <div class="bg"><img src="{{asset('img/mock1.jpg')}}" alt=""></div>
          </div>
        </a>

        <a href="">
          <div class="item">
            <div class="detail">
              <figure><img src="{{asset('img/p1.jpg')}}" alt=""></figure>
              <div class="right">
                <p class="name">Even Lee</p>
                <div class="ber-star">
                  <span class="ber">9,643,859 เบอร์</span>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    4.8
                  </span>
                </div>
                <div class="accesibility">
                  <span class="pro">Pro</span>
                  <span class="follow"><i class="fas fa-user-plus"></i> Follow</span>
                  <span>20K</span>
                  <span class="store"><i class="fas fa-store"></i></span>
                  <span class="fortune"><img src="{{asset('img/icon/fortune.svg')}}" alt=""></span>
                </div>
              </div>
            </div>
  
            <div class="bg"><img src="{{asset('img/mock1.jpg')}}" alt=""></div>
          </div>
        </a>

        <a href="">
          <div class="item">
            <div class="detail">
              <figure><img src="{{asset('img/p1.jpg')}}" alt=""></figure>
              <div class="right">
                <p class="name">Even Lee</p>
                <div class="ber-star">
                  <span class="ber">9,643,859 เบอร์</span>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    4.8
                  </span>
                </div>
                <div class="accesibility">
                  <span class="pro">Pro</span>
                  <span class="follow"><i class="fas fa-user-plus"></i> Follow</span>
                  <span>20K</span>
                  <span class="store"><i class="fas fa-store"></i></span>
                  <span class="fortune"><img src="{{asset('img/icon/fortune.svg')}}" alt=""></span>
                </div>
              </div>
            </div>
  
            <div class="bg"><img src="{{asset('img/mock1.jpg')}}" alt=""></div>
          </div>
        </a>

        <a href="">
          <div class="item">
            <div class="detail">
              <figure><img src="{{asset('img/p1.jpg')}}" alt=""></figure>
              <div class="right">
                <p class="name">Even Lee</p>
                <div class="ber-star">
                  <span class="ber">9,643,859 เบอร์</span>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    4.8
                  </span>
                </div>
                <div class="accesibility">
                  <span class="pro">Pro</span>
                  <span class="follow"><i class="fas fa-user-plus"></i> Follow</span>
                  <span>20K</span>
                  <span class="store"><i class="fas fa-store"></i></span>
                  <span class="fortune"><img src="{{asset('img/icon/fortune.svg')}}" alt=""></span>
                </div>
              </div>
            </div>
  
            <div class="bg"><img src="{{asset('img/mock1.jpg')}}" alt=""></div>
          </div>
        </a>

        <a href="">
          <div class="item">
            <div class="detail">
              <figure><img src="{{asset('img/p1.jpg')}}" alt=""></figure>
              <div class="right">
                <p class="name">Even Lee</p>
                <div class="ber-star">
                  <span class="ber">9,643,859 เบอร์</span>
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    4.8
                  </span>
                </div>
                <div class="accesibility">
                  <span class="pro">Pro</span>
                  <span class="follow"><i class="fas fa-user-plus"></i> Follow</span>
                  <span>20K</span>
                  <span class="store"><i class="fas fa-store"></i></span>
                  <span class="fortune"><img src="{{asset('img/icon/fortune.svg')}}" alt=""></span>
                </div>
              </div>
            </div>
  
            <div class="bg"><img src="{{asset('img/mock1.jpg')}}" alt=""></div>
          </div>
        </a>
      </div>
    </div>

    <div class="slide2 swiper-container container">
      <div class="swiper-wrapper">
        @for ($i = 0; $i < 6; $i++)
          <div class="swiper-slide">
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
            <figure><img src="{{asset('img/pic1.png')}}" alt=""></figure>
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

        @for ($i = 0; $i < 3; $i++)
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
    </div>

    <div class="recomment-ber grid-box container" id="recomment-ber">
      <div class="head">
        <div class="title">
          <h2>เบอร์แนะนำ</h2>
          <p>ดูเบอร์แนะนำทั้งหมด 524</p>
        </div>
        <button class="form-component button bg"><a href="">ทั้งหมด</a></button>
      </div>
      <div class="grid-ber">
        @for ($i = 0; $i < 10; $i++)
          <div class="item">
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
        @endfor
      </div>
    </div>

    <div class="ber-hot grid-box container" id="ber-hot">
      <div class="head">
        <div class="title">
          <h2>เบอร์เด็ด เบอร์ Hot</h2>
          <p>ดูเบอร์เด็ด เบอร์ Hotทั้งหมด 524</p>
        </div>
        <button class="form-component button bg"><a href="">ทั้งหมด</a></button>
      </div>
      <div class="grid-ber">
        @for ($i = 0; $i < 10; $i++)
          <div class="item">
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
        @endfor
      </div>
    </div>

    <div class="ber-promotion grid-box container" id="ber-promotion">
      <div class="head">
        <div class="title">
          <h2>เบอร์โปรโมชั่น</h2>
          <p>ดูเบอร์โปรโมชั่นทั้งหมด 524</p>
        </div>
        <button class="form-component button bg"><a href="">ทั้งหมด</a></button>
      </div>
      <div class="grid-ber">
        @for ($i = 0; $i < 10; $i++)
          <div class="item">
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
        @endfor
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

    const slide2 = new Swiper('.slide2', {
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