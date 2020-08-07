@extends('layouts.master')
@section('title', 'Kegiatan | Dekranasda SULSEL')
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
                            <h4 class="box-title text-center">Data Kegiatan</h4>
                            <a href="/activity/create" class="btn btn-outline-primary btn-sm float-right">
                                <i class="fa fa-plus"></i>
                            </a>
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
                                    @forelse ($activities as $activity)
                                    <tr>
                                        <td>{{$angkaAwal}}</td>
                                        <td>
                                            <img src="{{ url($activity->img) }}" title="Gambar {{ $activity->name }}"
                                                alt="error" width="80" height="80">
                                        </td>
                                        <td>{{$activity->name}}</td>
                                        <td>{{$activity->tgl}}</td>
                                        <td>{!! Str::limit($activity->description, 30) !!}</td>

                                        <td>
                                            <a href="/activity/{{$activity->slug}}/edit"
                                                class="btn btn-outline-warning btn-sm "><i class="fa fa-edit"></i></a>
                                            <form action="/activity/{{$activity->id}}" method="POST"
                                                class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    onclick="return confirm('Hapus Data {{$activity->name}}?')"
                                                    class="btn btn-outline-danger btn-sm"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                    $angkaAwal++
                                    @endphp
                                    @empty
                                    <td class="text-center">Data Kegiatan masih kosong</td>
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