@extends('layouts.masterdashboard')
@section('judul_bar','Open Library -')
@section('dash_content')
    <div class="container-fluid">
        <div class="col-lg-12">
            <h2 class="katalog"> {{$title}}</h2>
            @if(count($errors) > 0)
                <div class="col-lg-10">
                    <ul class="error" id="error">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-lg-10 konten">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading text">Katalog</div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <h4>{{$title}}</h4>

                            </div>
                            <div class="col-lg-6">
                                @if($item->gbr == "")
                                    <img src="/images/default.jpg" class="pull-right img-responsive">
                                @else
                                    <img src="/images/buku/{{$item->gbr}}" class="pull-right img-responsive">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading text">Ulasan untuk {{$item->judul}}</div>
                        <div class="panel-body">
                            <div class="col-lg-5">
                                <form method="post" action="/ulas">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="jdlbook" value="{{$item->judul}}">
                                        <label for="sel1">Rating:</label>
                                        <select name="rate" class="form-control enambelas" id="sel1">
                                            <option value="1">Sangat Buruk</option>
                                            <option value="2">Buruk</option>
                                            <option value="3" selected="selected">Biasa saja</option>
                                            <option value="4">Bagus</option>
                                            <option value="5">Sangat Bagus</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">Subjek * :</label>
                                        <input type="text" name="subjek" value="{{old('subjek')}}" class="form-control enambelas">
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">Ulasan* :</label>
                                        <textarea class="form-control enambelas" name="ulasan" rows="5" id="comment">{{old('ulasan')}}</textarea>
                                    </div>
                                    <button class="btn btn-default">Kirim Ulasan</button>
                                </form>
                            </div>
                            <div class="col-lg-7">
                                <p>Ulasan {{$item->judul}}</p>
                                <ol>
                                    @foreach($review as $ulasan)
                                        <li class="komentar">
                                            <b>{{$ulasan->subjek}}</b> by {{$ulasan->nama}} <span class="rate{{$ulasan->rating}}"></span>
                                            <p>{{$ulasan->ulasan}}</p>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection