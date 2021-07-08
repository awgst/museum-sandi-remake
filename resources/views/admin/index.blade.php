@extends('admin.layout.base')
@section('Main-Content')
<div class="main-content">
    <h1 class="page-header">
        Data Statistik
    </h1>
    <div class="wraper">
        <div class="stats">
            <div class="number">
                <h3>100</h3>
                <small>HARI INI</small>
            </div>
            <div class="icon">
            <i class="fa fa-calendar-check-o"></i>
            </div>
        </div>
        <div class="stats">
            <div class="number">
                <h3>10</h3>
                <small>BULAN INI</small>
            </div>
            <div class="icon">
            <i class="fa fa-calendar"></i>
            </div>
        </div>
        <div class="stats">
            <div class="number">
                <h3>100</h3>
                <small>TOTAL</small>
            </div>
            <div class="icon">
            <i class="fa fa-users"></i>
            </div>
        </div>
        <div class="stats">
            <div class="number">
                <h3>100</h3>
                <small>TURIS</small>
            </div>
            <div class="icon">
                <i class="fa fa-user-secret"></i>
            </div>
        </div>
    </div>
</div>
@endsection