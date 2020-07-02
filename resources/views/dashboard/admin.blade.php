@extends('layouts.master')
@section('title', 'Admin | Dekranasda SULSEL')
@section('content')

<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">

        @if (session('msg'))
            <p class="alert alert-info">{{session('msg')}}</p>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="box-title text-center">Data Admin</h4>
                            <a href="/admin/create" class="btn btn-outline-primary btn-sm float-right"><i class="fa fa-plus"></i></a>
                        </div>

                        <div class="table-stats">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Peran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $angkaAwal =  1
                                    @endphp
                                    @forelse ($admins as $admin)
                                    <tr>
                                        <td>{{$angkaAwal}}</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="admin/create"><img class="rounded-circle" src="{{url($admin->img)}}" alt="Error" width="40" height="40"></a>
                                            </div>
                                        </td>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->role == 1 ? 'Admin' : 'Ilegal'}}</td>
                            
                                        <td>
                                            <a href="/admin/{{$admin->email}}/edit" class="btn btn-outline-warning btn-sm "><i class="fa fa-edit"></i></a>
                            
                                            <form action="/admin/{{$admin->id}}" method="POST" class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')
                            
                                                <button type="submit" onclick="return confirm('Hapus Data {{$admin->name}}?')" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $angkaAwal++
                                    @endphp
                                    @empty
                                        <td class="text-center">Data Admin Masih Kosong</td>
                                    @endforelse
                            
                                </tbody>
                            </table>
                           
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>

        <!-- /#add-category -->
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->


    
@endsection
