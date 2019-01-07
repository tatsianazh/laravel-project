@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    @dump($product->photos)
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Фотографии</h3>
                        <div class="table-responsive table-responsive-data2">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Загрузка изображений</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('admin.photo.store', ['product'=>$product])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class="form-control-label">Загрузка одного файла</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" name="image" class="form-control-file">
                                                </div>
                                            </div>
                                            {{--<div class="row form-group">--}}
                                                {{--<div class="col col-md-3">--}}
                                                    {{--<label for="file-multiple-input" class="form-control-label">Множественная загрузка</label>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-12 col-md-9">--}}
                                                    {{--<input type="file" name="image[]" multiple class="form-control-file">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Сохранить
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <a href="{{route('admin.product.index')}}"><i class="fa fa-ban"></i> Отмена</a>
                                        </button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END DATA TABLE -->
                        <!-- PHOTO LIST -->
                        <div class="table-responsive table-responsive-data2">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Загруженные фотографии</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        @foreach($product->photos as $photo)
                                            <img src="{{asset('/storage/'.$photo->path)}}" alt="">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PHOTO LIST -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
