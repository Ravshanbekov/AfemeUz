@extends('layouts.admin')

 @section('content')
     <div class="card col-lg-12">
         <div class="card-header">
             <h4 style="margin-top: 30px;">Korish</h4>
         </div>
         <div class="pull-right">
             <a href="{{ route('admin.partners.index') }}" style="margin-left: 25px"
                 class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
         </div>
         <div class="card-body">
             <br>
             <div class="form-group">
                 <label>
                     <h6>Sarlavha Uz:</h6>
                 </label>
                 {{ $partner->title_uz }}
             </div>
              <div class="form-group">
                 <label>
                     <h6>Sarlavha Ru:</h6>
                 </label>
                 {{ $partner->title_ru }}
             </div>
              <div class="form-group">
                 <label>
                     <h6>Sarlavha En:</h6>
                 </label>
                 {{ $partner->title_en }}
             </div>
              <div class="form-group">
                 <label>
                     <h6>Tafsifi Uz:</h6>
                 </label>
                 {!! $partner->body_uz !!}
             </div>
              <div class="form-group">
                 <label>
                     <h6>Tafsifi Ru:</h6>
                 </label>
                 {!! $partner->body_ru !!}
             </div>
              <div class="form-group">
                 <label>
                     <h6>Tafsifi En:</h6>
                 </label>
                 {!! $partner->body_en !!}
             </div>
         </div>
     </div>
     @endsection
     