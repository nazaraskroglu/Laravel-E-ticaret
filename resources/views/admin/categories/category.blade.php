@extends('admin.master')
@section('content')

  <div class="content-wrapper">

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <li class="col-2 width-right nav-item dropdown d-none d-lg-block">
        <a href="{{route('category.create')}}" type="button" class="nav-link btn btn-success create-new-button">+ Yeni Kategori Ekle</a>
      </li>
      <br>
    <div class="row ">
  <div class="col-11 grid-margin">
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">Kategori Listesi</h4>

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th> Id </th>
                <th> parent</th>
                <th> Kategori ismi </th>
                <th> Kategori durumu </th>
                <th> İşlemler </th>
              </tr>
            </thead>
            <tbody>
              @foreach($category as $rs)
              <tr>
                  <td> {{ $rs->id }} </td>
                  <td>
                      {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                  </td>
                  <td> {{ $rs->title }} </td>
                  <td> {{ $rs->status }} </td>
                  <td>
                       <a href="{{route('category.edit', ['id' => $rs->id])}}" class="mdi mdi-account-edit badge badge-outline-success">
                       </a>
                       <a  href="{{route('category.delete', ['id' => $rs->id])}}" onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="mdi mdi-delete badge badge-outline-danger">
                       </a>
                     </td>
                </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
