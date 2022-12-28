@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card col-lg-12">
            <div class="card-header">
                <h4 style="margin-top: 30px;">Qoshish</h4>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.users.index') }}" style="margin-left: 25px"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Ism</label>
                    <input type="text" class="form-control form-control-sm" name="name" required>
                </div>
                <div class="form-group">
                    <label>E-pochta</label>
                    <input type="email" class="form-control form-control-sm" name="email">
                </div>
                <div class="form-group">
                    <label>Parol</label>
                    <input type="password" class="form-control form-control-sm" name="password" required>
                </div>
                <div class="form-group">
                    <label>Parolni tasdiqlang</label>
                    {!! Form::password('confirm-password', ['class' => 'form-control form-control-sm']) !!}
                </div>
                <div class="form-group">
                    <label>Rol</label>
                    <select name="roles[]" class="form-control">
                        @foreach ($roles as $rol)
                            <option value="{{ $rol }}">{{ $rol }}</option>
                        @endforeach
                    </select>
                </div>
               
               <div class="form__imgUploader">
                    <div class="form__wrapper">
                        <div class="form__image">
                            <img src="" alt="" class="form__img">
                        </div>
                        <div class="formUploader__content">
                            <div class="formUploader__icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            <div class="formUploader__text">Hali hech qanday rasim tanlanmagan !</div>
                        </div>
                        <div class="formUploader__cancel"><i class="fas fa-times"></i></div>
                        <div class="formUploader__fileName"><p>file name</p></div>
                    </div>
                    <input type="file" class="imgUploader" accept=".jpg, .jpeg, .png" name="image" id="customFile" hidden>
                    <button type="button" class="customBtn">Rasim tanlang</button>
                </div>
            </div>
            <div class="card-footer">
                <button style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i
                        class="fas fa-save"></i></button>
            </div>
    </form>
    </div>
    {!! Form::close() !!}
@endsection
