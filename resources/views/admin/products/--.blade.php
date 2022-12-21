@extends('admin.master')

<head>
     @FilemanagerScript
 </head>
 <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

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
                  <h4 class="card-title">Yeni Ürün Ekle</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
              <form action="{{route('product.update' , ['id'=>$product->id] )}}" method="post" enctype="multipart/form-data"  >
                   @csrf
                  <div class="form-group">
                  <label for="">Kategori</label>
                  <input name="category_id" value="{{$product->category_id}}" class="form-control"  placeholder="Kategori giriniz" >
                  </div>
                  <div class="form-group">
                  <label for="">İsim</label>
                  <input  class="form-control" value="{{$product->title}}" name="title" placeholder="Ürün ismini giriniz" >
                  </div>
                  <div class="form-group">
                  <label for="">Meta keywords</label>
                  <input class="form-control" value="{{$product->keywords}}" name="keywords" placeholder="Anahtar kelime giriniz" >
                  </div>
                  <div class="form-group">
                  <label for="" >Tanım</label>
                  <input  class="form-control"value="{{$product->title}}" name="description"  placeholder="Ürün tanımını giriniz" >
                  </div>
                  <div class="form-group">
                  <label for="">Resim</label>
                  <input  type="file" name="image" value="{{$product->image}}" class="form-control"  placeholder="Ürün resmini giriniz" >
                  </div>
                  <div class="form-group">
                  <label for="" >Fiyat</label>
                  <input type="number" name="price" value="{{$product->price}}" class="form-control"  placeholder="Ürün fiyatını giriniz" >
                  </div>
                  <div class="form-group">
                  <label >Miktar</label>
                  <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control"  placeholder="Ürün miktarı giriniz" >
                  </div>
                  <div class="form-group">
                  <label >Min Miktar</label>
                  <input type="number" name="minquantity" value="{{$product->minquantity}}" class="form-control"  placeholder="Ürün min miktarı giriniz" >
                  </div>
                  <div class="form-group">
                  <label >Ürün Detayı</label>
                  <input  class="form-control" name="detail"  value="{{$product->detail}}" placeholder="Ürün detayını giriniz" >
                  <script>
                  window.onload = function () {
                  CKEDITOR.replace('detail', {
                  filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                  });
                  }
                 </script>
                  </div>
                  <div class="form-group">
                  <label >Slug</label>
                  <input type="text" name="slug" value="{{$product->slug}}" class="form-control"  placeholder=" " >
                  </div>
                  <div class="form-group">
                  <label >Durum</label>
                   <select class="form-control" name="status" value="{{$product->status}}">
                    <option value="{{$category->name}}" selected="">Aktif</option>
                    <option >Pasif</option>
                   </select>
                   </div>

           <button type="submit" class="btn btn-primary">Ürünü Ekle</button>

                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </form>

@endsection
