@extends('frontend.layout.app')
@section('title', 'Kritik dan Saran')
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
    <div class="container contact-form">
        <div class="contact-image" id="content-desktop">
            <img src="{{asset('public/frontend/img/plane-paper-circle.png')}}" alt="rocket_contact"/>            
        </div>
        <form method="post">
            <h3><strong>Kritik dan Saran</strong></h3>
           <div class="row">
                <div class="col-md-5 pl-2 ml-2">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Nama" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Email" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Telepon" value="" required />
                    </div>                    
                </div>
                <div class="col-md-6 pl-2 ml-2">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Pesan" style="width: 100%; height: 150px;" required></textarea>
                    </div>
                </div>
            </div>
            <div class="separator" id="content-desktop"></div>
            <div class="row">
                <div class="col-md-10 pl-2 ml-2">
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Kirim" />
                    </div>
                </div>
            </div>
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
</style>    
@endsection
@section('bottom-resource')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
@endsection