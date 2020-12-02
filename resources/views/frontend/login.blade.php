@extends('frontend.layout.app')
@section('title', 'Login | Sipaten')
@push('Meta')
<meta name="description" content="Pelayanan Administrasi Online Kecamatan" />
<meta name="keywords" content="Sipaten" />
<meta property="og:title" content="Sipaten" />
<meta property="og:type" content="Sipaten" />
<meta property="og:image" content="{{asset('public/assets/default.jpg')}}" />
@endpush

@section('content')
@include('frontend.layout.menu')
<main>
 <div class="bg-parallax py-2">
    <div class="container">
     
        <div class="login-form">
            <form name="login">
                <div class="form-icon">
                    <span><i class="fas fa-user"></i></span>
                </div>
                <div class="form-group row">
                    <input type="text" class="form-control item" name="nik" id="nik" placeholder="NIK" required oninvalid="this.setCustomValidity('Silahkan Masukkan NIK')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group row">
                    <div class="input-group col-lg-12 col-sm-12">                      
                      <input type="password" class="form-control item" name="password" id="password" placeholder="Password" autocomplete="new-password" required oninvalid="this.setCustomValidity('Silahkan Masukkan Password')" oninput="setCustomValidity('')">                      
                      <div class="input-group-append">
                        <span class="input-group-text"><i toggle="#password-field" class="fa fa-eye-slash toggle-password"></i></span>
                      </div>
                    </div>                    
                </div>                
                <div class="form-group float-right">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" id="login" class="btn btn-tema">Login</button>                    
                </div>
            </form>
            <div class="form-footer">
                <h5 class="font-sedang-1">Tidak bisa masuk?<br>
                    Daftar <a href="">disini</a> atau <a href="">reset password</a> anda.</h5>                
            </div>
        </div>

    </div>
 </div>    
</main>
@endsection

@push('top-resource')
<style>
.login-form{
	padding: 50px 0;
}
.login-form form{
    background-color: #fff;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}
.login-form .form-icon{
	text-align: center;
    background-color: #17a2b8;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 100px;
    height: 100px;
    margin: auto;
    padding-top: 25px;
    margin-bottom: 35px;
    line-height: 100px;
}
.login-form .item{
	border-radius: 10px;    
  padding: 10px 20px;
}
.login-form .item:focus{
	box-shadow: 0 0 10px #17a2b8;
}
.login-form .input-group-append > .input-group-text{  
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}
.login-form .form-footer{
    max-width: 600px;
    background-color: #fff;
    margin: auto;
    padding: 35px 0;
    text-align: center;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    color: #9fadca;
    border-top: 1px solid #dee9ff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}
@media (max-width: 576px) {
    .login-form form{
        padding: 50px 20px;
    }
    .login-form .form-icon{
        width: 80px;
        height: 80px;
        font-size: 30px;
        line-height: 70px;
    }
}
</style>
@endpush
@push('bottom-resource')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
{{-- <script>
$(function() {  
  $("form[name='login']").validate({    
    rules: {   
      nik       : "required",      
      password: {
        required    : true,
        minlength   : 6
      },    
    },    
    messages: {
      nik       : "Silahkan masukkan NIK Anda",   
      password: {
        required: "Silahkan masukkan password Anda",
        minlength: "Password harus berisi minimal 6 karakter"
      },        
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
</script>  --}}
<script>
$(document).on('click', '#login', function() {
  // Swal.fire({
  //       title: 'Success!',
  //       text: 'Berhasil',
  //       icon: 'success',
  //       confirmButtonText: 'Ok'
  // });
});
$(document).on('click', '.toggle-password', function() {
  $(this).toggleClass("fa-eye-slash fa-eye");
  var input = $("#password");
  input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
@endpush