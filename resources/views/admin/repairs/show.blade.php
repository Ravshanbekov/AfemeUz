@extends('layouts.admin')

 @section('content')
     <div class="card col-lg-12">
         <div class="card-header">
             <h4 style="margin-top: 30px;">Korish</h4>
         </div>
         <div class="pull-right">
            <a href="{{ route('admin.repairs.index') }}" style="margin-left: 25px"
                class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
        </div>
         <div class="card-body">
             <div class="form-group">
                 <label>
                      <h6>Tamirlash nomi Uz:</h6>
                 </label>
                 {{ $repair->name_uz }}
             </div>
              <div class="form-group">
                 <label>
                      <h6>Tamirlash nomi En:</h6>
                 </label>
                 {{ $repair->name_en }}
             </div>
              <div class="form-group">
                 <label>
                      <h6>Tamirlash nomi Ru:</h6>
                 </label>
                 {{ $repair->name_ru }}
             </div>
         </div>
     @endsection