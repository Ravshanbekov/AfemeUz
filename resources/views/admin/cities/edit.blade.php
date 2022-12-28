@extends('layouts.admin')

 @section('content')
     <form action="{{ route('admin.cities.update', $citie->id) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="card col-lg-12">
             <div class="card-header">
                 <h4 style="margin-top: 30px;">Tahrirlash</h4>
             </div>
             <div class="pull-right">
                <a href="{{ route('admin.cities.index') }}" style="margin-left: 25px"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
             <div class="card-body">
                 <div class="form-group">
                     <label>Shahar nomi Uz</label>
                     <input type="text" value="{{ $citie->name_uz }}" class="form-control form-control-sm" name="name_uz">
                 </div>
                  <div class="form-group">
                     <label>Shahar nomi En</label>
                     <input type="text" value="{{ $citie->name_en }}" class="form-control form-control-sm" name="name_en">
                 </div>
                  <div class="form-group">
                     <label>Shahar nomi Ru</label>
                     <input type="text" value="{{ $citie->name_ru }}" class="form-control form-control-sm" name="name_ru">
                 </div>
                 <div class="form-group">
                     <label>Viloyat nomi</label>
                     <select name="region_id" id="" class="form-control" value="{{ $citie->region_id }}">
                         @foreach ($regions as $region)
                             <option value="{{ $region->id }}"
                                 {{ $region->id == $citie->region->id ? 'selected' : '' }}>{{ $region->name_uz }}</option>
                         @endforeach
                     </select>
                 </div>
                 <button style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i class="fas fa-edit"></i></button>
     </form>
        </div>
 @endsection
