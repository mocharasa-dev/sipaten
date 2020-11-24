@extends('frontend.layout.app')
@section('title', 'Sipaten')
@section('Meta')
<meta name="description" content="Pelayanan Administrasi Online Kecamatan" />
<meta name="keywords" content="Sipaten" />
<meta property="og:title" content="Sipaten" />
<meta property="og:type" content="Sipaten" />
<meta property="og:image" content="{{asset('public/assets/default.jpg')}}" />
@endsection

@section('content')

<header class="video-header">
    <video id="welcome" src="https://css-tricks-post-videos.s3.us-east-1.amazonaws.com/Island%20-%204141.mp4" autoplay loop playsinline muted></video>
    {{-- <img id="welcome" src="https://images.squarespace-cdn.com/content/v1/5a5906400abd0406785519dd/1552662149940-G6MMFW3JC2J61UBPROJ5/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/baelen.jpg?format=1500w" alt=""> --}}
    <div class="viewport-header">
      <h1>
        SELAMAT DATANG
        <span>SLURRR</span>
      </h1>
    </div>
</header>

@include('frontend.layout.menu')


<main class="main">        
    <center>
        <img src="https://www.nadia.nl/img/flugzeug17.gif" alt="" style="padding-top:200px;margin-top:200px;padding-bottom:200px;margin-bottom:200px;-webkit-transform: scaleX(-1);transform: scaleX(-1);">
    </center>
    
</main>
@include('frontend.layout.footer')
@endsection

@section('top-resource')
<style>
h1 {
  font-family: 'Syncopate', sans-serif;
  color: white;
  text-transform: uppercase;
  letter-spacing: 3vw;
  line-height: 1.5;
  font-size: 4vw;
  text-align: center;
  -webkit-text-stroke: 1px #222;
  span {
    display: block;
    font-size: 10vw;
    letter-spacing: -1.3vw;
  }
}
</style>    
@endsection
@section('bottom-resource')

@endsection