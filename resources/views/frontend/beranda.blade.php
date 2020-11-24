@extends('frontend.layout.app')
@section('title', 'Beranda | Sipaten')
@section('Meta')
<meta name="description" content="Pelayanan Administrasi Online Kecamatan" />
<meta name="keywords" content="Sipaten" />
<meta property="og:title" content="Sipaten" />
<meta property="og:type" content="Website" />
<meta property="og:image" content="{{asset('public/assets/default.jpg')}}" />
@endsection

@section('content')

{{-- <header class="video-header">
    <!-- <video id="welcome" src="https://css-tricks-post-videos.s3.us-east-1.amazonaws.com/Island%20-%204141.mp4" autoplay loop playsinline muted></video> -->
    <img id="welcome" src="https://images.squarespace-cdn.com/content/v1/5a5906400abd0406785519dd/1552662149940-G6MMFW3JC2J61UBPROJ5/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/baelen.jpg?format=1500w" alt="">
    <div class="viewport-header">
      <h1>
        SELAMAT DATANG
        <span>SLURRR</span>
      </h1>
    </div>
</header> --}}
<header class="row-fluid main-section text-center">
  <div class="col-lg-12">
      <div id="particles-js">
          <div class="banner-text">
              <div class="row-fluid">
                  <div class="col-lg-8 offset-lg-2">
                      <h1 class="animate__animated animate__bounce text-shadow">Banner Full Width & Height</h1>
                      <h5 class="animate__animated animate__bounce animate__delay-1s text-shadow">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt uprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header>

@include('frontend.layout.menu')

<main>
 <div class="bg-parallax">
    <div class="container">
     
        <center><h2 class="font-besar-2 text-shadow text-white pt-4 pb-2"><u>Pelayanan Administrasi Online</u></h2></center>

        <div class="row pb-4 mb-2">
          <div class="col-lg-3 col-md-6 col-sm-12 px-2 py-3">
            <div class="card shadow wow animate__animated animate__fadeInUp" data-wow-duration="1s">
                <div class="frame-gambar">
                  <img src="https://cdn1.iconfinder.com/data/icons/communication-156/128/Operator-512.png" alt="" class="card-img-top img-pelayanan">
                </div>                    
                <div class="card-body">
                  <div style="height: 60px;">
                    <h5 class="card-title"><center>Pelayanan 1</center></h5>                        
                  </div>             
                  <p class="card-text"><hr></p>
                  <center>                        
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#detail" data-tooltip="tooltip" data-placement="top" title="Lihat Detail Layanan"><i class="fas fa-info-circle fa-2x"></i></a>                                                                    
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#persyaratan" data-tooltip="tooltip" data-placement="bottom" title="Lihat Persyaratan"><i class="fas fa-scroll fa-2x"></i></a>                        
                    <a href="{{route('frontend.form')}}" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-tooltip="tooltip" data-placement="top" title="Gunakan Layanan"><i class="fas fa-pen-square fa-2x"></i></a>
                  </center>                      
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 px-2 py-3">
            <div class="card shadow wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="frame-gambar">
                  <img src="https://cdn1.iconfinder.com/data/icons/communication-156/128/Operator-512.png" alt="" class="card-img-top img-pelayanan">
                </div>                    
                <div class="card-body">
                  <div style="height: 60px;">
                    <h5 class="card-title"><center>Pelayanan 1</center></h5>                        
                  </div>             
                  <p class="card-text"><hr></p>
                  <center>                        
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#detail" data-tooltip="tooltip" data-placement="top" title="Lihat Detail Layanan"><i class="fas fa-info-circle fa-2x"></i></a>                                                                    
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#persyaratan" data-tooltip="tooltip" data-placement="bottom" title="Lihat Persyaratan"><i class="fas fa-scroll fa-2x"></i></a>                        
                    <a href="{{route('frontend.form')}}" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-tooltip="tooltip" data-placement="top" title="Gunakan Layanan"><i class="fas fa-pen-square fa-2x"></i></a>
                  </center>                      
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 px-2 py-3">
            <div class="card shadow wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                <div class="frame-gambar">
                  <img src="https://cdn1.iconfinder.com/data/icons/communication-156/128/Operator-512.png" alt="" class="card-img-top img-pelayanan">
                </div>                    
                <div class="card-body">
                  <div style="height: 60px;">
                    <h5 class="card-title"><center>Pelayanan 1</center></h5>                        
                  </div>             
                  <p class="card-text"><hr></p>
                  <center>                        
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#detail" data-tooltip="tooltip" data-placement="top" title="Lihat Detail Layanan"><i class="fas fa-info-circle fa-2x"></i></a>                                                                    
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#persyaratan" data-tooltip="tooltip" data-placement="bottom" title="Lihat Persyaratan"><i class="fas fa-scroll fa-2x"></i></a>                        
                    <a href="{{route('frontend.form')}}" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-tooltip="tooltip" data-placement="top" title="Gunakan Layanan"><i class="fas fa-pen-square fa-2x"></i></a>
                  </center>                      
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 px-2 py-3">
            <div class="card shadow wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                <div class="frame-gambar">
                  <img src="https://cdn1.iconfinder.com/data/icons/communication-156/128/Operator-512.png" alt="" class="card-img-top img-pelayanan">
                </div>                    
                <div class="card-body">
                  <div style="height: 60px;">
                    <h5 class="card-title"><center>Pelayanan 1</center></h5>                        
                  </div>             
                  <p class="card-text"><hr></p>
                  <center>                        
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#detail" data-tooltip="tooltip" data-placement="top" title="Lihat Detail Layanan"><i class="fas fa-info-circle fa-2x"></i></a>                                                                    
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#persyaratan" data-tooltip="tooltip" data-placement="bottom" title="Lihat Persyaratan"><i class="fas fa-scroll fa-2x"></i></a>                        
                    <a href="{{route('frontend.form')}}" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-tooltip="tooltip" data-placement="top" title="Gunakan Layanan"><i class="fas fa-pen-square fa-2x"></i></a>
                  </center>                      
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 px-2 py-3">
            <div class="card shadow wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                <div class="frame-gambar">
                  <img src="https://cdn1.iconfinder.com/data/icons/communication-156/128/Operator-512.png" alt="" class="card-img-top img-pelayanan">
                </div>                    
                <div class="card-body">
                  <div style="height: 60px;">
                    <h5 class="card-title"><center>Pelayanan 1</center></h5>                        
                  </div>             
                  <p class="card-text"><hr></p>
                  <center>                        
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#detail" data-tooltip="tooltip" data-placement="top" title="Lihat Detail Layanan"><i class="fas fa-info-circle fa-2x"></i></a>                                                                    
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#persyaratan" data-tooltip="tooltip" data-placement="bottom" title="Lihat Persyaratan"><i class="fas fa-scroll fa-2x"></i></a>                        
                    <a href="{{route('frontend.form')}}" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-tooltip="tooltip" data-placement="top" title="Gunakan Layanan"><i class="fas fa-pen-square fa-2x"></i></a>
                  </center>                      
                </div>
            </div>
          </div>  
          <div class="col-lg-3 col-md-6 col-sm-12 px-2 py-3">
            <div class="card shadow wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                <div class="frame-gambar">
                  <img src="https://cdn1.iconfinder.com/data/icons/communication-156/128/Operator-512.png" alt="" class="card-img-top img-pelayanan">
                </div>                    
                <div class="card-body">
                  <div style="height: 60px;">
                    <h5 class="card-title"><center>Pelayanan 1</center></h5>                        
                  </div>             
                  <p class="card-text"><hr></p>
                  <center>                        
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#detail" data-tooltip="tooltip" data-placement="top" title="Lihat Detail Layanan"><i class="fas fa-info-circle fa-2x"></i></a>                                                                    
                    <a href="" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-toggle="modal" data-target="#persyaratan" data-tooltip="tooltip" data-placement="bottom" title="Lihat Persyaratan"><i class="fas fa-scroll fa-2x"></i></a>                        
                    <a href="{{route('frontend.form')}}" class="btn btn-tema btn-sm px-2 py-2 mx-2" data-tooltip="tooltip" data-placement="top" title="Gunakan Layanan"><i class="fas fa-pen-square fa-2x"></i></a>
                  </center>                      
                </div>
            </div>
          </div>  
        </div>

    </div>
 </div>   
</main>

<!-- Modal -->
<div class="modal fade" id="detail" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailLabel">Layanan 1</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Detail layanan
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-tema" data-dismiss="modal">Tutup</button>          
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="persyaratan" tabindex="-1" aria-labelledby="persyaratanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="persyaratanLabel">Persyaratan Layanan 1</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
                List Persyaratan Layanan:
                <ol>
                    <li>Syarat 1</li>
                    <li>Syarat 2</li>
                    <li>Syarat 3</li>
                </ol>
                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-tema" data-dismiss="modal">Tutup</button>          
        </div>
      </div>
    </div>
</div>

@endsection

@section('top-resource')
<style>
canvas {
  display: block;
  vertical-align: bottom;
}
.main-section {
  background: linear-gradient(to right, #21969e ,#81ecec);
  /* background-color: #fff; */
  position: relative;  
}
.banner-text {
  color: #fff;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
</style>
@endsection
@section('bottom-resource') 
<script src="{{asset('public/frontend/js/particles.min.js')}}"></script>
<script src="{{asset('public/frontend/js/particleconfig.js')}}"></script>
@endsection