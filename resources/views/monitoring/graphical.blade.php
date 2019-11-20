@extends('layouts.app')
@section('graphical-view')
<section>
    <data-view></data-view>
</section>
<div class="d-flex ">
    <section class="col-4">
        <bar-chart :data="{'2019-01-01': 5, '2019-02-01': 10, '2019-03-01': 20, '2019-04-01': 5, '2019-05-01': 13}">
        </bar-chart>
    </section>
    <section class="col-4">
        <line-chart :data="{'2019-01-01': 5, '2019-02-01': 10, '2019-03-01': 8, '2019-04-01': 5, '2019-05-01': 13}">
        </line-chart>
    </section>
    <section class="col-4">
        <line-chart :data="{'2019-01-01': 5, '2019-02-01': 10, '2019-03-01': 8, '2019-04-01': 5, '2019-05-01': 13}">
        </line-chart>
    </section>
</div>
@endsection