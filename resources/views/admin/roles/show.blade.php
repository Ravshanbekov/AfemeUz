 @extends('layouts.admin')

 @section('content')

     <div class="card col-lg-12">
         <div class="card-header">
             <h4 style="margin-top: 30px;">Korish</h4>
         </div>
         <div class="pull-right">
            <a href="{{ route('admin.roles.index') }}" style="margin-left: 25px"
                class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
        </div>
         <div class="card-body">
             <div class="form-group">
                 <label>
                     <h6>Rol nomi:</h6>
                 </label>
                 {{ $role->name }}
             </div>
             <div class="form-group">
                 <label><h6>Ruxsatlar:</h6></label>
                  <br>
                 @if (!empty($rolePermissions))
                     @foreach ($rolePermissions as $v)
                         <label class="badge badge-success text-white">{{ $v->name }}</label>
                     @endforeach
                 @endif
             </div>
             <div class="form-group">
                 <label><h6>Ruxsatlar soni:</h6></label>
                 {{ count($rolePermissions) }}
             </div>
             <div class="form-group">
                <label>
                    <h6>Kritilgan Vaqti:</h6>
                </label>
                {{ $role->created_at->format('Y-m-d'); }}
            </div>
            <div class="form-group">
                <label>
                    <h6>Tahrirlangan Vaqti:</h6>
                </label>
                {{ $role->updated_at->format('Y-m-d'); }}
            </div>
         </div>

     @endsection
