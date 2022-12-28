@extends('layouts.admin')

 @section('content')
     <div class="card col-lg-12">
         <div class="card-header">
             <h4 style="margin-top: 30px;">Korish</h4>
         </div>
         <div class="pull-right">
             <a href="{{ route('admin.partnericons.index') }}" style="margin-left: 25px"
                 class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
         </div>
         <div class="card-body">
             <br>
             <div class="form-group">
                 <label>
                     <h6>Url Manzil:</h6>
                 </label>
                 {{ $partnericon->url }}
             </div>
             
             <img src="{{ $partnericon->icon }}" width="150">
         </div>
     </div>
     @endsection