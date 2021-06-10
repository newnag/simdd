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
      <div class="search-box">
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
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
@endpush