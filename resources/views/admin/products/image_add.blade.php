@extends('admin.master')
@section('content')
  <head>
  <style type="text/css">
   .table_t{
      margin:auto;
      width: 90%;
      margin-top: 20px;

       }

  </style>
  </head>
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
                  <h4 class="card-title">Ürün: {{$product->title}}</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
              <form action="{{route('image.store',['product_id'=>$product->id])}}" method="POST" enctype="multipart/form-data"  >
                   @csrf
                  <div class="form-group">
                  <label for="">İsim</label>
                  <input  class="form-control" name="title" required="" placeholder="Ürün ismini giriniz" >
                  </div>

                  <div class="form-group">
                  <label for="">Resim</label>
                  <input  type="file" name="image" class="form-control" required="" placeholder="Ürün resmini giriniz" >
                  </div>

           <button type="submit" class="btn btn-primary">Ekle</button>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </form>

<div class="main-panel">

    <div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
  <div class="col-12 grid-margin">
      <h4 class="card-title">Ürün Listesi</h4>

          <table class="table_t">
            <thead>
              <tr>
                <th> İsim </th>
                <th> Resim </th>
                <th> İşlemler </th>
              </tr>
            </thead>
            <tbody>
              @foreach($images as $rs)
              <tr>
                <td> {{ $rs->title }} </td>
                <td>
                   <br>
                  <img height="100" width="100" src="{{asset($rs->image)}}" >
                  <br>
                </td>

                <td>
                     <a  href="{{route('image.delete', ['id' => $rs->id])}}" onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="mdi mdi-delete badge badge-outline-danger">
                     </a>
                   </td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
