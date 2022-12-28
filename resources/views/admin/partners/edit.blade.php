@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST" enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <div class="card col-lg-12">
            <div class="card-header">
                <h4 style="margin-top: 30px;">Tahrirlash</h4>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.partners.index') }}" style="margin-left: 25px"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Sarlavha Uz</label>
                    <input type="text" value="{{ $partner->title_uz }}" class="form-control form-control-sm" name="title_uz">
                </div>
                 <div class="form-group">
                    <label>Sarlavha Ru</label>
                    <input type="text" value="{{ $partner->title_ru }}" class="form-control form-control-sm" name="title_ru">
                </div>
                 <div class="form-group">
                    <label>Sarlavha En</label>
                    <input type="text" value="{{ $partner->title_en }}" class="form-control form-control-sm" name="title_en">
                </div>
                 <div class="form-group">
                    <label>Tafsifi Uz</label>
                    <textarea class="form-control"  name="body_uz"  id="editor" cols="300" rows="50">{!!$partner->body_uz!!}</textarea>
                </div>
                 <div class="form-group">
                    <label>Tafsifi Ru</label>
                     <textarea class="form-control"  name="body_ru"  id="editor" cols="300" rows="50">{!!$partner->body_ru!!}</textarea>
                </div>
                 <div class="form-group">
                    <label>Tafsifi En</label>
                     <textarea class="form-control"  name="body_en"  id="editor" cols="300" rows="50">{!!$partner->body_en!!}</textarea>
                </div>
            </div>
            <div class="card-footer">
                <button style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i class="fas fa-edit"></i></button>
            </div>
    </form>
    </div>
@endsection

@section('js')

<script>
        $(function () {

            $('.select2').select2()
            $('.select2bs4').select2({
            theme: 'bootstrap4'
            })
        })

         $('textarea').addClass('summernote')


    </script>
@endsection
