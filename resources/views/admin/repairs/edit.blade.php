@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.repairs.update', $repair->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card col-lg-12">
            <div class="card-header">
                <h4 style="margin-top: 30px;">Tahrirlsh</h4>
            </div>
             <div class="pull-right">
                <a href="{{ route('admin.repairs.index') }}" style="margin-left: 25px"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Tamirlash nomi Uz</label>
                    <input type="text" value="{{ $repair->name_uz }}" class="form-control form-control-sm" name="name_uz">
                </div>
                 <div class="form-group">
                    <label>Tamirlash nomi En</label>
                    <input type="text" value="{{ $repair->name_en }}" class="form-control form-control-sm" name="name_en">
                </div>
                 <div class="form-group">
                    <label>Tamirlash nomi Ru</label>
                    <input type="text" value="{{ $repair->name_ru }}" class="form-control form-control-sm" name="name_ru">
                </div>
                <button style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i class="fas fa-edit"></i></button>
    </form>
       </div>
@endsection
