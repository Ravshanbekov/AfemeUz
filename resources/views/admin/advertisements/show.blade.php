@extends('layouts.admin')

 @section('content')
     <div class="card col-lg-12">
         <div class="card-header">
             <h4 style="margin-top: 30px;">Korish</h4>
         </div>
         <div class="pull-right">
             <a href="{{ route('admin.advertisements.index') }}" style="margin-left: 25px"
                 class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
         </div>
         <div class="card-body">
              <div class="form-group">
                 <label>
                     <h6>Url:</h6>
                 </label>
                 {{ $advertisement->url }}
             </div>
              <div class="form-group">
                 <label>
                    <h6>Faollik:</h6>
                 </label>
            {{ $advertisement->status == 1 ? 'faol' : 'faol emas' }}
             </div>
             <img src="{{ $advertisement->image }}" width="150">
         </div>
     </div>
     @endsection
     