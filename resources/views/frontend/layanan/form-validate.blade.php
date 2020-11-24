@extends('frontend.layout.app')
@section('title', 'Validate Example')
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
    <div class="container py-3 my-2">
        <h2>Validate Example</h2>
        <form action="" name="registration">
      
          <label for="firstname">First Name</label>
          <input type="text" name="firstname" id="firstname" placeholder="John"/>
      
          <label for="lastname">Last Name</label>
          <input type="text" name="lastname" id="lastname" placeholder="Doe"/>
      
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="john@doe.com"/>
      
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"/>
      
          <button type="submit">Register</button>
      
        </form>
    </div>
</main>
@endsection

@section('top-resource')
<style>
.contact-form{
    background: #fff;
    margin-top: 7%;
    margin-bottom: 5%;
    width: 70%;
    border-radius: 10px;
}
.contact-form .form-control{
    border-radius:10px;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    /* transform: rotate(9deg); */
}
.contact-form form{
    padding-top: 10%;
    padding-left: 10%;    
    padding-right: 10%; 
    padding-bottom: 15%;
}
.contact-form form .row{
    margin-bottom: -5%;
}
.contact-form form .separator{
    margin: 15px;
    padding: 15px;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color:#17a2b8;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding-top: 10px;
    padding-bottom: 10px;
    background: #17a2b8;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
form {
  padding: 20px;
  background: #2c3e50;
  color: #fff;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
form label,
form input,
form button {
  border: 0;
  margin-bottom: 3px;
  display: block;
  width: 100%;
}
form input {
  height: 25px;
  line-height: 25px;
  background: #fff;
  color: #000;
  padding: 0 6px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
form button {
  height: 30px;
  line-height: 30px;
  background: #e67e22;
  color: #fff;
  margin-top: 10px;
  cursor: pointer;
}
form .error {
  color: #ff0000;
}
</style>    
@endsection
@section('bottom-resource')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script>
// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 6
      }
    },
    // Specify validation error messages
    messages: {
      firstname: "Silahkan masukkan nama Anda",
      lastname: "Silahkan masukkan nama Anda",
      password: {
        required: "Silahkan masukkan password yang baik dan benar",
        minlength: "Password harus berisi minimal 6 karakter"
      },
      email: "Silahkan masukkan email yang valid"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {      
      Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
      });
      //form.submit();
    }
  });
});
</script>
<script type="text/javascript">
    function deleteConfirmation(id) {
        swal({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type    : 'POST',
                    url     : "{{url('/delete')}}/" + id,
                    data    : {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                        } else {
                            swal("Error!", results.message, "error");
                        }
                    }
                });
            } else {
            e.dismiss;
            }
        }, 
        function (dismiss) {
            return false;
        })
    }
    </script>
@endsection