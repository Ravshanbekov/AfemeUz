@extends('layouts.admin')

  @section('content')
      <form action="{{ route('admin.cities.store') }}" method="POST">
          @csrf
          <div class="card col-lg-12">
              <div class="card-header">
                  <h4 style="margin-top: 30px;">Qo'shish</h4>
              </div>
              <div class="pull-right">
                <a href="{{ route('admin.cities.index') }}" style="margin-left: 25px"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
              <div class="card-body">
                  <div class="form-group">
                      <label>Shahar nomi Uz</label>
                      <input type="text" class="form-control form-control-sm" name="name_uz">
                  </div>
                   <div class="form-group">
                      <label>Shahar nomi En</label>
                      <input type="text" class="form-control form-control-sm" name="name_en">
                  </div>
                   <div class="form-group">
                      <label>Shahar nomi Ru</label>
                      <input type="text" class="form-control form-control-sm" name="name_ru">
                  </div>
                  <div class="form-group">
                      <label>Viloyat nomi</label>
                      <select name="region_id" id="" class="form-control">
                          @foreach ($regions as $region)
                              <option value="{{ $region->id }}">{{ $region->name_uz }}</option>
                          @endforeach
                      </select>
                  </div>
                      <button style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i
                              class="fas fa-save"></i></button>
                 
      </form>
      </div>
  @endsection