@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Xamkorlarimiz</h4>
                </div>
                @if (session('success1'))
                    <center>
                        <div class="alert alert-success alert-dismissible show  fade col-lg-6">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('success1') }} <i class="icon fas fa-check"></i></h5>
                            </div>
                        </div>
                    </center>
                @elseif (session('success2'))
                    <center>
                        <div class="alert alert-info alert-dismissible show fade col-lg-6">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('success2') }} <i class="icon fas fa-check"></i></h5>
                            </div>
                        </div>
                    </center>
                @elseif (session('success3'))
                    <center>
                        <div class="alert alert-danger alert-dismissible show fade col-lg-6">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('success3') }} <i class="icon fas fa-check"></i></h5>
                            </div>
                        </div>
                    </center>
                @endif

                @can('partner-create')
                    <a href="{{ route('admin.partners.create') }}" style="margin-left: 25px"
                        class="btn btn-outline-success btn-sm col-lg-2"><i class="fas fa-plus"></i></a>
                @endcan
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr style="text-align-last: center">
                                    <th style="width: 25px" scope="col">№</th>
                                    <th scope="col">Sarlavha</th>
                                    <th scope="col">Tafsifi</th>
                                    <th scope="col">Kiritilgan Vaqti</th>
                                    <th scope="col">Tahrirlangan Vaqti</th>
                                    <th style="width: 50px" scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                @foreach ($partners as $partner)
                                    <tr style="text-align-last: center">
                                        <th>{{ $loop->iteration }}</th>
                                        <th>{{ $partner->title_uz }}</th>
                                        <th>{!! $partner->body_uz !!}</th>
                                        <td>{{ $partner->created_at->format('Y-m-d'); }}</td>
                                        <td>{{ $partner->updated_at->format('Y-m-d'); }}</td>
                                        <td style="width: 50px">
                                            @can('partner-edit')
                                                <a style="margin-top: 15px" class="btn btn-info btn btn-block btn-sm"
                                                    href="{{ route('admin.partners.edit', $partner->id) }}">
                                                    <i class="far fa-edit text-white"></i></a>
                                            @endcan
                                            @can('partner-list')
                                                <a class="btn btn-secondary btn btn-block  btn-sm"
                                                    href="{{ route('admin.partners.show', $partner->id) }}">
                                                    <i class="fas fa-eye text-white"></i></a>
                                            @endcan
                                            @can('partner-delete')
                                                <form action="{{ route('admin.partners.destroy', $partner->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="margin-top: 8px;" type="submit" class="btn btn-block btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i></button>
                                            @endcan
                                             <br>
                                        </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/assets/bundles/datatables/datatables.min.js"></script>
    <script src="/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/js/page/datatables.js"></script>
@endsection
