@extends('layouts.admin')
@section('title')Seminars @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Manage Seminars </h5><br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.seminars.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

