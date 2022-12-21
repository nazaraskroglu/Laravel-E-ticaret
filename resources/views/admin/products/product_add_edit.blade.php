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
                  <h4 class="card-title">Ürünü güncelle</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
              <form action="{{route('product.update' ,['id'=>$product->id])}}"  method="POST" enctype="multipart/form-data"  >
                   @csrf
                  <div class="form-group">
                  <label for="">İsim</label>
                  <input  class="form-control" name="title" value="{{$product->title}}" required="" placeholder="Ürün ismini giriniz" >
                  </div>
                  <div class="form-group">
                  <label for="" >Tanım</label>
                  <input  class="form-control" name="description" value="{{$product->description}}" required="" placeholder="Ürün tanımını giriniz" >
                  </div>
                  <div class="form-group">
                  <label for="">Resim</label>
                  <img height="100" width="100" src="{{asset($product->image)}}" >
                  </div>
                  <div class="form-group">
                  <label for="">Resim</label>
                  <input  type="file" name="image" class="form-control" value="{{$product->image}}" >
                  </div>
                  <div class="form-group">
                  <label for="" >Fiyat</label>
                  <input type="number" name="price" class="form-control" value="{{$product->price}}" required="" placeholder="Ürün fiyatını giriniz" >
                  </div>
                  <div class="form-group">
                  <label for="" >İndirimli Fiyat</label>
                  <input type="number" name="discount_price" class="form-control" value="{{$product->discount_price}}" placeholder="Ürün fiyatını giriniz" >
                  </div>
                  <div class="form-group">
                  <label >Miktar</label>
                  <input type="number" name="quantity" class="form-control" value="{{$product->quantity}}" required="" placeholder="Ürün miktarı giriniz" >
                  </div>

                  <div class="form-group">
                  <label >Kategori</label>
                   <select  class="form-control" name="category_id"  required="">
                       @foreach ($data as $rs)
                           <option value="{{$rs->id}}">
                               {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}
                           </option>
                       @endforeach
                   </select>
                   </div>

           <button type="submit" class="btn btn-primary">Güncelle</button>
              </form>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


@endsection
