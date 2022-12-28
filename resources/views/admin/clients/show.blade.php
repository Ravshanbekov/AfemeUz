@extends('layouts.admin')


@section('css')
    <link rel="stylesheet" href="/show.css">
     <link rel="stylesheet" href="/css/glor-img.css">
    <link rel="stylesheet" href="/assets/css/card-show.css">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-sistem card-mb mb-4" style="margin: 0 auto;">
                            <div class="card-header">
                                <h4>Shaxsiy Ma'lumotlar</h4>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('admin.clients.index') }}"
                                    class="btn btn-outline-primary btn-sm col-lg-1"><i class="fas fa-arrow-left"></i></a>
                                <div class="author-box-center" style="text-align: center;">
                                    @if ($client->image == null)
                                        <img alt="image" src="/admin.png" class="rounded-circle author-box-picture"
                                            style="width: 150px; height: 150px;">
                                    @else
                                        <img alt="image" src="{{ $client->image }}"
                                            class="rounded-circle author-box-picture" style="width: 150px; height: 150px;">
                                    @endif

                                    <div class="clearfix"></div>
                                    <div class="author-box-name">
                                        <h6>{{ $client->name }}</h6>
                                    </div>
                                    <div class="author-box-job">{{ $client->lastname }}</div>
                                </div>
                                <div class="py-4">
                                    <p class="clearfix">
                                        <span class="float-start">
                                            Kirgan Sanasi
                                        </span>
                                        <span class="float-right text-muted">
                                            {{ $client->created_at->format('Y-m-d') }}
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start">
                                            Telefon
                                        </span>
                                        <span class="float-right text-muted">
                                            {{ $client->phone }}
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start">
                                            Pochta
                                        </span>
                                        <span class="float-right text-muted">
                                            {{ $client->email }}
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start">
                                            Hudud
                                        </span>
                                        <span class="float-right text-muted">
                                            @if ($client->region == null)
                                                Hudud tanlanmagan
                                            @else
                                                {{ $client->region->name_uz }}
                                            @endif
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start">
                                            Foydalanuvchi turi
                                        </span>
                                        <span class="float-right text-muted">
                                            {{ $client->user_type }}
                                        </span>
                                    </p>
                                     <p class="clearfix">
                                        <span class="float-start">
                                            Tajriba
                                        </span>
                                        <span class="float-right text-muted">
                                            @if($client->experience)
                                            {{ $client->experience }}-yil
                                            @endif
                                        </span>
                                    </p>
                                      <p class="clearfix">
                                        <span class="float-start">
                                            Reyting
                                        </span>
                                        <span class="float-right text-muted">
                                            @if($client->retings == null)
                                            @else
                                               @foreach( $client->fullreting as $retings)
                                                  {{ count($retings) }}
                                               @endforeach
                                            @endif
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start">
                                            Qurilma id
                                        </span>
                                        <span class="float-right text-muted">
                                            {{ $client->devays_id }}
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start">
                                            Qurilma tipi
                                        </span>
                                        <span class="float-right text-muted">
                                            {{ $client->devays_type }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($client->posts as $product)
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="padding-20">
                                <ul class="nav nav-tabs pb-3" id="myTab2" role="tablist">
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
                                                    <strong>Korilgan</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->view }}</p>
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
                                                <div class="col-md-3 col-6">
                                                    <strong>Reyting</strong>
                                                    <br>
                                                    @if( $product->retings == null)
                                                    
                                                    @else
                                                       @foreach($product->retings as $reting)
                                                       <label class="badge badge-info">{{ $reting->reting }}</label>
                                                    <p class="text-muted">{{ $reting->comment }}</p>
                                                       @endforeach
                                                    @endif
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Ipoteka</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->ipoteka }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Savdo</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $product->trade }}</p>
                                                </div>
                                                  @if($product->solt == null)
                                                  
                                                  @elseif($product->solt == true)
                                                   <div class="col-md-3 col-6 b-r">
                                                    <label class="badge badge-danger">Sotildi !</label>
                                                </div>
                                                  @endif
                                                
                                            </div>
                                            <div class="section-title">Uy Haqida Malumot</div>
                                            <ul>
                                                <li>{{ $product->description }}</li>
                                            </ul>
                                            <br>
                                            <div class="section-title">Yoqtirganlar</div>
                                            <ul style="display:block">
                                                @foreach ($product->likes as $like)
                                                  <label class="badge badge-success">{{$like->id}}</label>
                                                @endforeach
                                            </ul>
                                            <br>
                                            <div  class="d-flex col-14">
                                                @if ($product->images)
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection


