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
 <div class="container py-2">
               
    <form id="formcontoh" method="POST" action="{{route('frontend.submit')}}">      
    {{@csrf_field()}} 
        <div class="layanan-form">
        <h2 class="font-sedang-3 text-center text-info pb-3">Form Input Pelayanan</h2>        
            <div class="row">            
                <div class="col-lg-12 col-sm-12 px-2">
                  <div class="form-group">
                    <label for="">Scan/Foto KTP/SIM/Passport</label>
                    <input id="file_ktp" name="file_ktp" type="file" class="file" data-show-upload="false" data-show-caption="true" data-browse-class="btn btn-tema" data-remove-class="btn btn-dark" data-browse-label="Cari" data-msg-placeholder="Pilih file untuk diunggah" data-theme="fas">
                  </div>
                </div>                
                <div class="col-lg-12 col-sm-12 px-2">
                  <div class="form-group">
                    <label for="">Scan/Foto Kartu Keluarga</label>
                    <input id="file_kk" name="file_kk" type="file" class="file" data-show-upload="false" data-show-caption="true" data-browse-class="btn btn-tema" data-remove-class="btn btn-dark" data-browse-label="Cari" data-msg-placeholder="Pilih file untuk diunggah" data-theme="fas">
                  </div>
                </div>
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
                {{-- <div class="col-lg-12 col-sm-12 px-2">
                  <label for="">Data Anak</label>
                  <div id="inputFormRow">
                    <div class="input-group mb-3">
                        <input type="text" name="nama_anak[]" class="form-control m-input" placeholder="Nama Anak" autocomplete="off">
                        <div class="input-group-append">                
                            <button id="removeRow" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                  </div>
      
                  <div id="newRow"></div>
                  <button id="addRow" type="button" class="btn btn-info"><i class="fa fa-plus-square"></i>&nbsp; Tambah Data</button>
                </div>   --}}   
                 
                <div class="col-lg-12 col-sm-12 px-2">
                  <label for="">Data Anak</label>
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
        </div>
        <div class="form-footer">            
                <button type="submit" class="btn btn-tema">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>                     
        </div>        
    </form>
            
 </div>    
</main>
@endsection

@push('top-resource')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">

@endpush

@push('bottom-resource')
<script src="{{asset('public/frontend/js/dynamic-form.js')}}"></script>
<!-- the main fileinput plugin file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/themes/fas/theme.min.js"></script>
<script>
$("#input-id").fileinput();
</script>
<script type="text/javascript">
  // add row
  $("#addRow").click(function () {
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