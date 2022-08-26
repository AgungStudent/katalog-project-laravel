@extends('template.dashboard')

@section('header')
<i class="nav-icon fas fa-cash-register ml-2"></i> Finishing Machine
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active">Finishing Machine</li>
@endsection

@section('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('finishing-machine.create')}}" class="btn btn-primary">Tambah Finishing Machine</a>
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
                @forelse ($finishingMachines as $machine)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$machine->name}}</td>
                    <td><img class="rounded" width="100" height="100" src="{{ asset('storage/'. $machine->image) }}"
                            alt="finishing machine" /></td>
                    <td class="mx-width-action">
                        <a href={{ route('finishing-machine.edit', $machine->id) }} as="button"
                            class="btn btn-success">
                            <i class="fas fa-edit"></i>
                        </a>

                        <button type="button" class="btn btn-info" data-toggle="modal"
                            data-target="#myModal{{$machine->id}}">
                            <i class="fas fa-eye"></i>
                        </button>

                        <form action="{{ route('finishing-machine.destroy', $machine->id) }}" method="post"
                            class="d-inline-block">
                            @method('delete')
                            @csrf
                            <button type="button" class="btn btn-danger show-confirm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <!-- Modal Show -->
                <div class="modal fade" id="myModal{{$machine->id}}" tabindex="-1" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Finishing Machine</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="card py-3 shadow-sm h-100  ">
                                        <div class="text-center"><a href="/detail/1"><img
                                                    class="image-zoom rounded img-thumbnail"
                                                    src="{{asset('storage/'.$machine->image)}}"
                                                    width="90%" alt=""></a>
                                            <div class="card-body px-2">
                                                <h5 class="text-bold fs-1 heading-color">{{$machine->name}}</h5>
                                                <p class="mb-0 card-text text-left">{!!$machine->description!!}</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


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
                text: `ingin menghapus data ini?`,
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
