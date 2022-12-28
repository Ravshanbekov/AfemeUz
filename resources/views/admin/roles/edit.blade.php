@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card col-lg-12">
            <div class="card-header">
                <h4 style="margin-top: 30px;">Tahrirlash</h4>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.roles.index') }}" style="margin-left: 25px"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Rol nomi</label>
                    <input type="text" value="{{ $role->name }}"
                        class="form-control form-control-sm form-control form-control-sm-sm" name="name">
                </div>
               <div class="form-group">
                    <label>Ruxsatlar:</label>
                    <br />
                    <input type="checkbox" id="option-all" onchange="checkAll(this)">
                    <label for="option-all">Hamma Ruxsatlar</label><br><br>
                    @foreach ($permission as $value)
                        <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                            {{ $value->name }}</label>
                        <br />
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                <button style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i
                        class="fas fa-edit"></i></button>
            </div>
    </form>
    </div>

    {!! Form::close() !!}
@endsection
