@extends('admin.master')
@section('content')

        <div class="content-wrapper">

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <br>
                    <div class="row ">
                        <div class="col-11 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Kullanıcı Listesi</h4>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th> Ad-Soyad </th>
                                                <th> Eposta</th>
                                                <th> Durumu </th>
                                                <th> İşlemler </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($users) > 0 )
                                                @foreach($users as $rs)
                                                <tr>
                                                    <td> {{$rs->name}}</td>
                                                    <td> {{$rs->email}}</td>
                                                    <td> {{$rs->is_active}}</td>
                                                    <td>
                                                        <a  href="{{route('user.delete', ['id' => $rs->id])}}" onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="mdi mdi-delete badge badge-outline-danger">
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @else
                                                   <tr>
                                                       <td colspan="5">Herhangi bir kullanıcı bulunamadı.</td>
                                                   </tr>
                                            @endif
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


