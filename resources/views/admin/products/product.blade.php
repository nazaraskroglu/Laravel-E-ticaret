@extends('admin.master')
@section('content')

<head>
<style type="text/css">
 .table_t{
    margin:auto;
    width: 100%;
    margin-top: 20px;

     }

</style>
</head>

  <div class="main-panel">
    <div class="content-wrapper">

      @if(session()->has('message'))
        <div class="alert alert-success">
           <strong>Başarılı!</strong>
          {{session()->get('message')}}
        </div>
      @endif
      <li class="col-2 width-right nav-item dropdown d-none d-lg-block">
        <a href="{{route('product.create')}}" type="button" class="nav-link btn btn-success create-new-button">+ Yeni Ürün Ekle</a>
      </li>
    <br>
    <div class="row ">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
  <div class="col-12 grid-margin">
      <h4 class="card-title">Ürün Listesi</h4>

          <table class="table_t">
            <thead>
              <tr>
                <th> Id </th>
                <th> Resim </th>
                <th> Resim Galerisi </th>
                <th> İsim </th>
                <th> Kategori </th>
                <th> Miktar </th>
                <th> Ücret </th>
                <th> Durum </th>
                <th> İşlemler </th>
              </tr>
            </thead>
            <tbody>
              @foreach($product as $rs)
              <tr>

                <td> {{ $rs->id }} </td>
                <td>
                   <br>
                  <img height="100" width="100" src="{{asset($rs->image)}}" >
                  <br>
                </td>
                <td>                                                       <!--YENİ WİNDOWS PENCERESİNDE AÇAR -->
               <a href="{{route('image.create',['product_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=900, height=600')">
                 <img src="https://helpinghands.neocities.org/images/gallery-icon.png" width="50"></a>
               </td>
                <td> {{ $rs->title }} </td>
                <td>
                    {{$rs->category->title}}
                </td>
                <td> {{ $rs->quantity }} </td>
                <td> {{ $rs->price }} </td>
                <td> {{ $rs->status }} </td>
                <td>
                     <a href="{{route('product.edit', ['id' => $rs->id])}}" class="mdi mdi-account-edit badge badge-outline-success">
                     </a>
                     <a  href="{{route('product.delete', ['id' => $rs->id])}}" onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="mdi mdi-delete badge badge-outline-danger">
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
