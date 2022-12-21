@extends('admin.master')
@section('content')
    <div class="content-wrapper">
      <br><br><br><br>
      <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data"  >
           @csrf
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
       <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Genel</button>
     </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sosyal Medya</button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">İletişim</button>
  </li>
   </ul>

   <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="form-group">
    <label for="">İsim</label>
    <input  class="form-control" name="title" required="">
    </div>
    <div class="form-group">
    <label for="" >Description</label>
    <input  class="form-control" name="description" required="" >
    </div>
    <div class="form-group">
    <label for="" >Keywords</label>
    <input  class="form-control" name="keywords" required=""  >
    </div>
    <div class="form-group">
    <label for="" >Şirket</label>
    <input  class="form-control" name="company" required=""  >
    </div>
    <div class="form-group">
    <label for="" >Adres</label>
    <input  class="form-control" name="address" required=""  >
    </div>
    <div class="form-group">
    <label for="" >Tel</label>
    <input  class="form-control" name="phone" required=""  >
    </div>
    <div class="form-group">
    <label for="" >Fax</label>
    <input  class="form-control" name="fax" required=""  >
    </div>
    <div class="form-group">
    <label for="" >E-mail</label>
    <input  class="form-control" name="email" required=""  >
    </div>
    <div class="form-group">
    <label for="" >Durum</label>
    <input  class="form-control" name="status" required=""  >
    </div>
    <button type="submit" class="btn btn-primary">Kaydet</button>

  </div>


  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

    <div class="form-group">
    <label for="" >Facebook</label>
    <input  class="form-control" name="facebook" required=""  >
    </div>
    <div class="form-group">
    <label for="" >Instagram</label>
    <input  class="form-control" name="istagram" required=""  >
    </div>
    <div class="form-group">
    <label for="" >Twitter</label>
    <input  class="form-control" name="twitter" required=""  >
    </div>
    <div class="form-group">
    <label for="" >YouTube</label>
    <input  class="form-control" name="youtube" required=""  >
    </div>
    <button type="submit" class="btn btn-primary">Kaydet</button>
  </div>

  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

    <div class="form-group">
    <label for="" >Hakkımızda</label>
    <input  class="form-control" name="aboutus" required=""  >
    </div>
    <div class="form-group">
    <label for="" >İletişim</label>
    <input  class="form-control" name="contact" required=""  >
    </div>
    <div class="form-group">
    <label for="" >Referanslar</label>
    <input  class="form-control" name="referances" required=""  >
    </div>
    <div class="form-group">
    <label for="">Smtp server</label>
    <input  class="form-control" name="smtpserver" required="" placeholder="Ürün ismini giriniz" >
    </div>
    <div class="form-group">
    <label for="" >Smtp email</label>
    <input  class="form-control" name="smtpemail" required="" placeholder="Ürün tanımını giriniz" >
    </div>
    <div class="form-group">
    <label for="" >Smtp şifre</label>
    <input  class="form-control" name="semtppassword" required=""  >
    </div>
    <div class="form-group">
    <label for="" >Smtp port</label>
    <input  class="form-control" name="smtpport" required=""  >
    </div>
    <button type="submit" class="btn btn-primary">Kaydet</button>

  </div>
  </div>
</form>
    <div>

            @endsection
