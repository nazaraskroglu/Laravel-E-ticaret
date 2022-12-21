@extends('admin.master')
@section('content')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
                <div class="card-body py-0 px-0 px-sm-3">
                  <div class="row align-items-center">
                    <div class="col-4 col-sm-3 col-xl-2">
                    </div>

                    <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                      <span>
                      </span>
                  </div>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Yeni Ekle</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
              <form action="{{route('category.create')}}" method="POST" autocomplete="off" novalidate>
                   @csrf
                  <div class="form-group">
                  <label for="Ad Soyad">Ad Soyad</label>
                  <input label="Ad Soyad" field="name" class="form-control"  placeholder="Ad soyad giriniz" >
                  </div>

                  <div class="form-group">
                <label for="exampleInputEmail1">Eposta</label>
             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Eposta adresinizi giriniz">
              <small id="emailHelp" class="form-text text-muted">E-postanızı asla başkalarıyla paylaşmayacağız.</small>
          </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Şifre</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre giriniz">
            </div>
            <div class="form-group">
            <label for="Ad Soyad">Şifrenizi tekrar giriniz</label>
            <input type="password" class="form-control" field="password_confirmation" placeholder="Şifrenizi tekrar giriniz">
            </div>

            <div class="form-check form-check-primary">
                          <label class="form-check-label">
                    <input field="is_admin" label="Yetkili Kullanıcı" class="checkbox" type="checkbox">Yetkili Kullanıcı</label>
                        </div>
            <div class="form-check form-check-primary">
              <label class="form-check-label">
          <input field="is_active" label="Aktif Kullanıcı" class="checkbox" type="checkbox">Aktif Kullanıcı</label>
        </div>
           <button type="submit" class="btn btn-primary">Kullanıcı Ekle</button>

                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </form>

@endsection
