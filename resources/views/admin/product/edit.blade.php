@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Редактирование товара</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="{{route('admin.product.update', ['product'=>$product])}}" method="post" class="form-horizontal" novalidate="novalidate">
                                    <input type="text" name="_method" value="put" hidden="hidden">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">Название товара</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="name" name="name" placeholder="Введите название товара..." class="form-control" value="{{$product->name}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">Цена</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="price" name="price" placeholder="цена..." class="form-control" value="{{$product->price}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">Категория</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select class=" form-control-label" name="cat_id" id="cat_id">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" @if($category->id == $product->category->id) selected @endif>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class="form-control-label">Описание</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea placeholder="описание..." class="form-control" name="content" id="price" cols="30" rows="10">{!! $product->content !!}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Сохранить
                                        </button>
                                        {{--<button type="reset" class="btn btn-danger btn-sm">--}}
                                        {{--<i class="fa fa-ban"></i> Reset--}}
                                        {{--</button>--}}
                                    </div>
                                </form>
                            </div>

                        </div>

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
