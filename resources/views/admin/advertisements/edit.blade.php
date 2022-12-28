@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.advertisements.update', $advertisement->id) }}" method="POST" enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <div class="card col-lg-12">
            <div class="card-header">
                <h4 style="margin-top: 30px;">Tahrirlash</h4>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.advertisements.index') }}" style="margin-left: 25px"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-body">
                 <div class="form-group">
                    <label>Url</label>
                    <input type="text" value="{{ $advertisement->url }}" class="form-control form-control-sm" name="url">
                </div>
                 <div class="form-group">
                     <label>Faollik</label>
                     <select name="status" value="{{ $advertisement->status }}" class="form-control">{{ $advertisement->status }}
                         <option {{ $advertisement->status == 1 ? 'selected' : '' }} value="1">Faol</option>
                         <option {{ $advertisement->status == 0 ? 'selected' : '' }} value="0">Faol emas</option>
                     </select>
                 </div>
               <div class="form__imgUploader">
                    <div class="form__wrapper">
                        <div class="form__image">
                            <img src="{{ $advertisement->image }}" alt="" class="form__img">
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
                        class="fas fa-edit"></i></button>
            </div>
    </form>
    </div>
@endsection
