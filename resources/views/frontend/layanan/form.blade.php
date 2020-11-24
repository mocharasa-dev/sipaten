@extends('frontend.layout.app')
@section('title', 'Contoh Form | Sipaten')
@section('Meta')
<meta name="description" content="Pelayanan Administrasi Online Kecamatan" />
<meta name="keywords" content="Sipaten" />
<meta property="og:title" content="Sipaten" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Sipaten" />
<meta property="og:image" content="{{asset('public/assets/default.jpg')}}" />
@endsection

@section('content')
@include('frontend.layout.menu')
<main class="bg-parallax">
 <div class="container py-2">
               
    <form>      
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
                    <label for="">Nomor KTP/SIM/Passport</label>
                    <input type="text" class="form-control" name="nik" placeholder="">
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
                <div class="col-lg-12 col-sm-12 px-2">
                  <label for="">Field Dynamic</label>
                  <div class="form-group" id="dynamic_form">                    
                    <div class="row">
                      <div class="col-md-3 pr-1">
                          <input type="text" name="p_name" id="p_name" placeholder="Enter Product Name" class="form-control">
                      </div>
                      <div class="col-md-3 pr-1">
                          <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter Product Quantity" onkeyup = "if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')";>
                      </div>
                      <div class="col-md-4 pr-1">
                          <textarea class="form-control" rows="1" name="remarks" placeholder="Enter Remarks" id="remarks"></textarea>
                      </div>
                      <div class="button-group">
                          <a href="javascript:void(0)" class="btn btn-info" id="plus5" style="height:calc(1.5em + 0.75rem + 2px);padding-top:10px"><i class="fa fa-plus"></i></a>
                          <a href="javascript:void(0)" class="btn btn-danger" id="minus5" style="height:calc(1.5em + 0.75rem + 2px);padding-top:10px"><i class="fa fa-trash"></i></a>
                      </div>
                    </div>
                  </div>  
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

@section('top-resource')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">

@endsection

@section('bottom-resource')
<script src="{{asset('public/frontend/js/dynamic-form.js')}}"></script>
<!-- the main fileinput plugin file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/themes/fas/theme.min.js"></script>
<script>
$("#input-id").fileinput();
</script>
<script>
  $(document).ready(function() {
    var dynamic_form =  $("#dynamic_form").dynamicForm("#dynamic_form","#plus5", "#minus5", {
      limit:10,
      formPrefix : "dynamic_form",
      normalizeFullForm : false
  });

    dynamic_form.inject([{p_name: 'Hemant',quantity: '123',remarks: 'testing remark'},{p_name: 'Harshal',quantity: '123',remarks: 'testing remark'}]);

  $("#dynamic_form #minus5").on('click', function(){
    var initDynamicId = $(this).closest('#dynamic_form').parent().find("[id^='dynamic_form']").length;
    if (initDynamicId === 2) {
      $(this).closest('#dynamic_form').next().find('#minus5').hide();
    }
    $(this).closest('#dynamic_form').remove();
  });

  $('form').on('submit', function(event){
      var values = {};
  $.each($('form').serializeArray(), function(i, field) {
      values[field.name] = field.value;
  });
  console.log(values)
      event.preventDefault();
    })
  });
</script>
@endsection