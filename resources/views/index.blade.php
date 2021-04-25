@extends('layouts.app')
@section('title','Do Logosy')
@section('content')

<style>

</style>



<div class="container-fluid " style="margin: auto;display: block;">
  <div class="row ">
    <div class=" text-white col-12 head-xxxs head-xxs head-xs head-s head-m head-l head-xl head-xxl" style="
        background-color: #cccccc;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        background-image: url('{{url('images/img.jpg')}}');">
      <div class="row position-absolute d-flex justify-content-between" style="bottom: 0px; width: 100%">
        <div class="col-3 col-md-0"></div>
        <div class="col-10 col-md-1 " style="color: black; font-weight: lighter">
          <div class="btn border-white text-white" style="background-color: rgba(255,255,255,0.3);
          width: 55px;
          height: 55px;
          padding: 2px 6px;
          font-size: 30px;
          text-align: center;
          border-radius: 35px;">♫</p>
          </div>
          <p style="font-size: small;font-weight: bold;padding: 0px 5px; ">Музика</p>
          <a href="/music" class="stretched-link"></a>
        </div>
          <div class="col-2 col-md-1" style="color: black; font-weight: lighter">
              <div class="btn border-white text-white md-normal md-right" style="background-color: rgba(255,255,255,0.3);
         width: 55px;
          height: 55px;
          padding: 2px 6px;
          font-size: 30px;
          text-align: center;
          border-radius: 35px;">A</div>
              <p  style="font-size: small; position: relative;padding-left: -9px;" class="md-normal md-right">Апологетика</p>
              <a href="/apologetics" class="stretched-link"></a>
          </div>
          <div class="col-10 col-md-1 " style="color: black; font-weight: bold">
              <div class="btn border-white text-white " style="background-color: rgba(255,255,255,0.3);
          width: 55px;
          height: 55px;
          padding: 2px 6px;
          font-size: 30px;
          text-align: center;
          border-radius: 35px;">П</div>
              <p style="font-size: small; padding: 0px 12px; ">План</p>
              <a href="/bibleEveryDay" class="stretched-link"></a>
          </div>
        <div class="col-2 col-md-1" style="color: black; font-weight: lighter">
          <div class="btn border-white text-white md-normal md-right" style="background-color: rgba(255,255,255,0.3);
        width: 55px;
          height: 55px;
          padding: 2px 6px;
          font-size: 30px;
          text-align: center;
          border-radius: 35px;">🕮</div>
          <p class="md-normal md-right" style="font-size: small; font-weight: bold; position: relative;padding-left:-10px;">Література</p>
          <a href="/literature" class="stretched-link"></a>
        </div>
        <div class="col-10 col-md-1 " style="color: black; font-weight: lighter">
          <div class="btn border-white text-white" style="background-color: rgba(255,255,255,0.3);
          width: 55px;
          height: 55px;
          padding: 2px 6px;
          font-size: 30px;
          text-align: center;
          border-radius: 35px;">⛪</div>
          <p style="font-size: small;font-weight: bold;position: relative;left: -3px;">Проповіді</p>
          <a href="/homiletics" class="stretched-link"></a>
        </div>
        <div class="col-2 col-md-1 " style="color: black; font-weight: lighter">
          <div class="btn border-white md-normal md-right text-white" style="background-color: rgba(255,255,255,0.3);
          width: 55px;
          height: 55px;
          padding: 2px 6px;
          font-size: 30px;
          text-align: center;
          border-radius: 35px;">?</div>
          <p class="md-normal md-right" style="font-size: small; padding-left:-3px;position:relative;font-weight: bold; ">Запитання</p>
          <a href="/questions" class="stretched-link"></a>
        </div>
          <div class="col-3 col-md-0"></div>
      </div>
    </div>
  </div>
</div>





<div class="container ">
  <div class="row">
    <div class="col-12 pt-3 pb-2 mb-0">
      <h2>Останні події:</h2>
    </div>

    <?php

    $numItems = count($items);
    $i = 0;
    $counter = 1;
    foreach ($items as $key => $value) {
      if (++$i === $numItems) {
    ?>

        @foreach($items as $item)
        @if($counter==$i)
        <div class="col-12 news-bock mb-2" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
          <div class="row">
            <div class="col-12 col-md-8 p-1 bg-white">
              <img class="w-100" style="height: 250px; width: auto; object-fit: cover;" src="{{$item['url']}}">
            </div>
            <div class="col-12 col-md-4 " style="height: 100%">
              <p>{{$item['title']}}</p>
            </div>
          </div>
          <a href="/posts/view/{{$item['id']}}" class="stretched-link"></a>
        </div>
        @endif
        <?php
        $counter++;
        ?>
        @endforeach
        <!---->
        <?php
        $counter = 0;
        ?>
        @foreach($items as $item)
        @if($counter==$i-2)
        <div class="col-md-4 news-bock p-1">
          <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <img class="w-100" src="{{$item['url']}}">
            <h5 class="p-2">{{$item['title']}}</h5>
          </div>
          <a href="/posts/view/{{$item['id']}}" class="stretched-link"></a>
        </div>
        @endif
        <?php
        $counter++;
        ?>
        @endforeach
        <!---->
        <?php
        $counter = 0;
        ?>
        @foreach($items as $item)
        @if($counter==$i-3)
        <div class="col-md-4 news-bock p-1">
          <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <img class="w-100"  src="{{$item['url']}}">
            <h5 class="p-2">{{$item['title']}}</h5>
          </div>
          <a href="/posts/view/{{$item['id']}}" class="stretched-link"></a>
        </div>
        @endif
        <?php
        $counter++;
        ?>
        @endforeach
        <!---->
        <?php
        $counter = 0;
        ?>
        @foreach($items as $item)
        @if($counter==$i-4)
        <div class="col-md-4 news-bock p-1">
          <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <img class="w-100" src="{{$item['url']}}">
            <h5 class="p-2">{{$item['title']}}</h5>
          </div>
          <a href="/posts/view/{{$item['id']}}" class="stretched-link"></a>
        </div>
        @endif
        <?php
        $counter++;
        ?>
        @endforeach




  </div>
</div>







<?php
      }
    }
?>






@endsection
