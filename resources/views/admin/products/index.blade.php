@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="/show.css">
     <link rel="stylesheet" href="/css/glor-img.css">
    <link rel="stylesheet" href="/assets/css/card-show.css">
     <link rel="stylesheet" href="/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row mt-sm-4">
                      <div class="row">
                          
             @if($products)
                    @foreach ($products as $product)
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="padding-20">
                                <ul class="nav nav-tabs pb-3" id="myTab2" role="tablist">
                                <!--<form action="{{ route('admin.products.update', $product->id) }}" method="POST">-->
                                <!--    @csrf-->
                                <!--    @method('PUT')-->
                                <!--    <div class="form-group d-flex">-->
                                <!--        <select name="check" value="{{ $product->check }}" class="form-control" style="margin-right:15px">{{ $product->check }}-->
                                <!--            <option {{ $product->check == 1 ? 'selected' : '' }} value="true">Tasdiqlandi</option>-->
                                <!--            <option {{ $product->check == 0 ? 'selected' : '' }} value="false">Tasdiqlanmadi</option>-->
                                <!--        </select>-->
                                <!--          @can('product-edit')-->
                                <!--        <button type="submit" class="btn btn-outline-primary"><i class="far fa-edit"></i></button>-->
                                <!--         @endcan-->
                                <!--    </div>-->
                                <!--</form>-->
                                  @if (session('success2'))
                                    <div class="alert alert-info alert-dismissible show fade px-5 py-2 col-lg-6" style="margin: 0 auto">
                                        <div class="alert-body">
                                          <button class="close" data-dismiss="alert"></button>
                                          <center>{{ session('success2') }} <i class="icon fas fa-check"></i></h5></center>
                                        </div>
                                    </div>
                                 @endif
                                    </ul>
                                    <div class="tab-content tab-bordered" id="myTab3Content">
                                        <div class="tab-pane fade active show" id="about" role="tabpanel"
                                            aria-labelledby="home-tab2">
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Uy turi</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->htype->name_uz }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Sotish</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->sale->name_uz }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Qurilgan yili</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->date }}</p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <strong>Manzil</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->street }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Narxi</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->price_som }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Oshxona hududi</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->kitchen_area }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Savdo</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->trade }}</p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <strong>Xona</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->room }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Tamirlash</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->repair->name_uz }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Material</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->material->name_uz }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Hudud</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->region->name_uz }}</p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <strong>Shahar</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->city->name_uz }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Uy</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->house }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Qvatdan</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->floor }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Qavatgacha</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->flat }}</p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <strong>Foydalanuvchi_id</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->user_id }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Ipoteka</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->ipoteka }}</p>
                                                </div>
                                            </div>
                                            <div class="section-title">Uy Haqida Malumot</div>
                                            <ul>
                                                <li>{{ $product->description }}</li>
                                            </ul>
                                            <br>
                                            <div  class="d-flex col-14">
                                                @if ($product->images == null)
                                                 
                                                @else
                                                <div class="col-12">
                                                    <ul class="list">
                                                    @foreach ($product->images as $image)
                                                        <li class="list__item">
                                                           <img src="{{ $image->url }}" width="301px" height="180px">
                                                        </li>
                                                    @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>
                                                  <br>
                                            <div class="d-flex">
                                                <div>
                                                     @foreach ($product->documents as $dc)
                                                     <img src="{{ $dc->url }}" width="300" height="450px">
                                                     @endforeach
                                                </div>
                                                   @if ($product->videos == null)
                                                    
                                                   @else
                                                @foreach ($product->videos as $video)
                                                    <div class="mx-4">
                                                        <iframe width="620" height="450" src="{{ $video->url }}">
                                                        </iframe>
                                                    </div>
                                                @endforeach
                                                
                                                @endif
                                              </div>
                                            Kiritilgan sanasi: {{ $product->created_at->format('Y-m-d') }}
                                        </div>
                                     <br>
                                <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group d-flex">
                                        <input name="check" id="checkInput" type="hidden"/>
                                         <button class="btn btn-success btn-block btn-sm w-25 mx-2" type='submit' id="CheckTrue">Tasdiqlash</button>
                                         <br>
                                         <button class="btn btn-danger btn-block btn-sm w-25"  type='submit' id="CheckFalse">Bekor qilish</button>
                                    </div>
                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                @if($products->isEmpty())
                 <div class="warning show fade px-5 py-2 col-lg-12" style="margin-left: 350px; margin-top:300px">
                    <div class="alert-body">
                         <button class="close"></button>
                         <center><h2>Xali yangi uylar qo'shilmadi !</h2></center>
                    </div>
                </div>
                @endif
                </div>
            </div>
        </section>
    </div>
@endsection


@section('js')
    <script src="/assets/bundles/datatables/datatables.min.js"></script>
    <script src="/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/js/page/datatables.js"></script>
    <script>
        const checkInput = document.querySelector('#checkInput');
        const CheckTrue = document.querySelector('#CheckTrue');
        const CheckFalse = document.querySelector('#CheckFalse');
        
        CheckTrue.addEventListener('click', function(e){
            // e.preventDefault();
            checkInput.value = 'true'
            console.log(checkInput.value);
        })
        CheckFalse.addEventListener('click', function(e){
            // e.preventDefault();
            checkInput.value = 'false'
            console.log(checkInput.value);
        })
    </script>
@endsection














