@extends('layouts.app')
@section('content')
<h1>Hello New Author</h1>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading pull-left">
                Hello New Author
            </div>
            <div class="panel-body">
                <form action="{{route('authors.create')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>       
                    
                    <div class="form-group">
                        <label for="bio">Biography</label>
                        <textarea name="bio" rows="10" cols="20" id="bio" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-success">Submit</button>
                    
                </form>
            </div>
            
        </div>
    </div>
</div>


@endsection
