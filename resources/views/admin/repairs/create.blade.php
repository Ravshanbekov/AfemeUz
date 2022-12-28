@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.repairs.store') }}" method="POST">
        @csrf
        <div class="card col-lg-12">
            <div class="card-header">
                <h4 style="margin-top: 30px;">Qo'shish</h4>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.repairs.index') }}" style="margin-left: 25px"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Tamirlash nomi Uz</label>
                    <input type="text" class="form-control form-control-sm" name="name_uz">
                </div>
                 <div class="form-group">
                    <label>Tamirlash nomi En</label>
                    <input type="text" class="form-control form-control-sm" name="name_en">
                </div>
              <div class="form-group">
                    <label>Tamirlash nomi Ru</label>
                    <input type="text" class="form-control form-control-sm" name="name_ru">
                </div>
                <button style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1">
                    <i class="fas fa-save"></i></button>
           
    </form>
    </div>
@endsection
