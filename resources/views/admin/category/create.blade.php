@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Создание категории</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="{{route('admin.category.store')}}" method="post" class="form-horizontal" novalidate="novalidate">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">Название категории</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="name" name="name" placeholder="Введите название категории..." class="form-control">
                                            <span class="help-block">Please enter category name</span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Добавить категорию
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
