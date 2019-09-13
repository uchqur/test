@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul>
                            @if($blogs->id <= 0)
                                <li>Not have any Blog</li>
                            @else

                                    <li>{{ $blogs->title }}</li>
                                    <p>{{ $blogs->body }}</p>


                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
