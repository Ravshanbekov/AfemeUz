@extends('layouts.admin')


@section('content')
    <form action="{{ route('admin.partners.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="card col-lg-12">
            <div class="card-header">
                <h4 style="margin-top: 30px;">Qo'shish</h4>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.partners.index') }}" style="margin-left: 25px"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Sarlavha Uz</label>
                    <input type="text" class="form-control form-control-sm" name="title_uz">
                </div>
                  <div class="form-group">
                    <label>Sarlavha Ru</label>
                    <input type="text" class="form-control form-control-sm" name="title_ru">
                </div>
                  <div class="form-group">
                    <label>Sarlavha En</label>
                    <input type="text" class="form-control form-control-sm" name="title_en">
                </div>
                <div class="form-group">
                    <label>Tafsifi Uz</label>
                   <textarea class="form-control"  name="body_uz"  id="editor" cols="300" rows="50"></textarea>
                </div>
                  <div class="form-group">
                    <label>Tafsifi Ru</label>
                    <textarea class="form-control"  name="body_ru"  id="editor" cols="300" rows="50"></textarea>
                </div>
                  <div class="form-group">
                    <label>Tafsifi En</label>
                    <textarea class="form-control"  name="body_en"  id="editor" cols="300" rows="50"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i
                        class="fas fa-save"></i></button>
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
