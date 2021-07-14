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

    <div class="cover-container">
      <div class="cover-store">
          <img src="{{asset('img/Background.png')}}" alt="" class="cover">
      </div>
      <div class="profile-pict">
          <img src="{{asset('img/p4.jpg')}}" alt="">
      </div>
      <div class="profile-content">
          <h1>William Bang</h1>
          <ul class="">
              <li><p>1,500 เบอร์</p></li>
              <li><p>Active 19 นาที ที่ผ่านมา</p></li>
          </ul>
          <p><i class="fas fa-map-marker-alt"></i> 99/444 ถนนกาญจนาภิเษก แขวงคันนายาว เขตคันนายาว ขอนแก่น</p>
          <ul style="width: 50%;">
              <li><p><i class="fab fa-facebook-f"></i> William bang</p></li>
              <li><p><i class="fab fa-line"></i> William bang</p></li>
              <li><p><i class="fab fa-instagram"></i> William bang</p></li>
              <li><p><i class="fas fa-mobile-alt"></i> 089-762-5325, 099-326-5214</p></li>
          </ul>
          <br>
          <ul>
              <li>
                  <div class="rating flex-content">
                      <span class="material-icons">star</span>
                      <span class="material-icons">star</span>
                      <span class="material-icons">star</span>
                      <span class="material-icons">star_half</span>
                      <span class="material-icons">star_outline</span>
                      <p>4.8</p>
                      <i class="fas fa-crown"></i>
                  </div>
              </li>
              <li>
                  <div class="action-con flex-content">
                      <a href="" class="btn-ac">Pro</a>
                      <a href="" class="flex-content btn-ac"><i class="fas fa-user-plus"></i><p>Follow</p></a>
                      <a href="" class="flex-content btn-ac"><i class="fas fa-comment-alt"></i><p>Contact</p></a>
                      <a href="" class="flex-content btn-ac"><i class="fas fa-shipping-fast"></i><p>Shipping</p></a>
                  </div>
              </li>
          </ul>
      </div>
    </div>
    <div class="pc-tab">
      <input checked="checked" class="label-head" id="tab1" type="radio" name="pct" />
      <input class="label-head" id="tab2" type="radio" name="pct" />
        <nav>
          <ul>
            <li class="tab1">
              <label for="tab1">ค้นหาเบอร์ของร้านนี้</label>
            </li>
            <li class="tab2">
              <label for="tab2">เบอร์จากความหมาย</label>
            </li>
          </ul>
          <p>คู่มือวิธีการค้นหาเบอร์<i class="fas fa-book"></i></p>
        </nav>
        <section>
            <hr id="top-hr">
          <div class="tab1 bg-color">
            <div class="non-pad">
                <ul class="flex-1">
                  <li>
                    <i class="fas fa-chart-pie"></i>
                  </li>
                  <li>
                    <h6>หมวดหมู่เบอร์</h6>
                  </li>
                </ul>
                <ul class="flex">
                    <li>
                        <p>เบอร์มงคลเสริมบารมี,เบอร์มงคลเสริมโชคลาภ,และเบอร์ อื่นๆ อีกมากมายกว่า 31 หมวดหมู่</p>
                    </li>
                    <li>
                      <div class="selectdiv">
                        <label>
                            <select>
                                <option selected> กรุณาเลือกหมวดหมู่เบอร์ </option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Last long option</option>
                            </select>
                        </label>
                      </div>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="non-pad">
                <ul class="flex-1">
                  <li>
                    <i class="fas fa-dollar-sign"></i>
                  </li>
                  <li>
                    <h6>ช่วงราคา</h6>
                  </li>
                </ul>
                <ul class="flex">
                    <li>
                        <p>เลือกช่วงราคาที่คุณต้องการ เพื่อให้ง่ายต่อการค้นหา</p>
                    </li>
                    <li class="price-w">
                        <div class="re">
                          <input type="text" class="in-2">
                          <span class="th">THB</span>
                        </div>
                        <h1>-</h1>
                        <div class="re">
                          <input type="text" class="in-2">
                          <span class="th">THB</span>
                        </div>
                        <div class="switches-container">
                          <input type="radio" id="switchMonthly" name="switchPlan" value="Monthly" checked="checked" />
                          <input type="radio" id="switchYearly" name="switchPlan" value="Yearly" />
                          <label for="switchMonthly">น้อยไปมาก</label>
                          <label for="switchYearly">มากไปน้อย</label>
                          <div class="switch-wrapper">
                            <div class="switch">
                              <div>น้อยไปมาก</div>
                              <div>มากไปน้อย</div>
                            </div>
                          </div>
                        </div>
                    </li>
                </ul>
                
            </div>
            <hr>
            <div class="non-pad">
                <ul class="flex-1">
                  <li>
    
                  </li>
                  <li>
                    <h6>ผลรวม</h6>
                  </li>
                </ul>
                <ul class="flex">
                    <li>
                        <p>พลังเสริมของเบอร์ยิ่งผมรวมเยอะพลังก็ยิ่งยอดเยี่ยม</p>
                    </li>
                    <li>
                      <div class="selectdiv">
                        <label>
                            <select>
                                <option selected>30 :  พลังแห่งความสำเร็จจากความมุ่งมั่น</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Last long option</option>
                            </select>
                        </label>
                    </li>
                </ul>
                
            </div>
            <hr>
            <div class="non-pad">
                <ul class="flex-1">
                  <li>
                    <i class="material-icons">wifi</i>
                  </li>
                  <li>
                    <h6>เครือข่าย</h6>
                  </li>
                </ul>
                <ul class="flex">
                    <li>
                        <p>การเลือกเครือข่ายจะทำให้คุณคุณใด้ เครือข่ายที่คุณต้องการ</p>
                    </li>
                    <li>
                      <div class="selectdiv">
                        <label>
                            <select>
                                <option selected>เครือข่าย Dtac</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Last long option</option>
                            </select>
                        </label>
                    </li>
                </ul>
                
            </div>
          </div>
          <div class="tab2 bg-color">
            <div>
              <ul class="se-ul m-b-2 m-l-3 m-r-3 m-t-2">
                <li>
                  <div>
                    <img src="img/awesome-bitcoin.png" alt="">
                    <p>เบอร์มังกร,หงส์ เบอร์กวนอู</p>
                  </div>
                  <a href=""><i class="fas fa-times-circle"></i></a>
                </li>
                <li>
                  <div>
                    <img src="img/awesome-bitcoin.png" alt="">
                    <p>นักลงทุน เจ้าของกิจการ</p>
                  </div>
                  <a href=""><i class="fas fa-times-circle"></i></a>
                </li>
                <li>
                  <div>
                    <img src="img/awesome-bitcoin.png" alt="">
                    <p>นักการเมือง</p>
                  </div>
                  <a href=""><i class="fas fa-times-circle"></i></a>
                </li>
                <li>
                  <div>
                    <img src="img/awesome-bitcoin.png" alt="">
                    <p>พนักงาน ขายประกัน</p>
                  </div>
                  <a href=""><i class="fas fa-times-circle"></i></a>
                </li>
                <li>
                  <div>
                    <img src="img/awesome-bitcoin.png" alt="">
                    <p>พระเครื่อง ของมงคล</p>
                  </div>
                  <a href=""><i class="fas fa-times-circle"></i></a>
                </li>
              </ul>
              <div class="center">
                <div class="switches-container">
                  <input type="radio" id="switchfast" name="fast" value="Fast" checked="checked" />
                  <input type="radio" id="switchdes" name="des" value="Des" />
                  <label for="switchfast">แบบรวดเร็ว</label>
                  <label for="switchdes">แบบละเอียด</label>
                  <div class="switch-wrapper">
                    <div class="switch">
                      <div>แบบรวดเร็ว</div>
                      <div>แบบละเอียด</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="center-2">
                <div class="selectdiv">
                  <label>
                      <select>
                          <option selected> กรุณาเลือกหมวดหมู่เบอร์ </option>
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Last long option</option>
                      </select>
                  </label>
                </div>
              </div>
              <div class="scroll-v">
                <ul class="type-flex">
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ครู อาจารย์</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ค้า ขาย</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักลงทุน เจ้าของกิจการ</p></div>                  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ขายเสื้อผ้า เครื่องประดับ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ขายสินค้า online</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ขายอาหารเสริม ครีม</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ค้าขายของเก่า ของมือ 2</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>อาชีพรับราชการ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>งานปกครอง หัวหน้างาน</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ถ่ายภาพ ศิลปะ</p></div> 
                  </li>
                </ul>
                <ul class="type-flex">
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ทหาร,ตำรวจ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ธุรกิจกลางคืน พนัน</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ธุรกิจนำเข้า ส่งออก</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ธุรกิจเครือข่าย MLM</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักการเมือง</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>งานแข่งขัน นักกีฬา</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักบริหาร นักปกครอง</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักบวช,ผู้ทรงศีล หมอดู</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักพูด, พิธีกร นักข่าว</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>งานซ่อมแซม งานช่าง</p></div>
                  </li>
                </ul>
                <ul class="type-flex">
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักมายากล นัก Copy</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักเล่นหุ้น</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักแสดง,นายแบบ นางแบบ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นายหน้าขายที่ดิน</p></div>   
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ประชาสัมพันธ์ PR</p></div>   
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>พนักงาน ขายประกัน</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>พนักงานต้อนรับ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>พระเครื่อง ของมงคล</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>รานอาหาร รานกาแฟ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>อสังหาริพย์</p></div>
                  </li>
                </ul>
                <ul class="type-flex">
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ครู อาจารย์</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ค้า ขาย</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักลงทุน เจ้าของกิจการ</p></div>                  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ขายเสื้อผ้า เครื่องประดับ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ขายสินค้า online</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ขายอาหารเสริม ครีม</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ค้าขายของเก่า ของมือ 2</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>อาชีพรับราชการ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>งานปกครอง หัวหน้างาน</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ถ่ายภาพ ศิลปะ</p></div> 
                  </li>
                </ul>
                <ul class="type-flex">
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ทหาร,ตำรวจ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ธุรกิจกลางคืน พนัน</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ธุรกิจนำเข้า ส่งออก</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ธุรกิจเครือข่าย MLM</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักการเมือง</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>งานแข่งขัน นักกีฬา</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักบริหาร นักปกครอง</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักบวช,ผู้ทรงศีล หมอดู</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักพูด, พิธีกร นักข่าว</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>งานซ่อมแซม งานช่าง</p></div>
                  </li>
                </ul>
                <ul class="type-flex">
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักมายากล นัก Copy</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักเล่นหุ้น</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักแสดง,นายแบบ นางแบบ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นายหน้าขายที่ดิน</p></div>   
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ประชาสัมพันธ์ PR</p></div>   
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>พนักงาน ขายประกัน</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>พนักงานต้อนรับ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>พระเครื่อง ของมงคล</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>รานอาหาร รานกาแฟ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>อสังหาริพย์</p></div>
                  </li>
                </ul>
                <ul class="type-flex">
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ครู อาจารย์</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ค้า ขาย</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักลงทุน เจ้าของกิจการ</p></div>                  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ขายเสื้อผ้า เครื่องประดับ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ขายสินค้า online</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ขายอาหารเสริม ครีม</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ค้าขายของเก่า ของมือ 2</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>อาชีพรับราชการ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>งานปกครอง หัวหน้างาน</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ถ่ายภาพ ศิลปะ</p></div> 
                  </li>
                </ul>
                <ul class="type-flex">
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ทหาร,ตำรวจ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ธุรกิจกลางคืน พนัน</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ธุรกิจนำเข้า ส่งออก</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ธุรกิจเครือข่าย MLM</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักการเมือง</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>งานแข่งขัน นักกีฬา</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักบริหาร นักปกครอง</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักบวช,ผู้ทรงศีล หมอดู</p></div>  
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักพูด, พิธีกร นักข่าว</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>งานซ่อมแซม งานช่าง</p></div>
                  </li>
                </ul>
                <ul class="type-flex">
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักมายากล นัก Copy</p></div> 
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักเล่นหุ้น</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นักแสดง,นายแบบ นางแบบ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>นายหน้าขายที่ดิน</p></div>   
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>ประชาสัมพันธ์ PR</p></div>   
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>พนักงาน ขายประกัน</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>พนักงานต้อนรับ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>พระเครื่อง ของมงคล</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>รานอาหาร รานกาแฟ</p></div>
                  </li>
                  <li>
                    <div class="img-head"><img src="img/awesome-bitcoin.png" alt=""></div>
                    <div class="name"><p>อสังหาริพย์</p></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
    </div>
    <div class="con-1">
      <div class="con-btn">
        <a href="">ล้างข้อมูล</a>
        <a href="">ค้นหา</a>
      </div>
      
    </div>
    <div class="container-in">
      <div class="head-page">
        <h3>เบอร์แนะนำ</h3>
      </div>
      @for ($i = 0; $i < 2; $i++)
        <div class="flex-phone">
          <div class="num-card">
            <div class="num-head">
              <img src="{{asset('img/dtac_logo.png')}}" alt="" class="img-card">
              <h1 class="num-p">089-682-6459</h1>
            </div>
            <hr>
            <div class="num-body">
              <div class="num-flex">
                <p class="p-bold">ผลรวม</p>
                <p>29 : พลังความรุ่งเรืองสุขสมหวังทั้ง<br>ความรักและเงินตรา</p>
              </div>
              <div class="num-flex">
                <p class="p-bold">เกรด</p>
                <div class="num-flex">
                  <a href="" class="btn-card">A+ </a>
                  <a href="" class="btn-card">แนะนำ</a>
                  <i class="fas fa-store color-blue m-r-1"></i>
                  <i class="fas fa-heart color-pink"></i>
                </div>
              </div>
              <div class="num-flex">
                <p class="p-bold">ราคา</p>
                <p>9000000 <strong>THB</strong></p>
              </div>
            </div>
          </div>
          <div class="num-card">
            <div class="num-head">
              <img src="{{asset('img/true_logo.png')}}" alt="" class="img-card">
              <h1 class="num-p">089-682-6459</h1>
            </div>
            <hr>
            <div class="num-body">
              <div class="num-flex">
                <p class="p-bold">ผลรวม</p>
                <p>29 : พลังความรุ่งเรืองสุขสมหวังทั้ง<br>ความรักและเงินตรา</p>
              </div>
              <div class="num-flex">
                <p class="p-bold">เกรด</p>
                <div class="num-flex">
                  <a href="" class="btn-card">A </a>
                  <a href="" class="btn-card">แนะนำ</a>
                  <i class="fas fa-store color-blue m-r-1"></i>
                  <i class="fas fa-heart color-gray"></i>
                </div>
              </div>
              <div class="num-flex">
                <p class="p-bold">ราคา</p>
                <p>9000000 <strong>THB</strong></p>
              </div>
            </div>
          </div>
          <div class="num-card">
            <div class="num-head">
              <img src="{{asset('img/ais_logo.png')}}" alt="" class="img-card">
              <h1 class="num-p">089-682-6459</h1>
            </div>
            <hr>
            <div class="num-body">
              <div class="num-flex">
                <p class="p-bold">ผลรวม</p>
                <p>29 : พลังความรุ่งเรืองสุขสมหวังทั้ง<br>ความรักและเงินตรา</p>
              </div>
              <div class="num-flex">
                <p class="p-bold">เกรด</p>
                <div class="num-flex">
                  <a href="" class="btn-card">B </a>
                  <a href="" class="btn-card">แนะนำ</a>
                  <i class="fas fa-store color-blue m-r-1"></i>
                  <i class="fas fa-heart color-gray"></i>
                </div>
              </div>
              <div class="num-flex">
                <p class="p-bold">ราคา</p>
                <p>9000000 <strong>THB</strong></p>
              </div>
            </div>
          </div>
          <div class="num-card">
            <div class="num-head">
              <img src="{{asset('img/tot_logo.png')}}" alt="" class="img-card">
              <h1 class="num-p">089-682-6459</h1>
            </div>
            <hr>
            <div class="num-body">
              <div class="num-flex">
                <p class="p-bold">ผลรวม</p>
                <p>29 : พลังความรุ่งเรืองสุขสมหวังทั้ง<br>ความรักและเงินตรา</p>
              </div>
              <div class="num-flex">
                <p class="p-bold">เกรด</p>
                <div class="num-flex">
                  <a href="" class="btn-card">C </a>
                  <a href="" class="btn-card">แนะนำ</a>
                  <i class="fas fa-store color-blue m-r-1"></i>
                  <i class="fas fa-heart color-gray"></i>
                </div>
              </div>
              <div class="num-flex">
                <p class="p-bold">ราคา</p>
                <p>9000000 <strong>THB</strong></p>
              </div>
            </div>
          </div>
          <div class="num-card">
            <div class="num-head">
              <img src="{{asset('img/Group 915.png')}}" alt="" class="img-card">
              <h1 class="num-p">089-682-6459</h1>
            </div>
            <hr>
            <div class="num-body">
              <div class="num-flex">
                <p class="p-bold">ผลรวม</p>
                <p>29 : พลังความรุ่งเรืองสุขสมหวังทั้ง<br>ความรักและเงินตรา</p>
              </div>
              <div class="num-flex">
                <p class="p-bold">เกรด</p>
                <div class="num-flex">
                  <a href="" class="btn-card">D </a>
                  <a href="" class="btn-card">แนะนำ</a>
                  <i class="fas fa-store color-blue m-r-1"></i>
                  <i class="fas fa-heart color-gray"></i>
                </div>
              </div>
              <div class="num-flex">
                <p class="p-bold">ราคา</p>
                <p>9000000 <strong>THB</strong></p>
              </div>
            </div>
          </div>
        </div>
      @endfor
     
    </div>
    <div class="container-in m-t-3">
      <div class="head-page flex-content">
        <h3>เบอร์ทั้งหมด</h3>
        <p class="count-s">
          <i>ดูเบอร์แนะนำทั้งหมด 120</i>
        </p>
      </div>
      @for ($i = 0; $i < 6; $i++)
        <div class="flex-phone">
          <div class="num-card">
            <div class="num-head">
              <img src="{{asset('img/dtac_logo.png')}}" alt="" class="img-card">
              <h1 class="num-p">089-682-6459</h1>
            </div>
            <hr>
            <div class="num-body">
              <div class="num-flex">
                <p class="p-bold">ผลรวม</p>
                <p>29 : พลังความรุ่งเรืองสุขสมหวังทั้ง<br>ความรักและเงินตรา</p>
              </div>
              <div class="num-flex">
                <p class="p-bold">เกรด</p>
                <div class="num-flex">
                  <a href="" class="btn-card">A+ </a>
                  <a href="" class="btn-card">แนะนำ</a>
                  <i class="fas fa-store color-blue m-r-1"></i>
                  <i class="fas fa-heart color-pink"></i>
                </div>
              </div>
              <div class="num-flex">
                <p class="p-bold">ราคา</p>
                <p>9000000 <strong>THB</strong></p>
              </div>
            </div>
          </div>
          <div class="num-card">
            <div class="num-head">
              <img src="{{asset('img/true_logo.png')}}" alt="" class="img-card">
              <h1 class="num-p">089-682-6459</h1>
            </div>
            <hr>
            <div class="num-body">
              <div class="num-flex">
                <p class="p-bold">ผลรวม</p>
                <p>29 : พลังความรุ่งเรืองสุขสมหวังทั้ง<br>ความรักและเงินตรา</p>
              </div>
              <div class="num-flex">
                <p class="p-bold">เกรด</p>
                <div class="num-flex">
                  <a href="" class="btn-card">A </a>
                  <a href="" class="btn-card">แนะนำ</a>
                  <i class="fas fa-store color-blue m-r-1"></i>
                  <i class="fas fa-heart color-gray"></i>
                </div>
              </div>
              <div class="num-flex">
                <p class="p-bold">ราคา</p>
                <p>9000000 <strong>THB</strong></p>
              </div>
            </div>
          </div>
          <div class="num-card">
            <div class="num-head">
              <img src="{{asset('img/ais_logo.png')}}" alt="" class="img-card">
              <h1 class="num-p">089-682-6459</h1>
            </div>
            <hr>
            <div class="num-body">
              <div class="num-flex">
                <p class="p-bold">ผลรวม</p>
                <p>29 : พลังความรุ่งเรืองสุขสมหวังทั้ง<br>ความรักและเงินตรา</p>
              </div>
              <div class="num-flex">
                <p class="p-bold">เกรด</p>
                <div class="num-flex">
                  <a href="" class="btn-card">B </a>
                  <a href="" class="btn-card">แนะนำ</a>
                  <i class="fas fa-store color-blue m-r-1"></i>
                  <i class="fas fa-heart color-gray"></i>
                </div>
              </div>
              <div class="num-flex">
                <p class="p-bold">ราคา</p>
                <p>9000000 <strong>THB</strong></p>
              </div>
            </div>
          </div>
          <div class="num-card">
            <div class="num-head">
              <img src="{{asset('img/tot_logo.png')}}" alt="" class="img-card">
              <h1 class="num-p">089-682-6459</h1>
            </div>
            <hr>
            <div class="num-body">
              <div class="num-flex">
                <p class="p-bold">ผลรวม</p>
                <p>29 : พลังความรุ่งเรืองสุขสมหวังทั้ง<br>ความรักและเงินตรา</p>
              </div>
              <div class="num-flex">
                <p class="p-bold">เกรด</p>
                <div class="num-flex">
                  <a href="" class="btn-card">C </a>
                  <a href="" class="btn-card">แนะนำ</a>
                  <i class="fas fa-store color-blue m-r-1"></i>
                  <i class="fas fa-heart color-gray"></i>
                </div>
              </div>
              <div class="num-flex">
                <p class="p-bold">ราคา</p>
                <p>9000000 <strong>THB</strong></p>
              </div>
            </div>
          </div>
          <div class="num-card">
            <div class="num-head">
              <img src="{{asset('img/Group 915.png')}}" alt="" class="img-card">
              <h1 class="num-p">089-682-6459</h1>
            </div>
            <hr>
            <div class="num-body">
              <div class="num-flex">
                <p class="p-bold">ผลรวม</p>
                <p>29 : พลังความรุ่งเรืองสุขสมหวังทั้ง<br>ความรักและเงินตรา</p>
              </div>
              <div class="num-flex">
                <p class="p-bold">เกรด</p>
                <div class="num-flex">
                  <a href="" class="btn-card">D </a>
                  <a href="" class="btn-card">แนะนำ</a>
                  <i class="fas fa-store color-blue m-r-1"></i>
                  <i class="fas fa-heart color-gray"></i>
                </div>
              </div>
              <div class="num-flex">
                <p class="p-bold">ราคา</p>
                <p>9000000 <strong>THB</strong></p>
              </div>
            </div>
          </div>
        </div>
      @endfor
      

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

  </script>
@endpush