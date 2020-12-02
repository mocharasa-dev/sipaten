@extends('frontend.layout.app')
@section('title', 'Contoh Form | Sipaten')
@push('Meta')
<meta name="description" content="Pelayanan Administrasi Online Kecamatan" />
<meta name="keywords" content="Sipaten" />
<meta property="og:title" content="Sipaten" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Sipaten" />
<meta property="og:image" content="{{asset('public/assets/default.jpg')}}" />
@endpush

@section('content')
<header class="video-header">
    <video id="welcome" src="https://css-tricks-post-videos.s3.us-east-1.amazonaws.com/Island%20-%204141.mp4" autoplay loop playsinline muted></video>
    <!-- <img id="welcome" src="https://images.squarespace-cdn.com/content/v1/5a5906400abd0406785519dd/1552662149940-G6MMFW3JC2J61UBPROJ5/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/baelen.jpg?format=1500w" alt=""> -->
    <div class="viewport-header">
      <h1>
        SELAMAT DATANG
        <span>SLURRR</span>
      </h1>
    </div>
</header>
@include('frontend.layout.menu')
<main class="bg-parallax">

<section class="py-4 my-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-header-form">
                    <h4 class="font-besar-3 text-center">Form Wizard Contoh</h4>
                </div>
                <div class="card-body">                  
                    <form id="mainform" method="POST" action="{{route('frontend.form.wizard.submit')}}">      
                    {{@csrf_field()}} 

                        <h2>Lampiran Persyaratan</h2>
                        <section>                        
                          <div class="row"> 
                            
                            <div class="col-lg-12 col-sm-12 px-2">
                              <label for="file_sp_rtrw">File Surat Pengantar RT RW</label>
                                <small class="w-100">( file type: jpg/jpeg/png | max size: 1 MB )</small>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file_sp_rtrw" id="file_sp_rtrw" onchange="document.getElementById('preview-sp').src = window.URL.createObjectURL(this.files[0])" accept="image/*">
                                    <label class="custom-file-label" for="file_sp_rtrw">File Surat Pengantar RT RW</label>
                                    @if($errors->has('file_sp_rtrw'))
                                    <small class="text-danger">{{$errors->first('file_sp_rtrw')}}</small>
                                    @endif
                                </div>
                                <img id="preview-sp" class="image-preview"/><br>                                
                            </div>
                            <div class="col-lg-12 col-sm-12 px-2">
                              <label for="file_ktp">File KTP</label>
                                <small class="w-100">( file type: jpg/jpeg/png | max size: 1 MB )</small>
                                <div class="custom-file">                                                                    
                                    <input type="file" class="custom-file-input" name="file_ktp" id="file_ktp" onchange="document.getElementById('preview-ktp').src = window.URL.createObjectURL(this.files[0])" accept="image/*">
                                    <label class="custom-file-label" for="file_ktp">File KTP</label>
                                    @if($errors->has('file_ktp'))
                                    <small class="text-danger">{{$errors->first('file_ktp')}}</small>
                                    @endif
                                </div>
                                <img id="preview-ktp" class="image-preview"/><br>                                
                            </div>
                            
                          </div>
                        </section>

                        <h2>Data Pemohon</h2>
                        <section>                        
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 px-2">
                                  <div class="form-group">
                                    <label for="">Nomor KTP/SIM/Passport</label>
                                    <input type="text" class="form-control" name="nik" placeholder="">
                                  </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 px-2">
                                  <div class="form-group">
                                    <label for="">Nomor Kartu Keluarga</label>
                                    <input type="text" class="form-control" name="no_kk" placeholder="">
                                  </div>
                                </div>                
                                <div class="col-lg-12 col-sm-12 px-2">
                                  <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" placeholder="">
                                  </div>
                                </div>  
                            </div>
                        </section>

                        <h2>Data Anak</h2>
                        <section>                        
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 px-2">
                                    <label for=""><strong>Data Anak</strong></label>
                                    <div id="inputFormRow">  
                                      <div class="input-group mb-3">
                                        <input type="text" name="nama_[]" aria-label="nama_[]" class="form-control" placeholder="nama">
                                        <input type="text" name="nik_[]" aria-label="nik_[]" class="form-control" placeholder="nik">
                                        <input type="text" name="alamat_[]" aria-label="alamat_[]" class="form-control" placeholder="alamat">
                                        <div class="input-group-append">                
                                          <button id="removeRow" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </div>
                                      </div>  
                                    </div>
                                    <div id="newRow"></div>
                                    <button id="addRow" type="button" class="btn btn-info"><i class="fa fa-plus-square"></i>&nbsp; Tambah Data</button>
                                </div>  
                            </div>
                        </section>
                              
                    </form>
                </div>
              </div>
            </div>
          </div>
    </div>     
</section> 

</main>
@endsection

@push('top-resource')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="{{asset('public/frontend/plugin/jquery-steps/jquery.steps.css') }}" rel="stylesheet" />
<style>
.image-preview {
  box-sizing: border-box;
  border: dashed 4px #ccc;
  transition: all 0.2s ease;
  margin-top: 20px;
  margin-bottom: 40px;
  max-height: 250px;
  width: 100%;
  border-radius: 4px;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  background-color: #fff;
  overflow: hidden;
}
input.custom-file-input{
  overflow: hidden;
}
</style>
@endpush

@push('bottom-resource')
<script src="{{asset('public/frontend/plugin/jquery-steps/jquery.steps.min.js') }}"></script>

<script src="{{asset('public/frontend/js/dynamic-form.js')}}"></script>
<!-- the main fileinput plugin file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/themes/fas/theme.min.js"></script>
<script>
$(function() {
//   'use strict'; 
  $("#mainform").steps({
    headerTag: "h2",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: 'vertical',
	onFinished: function (event, currentIndex) {
	  $("#mainform").submit();
	}
  });
});
</script>
<script>
$(document).on('change', '.custom-file-input', function () {    
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});   
</script>
<script type="text/javascript">
  // add row
  $(document).on('click', '#addRow', function () {       
      var html = '';
      html += '<div id="inputFormRow">';
      html += '<div class="input-group mb-3">';
      html += '<input type="text" name="nama_[]" aria-label="nama_[]" class="form-control" placeholder="nama">';
      html += '<input type="text" name="nik_[]" aria-label="nik_[]" class="form-control" placeholder="nik">';
      html += '<input type="text" name="alamat_[]" aria-label="alamat_[]" class="form-control" placeholder="alamat">';
      html += '<div class="input-group-append">';
      html += '<button id="removeRow" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>';
      html += '</div>';
      html += '</div>';
      $('#newRow').append(html);
  });
  // remove row
  $(document).on('click', '#removeRow', function () {
      $(this).closest('#inputFormRow').remove();
  });
</script>
@endpush