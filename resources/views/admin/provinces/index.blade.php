@extends('layouts.admin_template')

@section('title')
<title>Manajemen Provinsi</title>
@endsection

@section('content-title')
<h1>Manajemen Provinsi</h1>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                @if (session("success"))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>

                        {{ session("success") }}
                    </div>
                </div>
                @endif

                @if (session("error"))
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>

                        {{ session("error") }}
                    </div>
                </div>
                @endif

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Provinsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($provinces as $province)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $province->name }}</td>
                            <td>
                                <form action="{{ route('admin.provinces.destroy', $province->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")

                                    <a href="{{ route('admin.provinces.edit', $province->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>

                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada provinsi ...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $provinces->links() }}
            </div>
        </div>
    </div>
</div>
@endsection