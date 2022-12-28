@extends('layouts.admin')

 @section('content')
     <div class="card col-lg-12">
         <div class="card-header">
             <h4 style="margin-top: 30px;">Korish</h4>
         </div>
         <div class="pull-right">
             <a href="{{ route('admin.sliders.index') }}" style="margin-left: 25px"
                 class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
         </div>
         <div class="card-body">
             <br>
             <div class="form-group">
                 <label>
                     <h6>Sarlavha Uz:</h6>
                 </label>
                 {{ $slider->title_uz }}
             </div>
              <div class="form-group">
                 <label>
                     <h6>Sarlavha Ru:</h6>
                 </label>
                 {{ $slider->title_ru }}
             </div>
              <div class="form-group">
                 <label>
                     <h6>Sarlavha En:</h6>
                 </label>
                 {{ $slider->title_en }}
             </div>
              <div class="form-group">
                 <label>
                    <h6>Faollik:</h6>
                 </label>
            {{ $slider->status == 1 ? 'faol' : 'faol emas' }}
             </div>
             <img src="{{ $slider->image }}" width="150">
         </div>
     </div>
     @endsection
     