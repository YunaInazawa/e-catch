@extends('layouts.app_store')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employee Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- フラッシュメッセージ -->
                    @if (session('flash_message'))
                        <div class="flash_message">
                            {{ session('flash_message') }}
                        </div>
                    @endif

                    You are logged in!
                    {{ Auth::guard('store')->user() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection