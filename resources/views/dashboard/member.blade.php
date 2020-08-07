@extends('layouts.master')
@section('title', 'Anggota | Dekranasda SULSEL')
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
                            <h4 class="box-title text-center">Data Anggota</h4>
                            <a href="/member/create" class="btn btn-outline-primary btn-sm float-right"><i
                                    class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="table-stats">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Produk</th>
                                        <th>Kontak</th>
                                        <th>Website</th>
                                        <th>Alamat</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $angkaAwal = 1
                                    @endphp
                                    @forelse ($members as $member)
                                    <tr>
                                        <td>{{$angkaAwal++}}</td>
                                        <td>{{$member->name}}</td>
                                        <td>{{$member->product}}</td>
                                        <td>
                                            <a href="tel:{{$member->contact}}" target="_self">{{$member->contact}}</a>
                                        </td>
                                        <td>
                                            <a href="{{$member->website}}" target="_blank">{{$member->website}}</a>
                                        </td>
                                        <td>{{$member->address}}</td>
                                        <td>{!! Str::limit($member->description, 10, '..') !!}</td>
                                        <td>
                                            <a href="/member-img/{{$member->slug}}"
                                                class="btn btn-outline-dark btn-sm ">
                                                <i class="fa fa-picture-o"></i>
                                            </a>
                                            @can('isOwner', $member)
                                            <a href="/member/{{$member->slug}}/edit"
                                                class="btn btn-outline-warning btn-sm ">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="/member/{{$member->id}}" method="POST" class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Hapus Data {{$member->name}}?')"
                                                    class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                    @empty
                                    <td class="text-center">Data anggota masih kosong</td>
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