@extends('admin.master')
@section('content')
  <div class="content-wrapper">

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
                  <h4 class="card-title">Yeni Kategori Ekle</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
              <form role="form" action="{{route('category.store')}}" method="POST" enctype= "multipart /form-data" >
                   @csrf
                   <div class="form-group">
                   <label >Kategori</label>

                    <select  class="form-control" name="parent_id">
                    <option value="0" selected="selected" >Ana Kategori</option>

                    @foreach ($category as $rs)
                     <option value="{{$rs->id}}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                     @endforeach

                    </select>
                    </div>
                   <div class="form-group">
                   <label for="">Başlık</label>
                   <input type="text" class="form-control" name="title" placeholder="Kategori başlığı giriniz." >
                   </div>
                   <div class="form-group">
                   <label for="">Slug</label>
                   <input type="text" class="form-control" name="slug" placeholder=" " >
                   </div>
                   <div class="form-group">
                   <label for="">Tanım</label>
                   <input  class="form-control" name="description"  >
                   </div>
                   <div class="form-group">
                   <label >Durum</label>
                    <select  name="status">
                    <option selected="selected">False</option>
                    <option >True</option>
                  </select>
                    </div>

                     <div class="form-group">
                     <label>meta_title</label>
                     <input type="text" name="meta_title" class="form-control" >
                     </div>
                     <div class="form-group">
                     <label>meta_descrip</label>
                     <input type="text" name="meta_descrip" class="form-control" >
                     </div>
                     <div class="form-group">
                     <label>meta_keywords</label>
                     <input type="text" name="meta_keywords" class="form-control"   >
                     </div>

                <button type="submit" class="btn btn-primary">Kategori Ekle</button>
              </form>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

</div>
@endsection
