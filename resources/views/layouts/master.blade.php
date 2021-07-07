<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <title>SimDD</title>

   @include('layouts.header')
   @stack('style')
</head>

<body>
  <header>
    <div class="header">
      <div class="logo"><img src="{{asset('img/logo/logo.png')}}" alt=""></div>
      <div class="marqee">
        <div class="icon"><i class="fas fa-bullhorn"></i></div>
        <marquee behavior="" direction="" scrollamount="5">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Harum autem odio voluptates asperiores fugit maiores fugiat error incidunt. 
          Est temporibus officia repudiandae quisquam ea repellendus quo assumenda incidunt id similique!
        </marquee>
      </div>
      <nav>
        <ul class="navmenu">
          <li class="menu active"><a href="">ทำเนียบหมอดู</a></li>
          <li class="menu"><a href="">ร้านค้าทั้งหมด</a></li>
          <li class="menu"><a href="">ประมูลเบอร์</a></li>
          <li class="menu"><a href="">บทความ</a></li>
          <li class="menu"><a href="">เกี่ยวกับเรา</a></li>
          <li class="menu"><a href="">ติดต่อเรา</a></li>
        </ul>

        <div class="member">
          <div class="register"><a href="">สมัครสมาชิก</a></div>
          <div class="login"><a href=""><button class="form-component button bg">เข้าสู่ระบบ</button></a></div>
          <div class="myaccount"></div>
        </div>

        <div class="icon-other">
          <a href="tel:999-999-9999"><i class="fas fa-mobile-alt"></i></a>
          <a href=""><i class="fab fa-line"></i></a>
        </div>

        <div class="other-menu">
          <div class="icon-hamburger" onclick="open_other_menu(this)"><i class="fas fa-bars"></i></div>
          <ul class="other-listmenu">
            <li class="menu"><a href="">แจ้งปัญหาการใช้งาน</a></li>
            <li class="menu"><a href="">การใช้งานส่วนร้านค้า</a></li>
            <li class="menu"><a href="">การใช้งานส่วนลูกค้า</a></li>
            <li class="menu"><a href="">การใช้งานส่วนประมูล</a></li>
            <li class="menu"><a href="">เงื่อนไขการใช้งาน</a></li>
            <li class="menu"><a href="">นโยบายความเป็นส่วนตัว</a></li>
          </ul>
        </div>
      </nav>
      <div class="mobile-menu"><i class="fas fa-bars" onclick="open_menu_mobile()"></i></div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  @include('layouts.footer')
  @stack('script')
</body>
</html>
