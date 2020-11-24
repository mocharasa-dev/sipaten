@extends('frontend.layout.app')
@section('title', 'Register | Sipaten')
@section('Meta')
<meta name="description" content="Pelayanan Administrasi Online Kecamatan" />
<meta name="keywords" content="Sipaten" />
<meta property="og:title" content="Sipaten" />
<meta property="og:type" content="Sipaten" />
<meta property="og:image" content="{{asset('public/assets/default.jpg')}}" />
@endsection

@section('content')
@include('frontend.layout.menu')
<main class="bg-parallax">

    <div class="container py-2 my-2">
        {{-- <div class="card">
            <form action="">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <label for="">Text</label>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <input type="text" name="" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <label for="">Text</label>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <input type="text" name="" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <label for="">Text</label>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <input type="text" name="" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <label for="">Text</label>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <input type="text" name="" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <label for="">Text</label>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <input type="text" name="" class="form-control" placeholder="">
                    </div>
                </div>
                <button type="reset"></button>
                <button type="submit"></button>
            </form>
        </div> --}}
        <form name="registration">
            <div class="main-form">            
                <div class="form-icon">
                    <span><i class="fas fa-user"></i></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" name="nik" id="nik" placeholder="NIK">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" name="nama" id="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" name="username" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control item" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control item" name="password_confirm" id="password_confirm" placeholder="Konfirmasi Password">
                </div>                
                <div class="form-group">
                    <input type="text" class="form-control item" name="telepon" id="telepon" placeholder="Telepon">
                </div>
                <div class="form-group">
                    <textarea class="form-control item" rows="4" name="alamat" id="alamat" placeholder="Alamat Lengkap"></textarea>
                </div>
                
            </div>
            <div class="form-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-tema">Registrasi</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>            
        </form>

    </div>

</main>
@endsection

@section('top-resource')
<style>

</style>
@endsection
@section('bottom-resource')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script>
$(function() {  
  $("form[name='registration']").validate({    
    rules: {   
      nik       : "required", 
      nama      : "required",
      username  : "required",
      telepon   : "required",
      alamat    : "required",
      email: {
        required    : true,      
        email       : true
      },
      password: {
        required    : true,
        minlength   : 6
      },
      password_confirm: {
        required    : true,
        minlength   : 6,
        equalTo     : "#password"
      }
    },    
    messages: {
      nik       : "Silahkan masukkan NIK Anda",
      nama      : "Silahkan masukkan nama Anda",
      username  : "Silahkan masukkan username Anda",      
      telepon   : "Silahkan masukkan nomor telepon Anda",
      alamat    : "Silahkan masukkan alamat lengkap Anda",      
      password: {
        required: "Silahkan masukkan password Anda",
        minlength: "Password harus berisi minimal 6 karakter"
      },   
      password_confirm: {
        required     : "Silahkan masukkan password Anda",       
        minlength   : "Password harus berisi minimal 6 karakter",
        equalTo     : "Password tidak sesuai"
      },   
      email: "Silahkan masukkan email yang valid"
    },    
    submitHandler: function(form) {      
      Swal.fire({
        title: 'Success!',
        text: 'Berhasil',
        icon: 'success',
        confirmButtonText: 'Ok'
      });
      //form.submit();
    }
  });
});
</script> 
@endsection