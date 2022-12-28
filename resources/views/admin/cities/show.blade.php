@extends('layouts.admin')

@section('content')
    <div class="card col-lg-12">
        <div class="card-header">
            <h4 style="margin-top: 30px;">Korish</h4>
        </div>
        <div class="pull-right">
            <a href="{{ route('admin.cities.index') }}" style="margin-left: 25px"
                class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>
                     <h6>Shahar nomi Uz:</h6>
                </label>
                {{ $citie->name_uz }}
            </div>
              <div class="form-group">
                <label>
                     <h6>Shahar nomi En:</h6>
                </label>
                {{ $citie->name_en }}
            </div>
              <div class="form-group">
                <label>
                     <h6>Shahar nomi Ru:</h6>
                </label>
                {{ $citie->name_ru }}
            </div>
            <div class="form-group">
                <label>
                    <h6>Hudud nomi:</h6>
                </label>
                {{ $citie->region->name_uz }}
            </div>
        </div>
    </div>
@endsection
