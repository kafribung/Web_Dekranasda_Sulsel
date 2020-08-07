@extends('layouts.master')
@section('title', 'Galeri Anggota | Dekranasda SULSEL')
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
                            <h4 class="box-title text-center">Galeri {{$member->name}}</h4>
                            @can('isOwner', $member)
                            <a href="/member-img/create/{{$member->slug}}"
                                class="btn btn-outline-primary btn-sm float-right"><i class="fa fa-plus"></i>
                            </a>
                            @endcan
                        </div>
                        <div class="table-stats">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Anggota</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $angkaAwal = 1
                                    @endphp
                                    @forelse ($member->membersImgs as $memberImg)
                                    <tr>
                                        <td>{{$angkaAwal++}}</td>
                                        <td>
                                            <img src="{{url($memberImg->takeImg)}}" alt="Error"
                                                title="Gambar {{$memberImg->member->name}}" width="150">
                                        </td>
                                        <td>{{$memberImg->member->name}}</td>
                                        <td>
                                            @can('isOwner', $memberImg)
                                            <a href="/member-img/{{$memberImg->id}}/edit"
                                                class="btn btn-outline-warning btn-sm "><i class="fa fa-edit"></i></a>
                                            <form action="/member-img/{{$memberImg->id}}" method="POST"
                                                class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Hapus Data {{$memberImg->img}}?')"
                                                    class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                    @empty
                                    <td class="text-center">Gallery {{$member->name}} masih kosong</td>
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