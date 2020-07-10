@extends('layouts.master')
@section('title', 'Blog | Dekranasda SULSEL')
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
                            <h4 class="box-title text-center">Data Blog</h4>
                            <a href="/blog/create" class="btn btn-outline-primary btn-sm float-right"><i class="fa fa-plus"></i></a>
                        </div>

                        <div class="table-stats">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Tgl</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $angkaAwal = 1
                                    @endphp
                                    @forelse ($blogs as $blog)
                                    <tr>
                                        <td>{{$angkaAwal}}</td>
                                        <td>
                                            <img src="{{ url($blog->img) }}" title="Gambar {{ $blog->name }}" alt="error" width="80" height="80">
                                        </td>
                                        <td>{{$blog->name}}</td>
                                        <td>{{$blog->tgl}}</td>
                                        <td>{!! Str::limit($blog->description, 30) !!}</td>

                                        <td>
                                            <a href="/blog/{{$blog->slug}}/edit" class="btn btn-outline-warning btn-sm "><i class="fa fa-edit"></i></a>
                                            <form action="/blog/{{$blog->id}}" method="POST" class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" onclick="return confirm('Hapus Data {{$blog->name}}?')" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                    $angkaAwal++
                                    @endphp
                                    @empty
                                    <td class="text-center">Data Blog masih kosong</td>
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
