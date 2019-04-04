@extends('layouts.app')
@section('title', '新增收货地址')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-lg-1">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        新增收货地址
                    </h2>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" role="form">
                        <!-- inline-template 代表通过内联方式引入组件 -->
                        <select-district inline-template>
                            <div class="form-row">
                                <label class="col-form-label col-sm-2 text-md-right">省市区</label>
                                <div class="col-sm-3">
                                    <select class="form-control" v-model="provinceId">
                                        <option value="">选择省</option>
                                        <option v-for="(name, id) in provinces" :value="id">@{{ name }}</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control" v-model="cityId">
                                        <option value="">选择市</option>
                                        <option v-for="(name, id) in cities" :value="id">@{{ name }}</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control" v-model="districtId">
                                        <option value="">选择区</option>
                                        <option v-for="(name, id) in districts" :value="id">@{{ name }}</option>
                                    </select>
                                </div>
                            </div>
                        </select-district>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection