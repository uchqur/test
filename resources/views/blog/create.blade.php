
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

                            <form method="post" action="{{route('blog.store')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder=" title">
                                </div>
                                <div class="form-group">
                                    <label for="body">Example textarea</label>
                                    <textarea class="form-control" name="body" id="body" rows="3" placeholder="Content"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
