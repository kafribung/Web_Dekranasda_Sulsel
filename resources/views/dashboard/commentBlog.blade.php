@extends('layouts.master')
@section('title', 'Komentar Blog | Dekranasda SULSEL')
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
                            <h4 class="box-title text-center">Data Komentar Blog</h4>
                        </div>
                        <div class="table-stats">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Kegiatan</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $angkaAwal = 1
                                    @endphp
                                    @forelse ($comments as $comment)
                                    <tr>
                                        <td>{{ $angkaAwal++ }}</td>
                                        <td>{{ $comment->name }}</td>
                                        <td>{{ $comment->email }}</td>
                                        <td>{{ $comment->blog->name }}</td>
                                        <td>{!! Str::limit($comment->description, 80) !!}</td>

                                        <td>
                                            <a href="/comment-blog/{{$comment->id}}/edit"
                                                class="btn btn-outline-warning btn-sm "><i class="fa fa-edit"></i>
                                            </a>
                                            <form action="/comment-blog/{{$comment->id}}" method="POST"
                                                class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Hapus Data {{$comment->name}}?')"
                                                    class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <td class="text-center">Data Komentar masih kosong</td>
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