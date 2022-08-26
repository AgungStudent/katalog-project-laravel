@extends('template.dashboard')

@section('header')
<i class="ml-2 fas fa-store"></i> Produk
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active">Produk</li>
@endsection

@section('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('product.create')}}" class="btn btn-primary">Tambah Produk</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Image</th>
                    <th class="max-width-action">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$product->name}}</td>
                    <td><img class="rounded" width="100" height="100" src="{{ asset('storage/'. $product->image) }}"
                            alt="product" /></td>
                    <td class="mx-width-action">
                        <a href={{ route('product.edit', $product->id) }} as="button"
                            class="btn btn-success">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{route('detail',$product->id)}}" class="btn btn-info">
                            <i class="fas fa-eye"></i>
                        </a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="post"
                            class="d-inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger show-confirm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Image</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
        @endsection

        @section('scripts')
        <!-- DataTables -->
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

        @if (session('success'))
        <script>
            Toast.fire({
                icon: 'success',
                title: '{{session('success')}}'
            })
        </script>
        @endif

        <script>
            $('.show-confirm').click(function (event) {
                event.preventDefault()
                const form = $(this).closest('form')

                Swal.fire({
                title: 'Apa anda yakin?',
                text: `ingin menghapus data produk ini?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete'
                }).then((result) => {
                if (result.value) {
                    form.submit()
                }
                })
            })
        </script>

        <script>
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        </script>

        @endsection
