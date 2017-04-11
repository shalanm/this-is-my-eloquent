@extends('layouts.default')
@section('content')

        
             <h1>Welcome My Database</h1>
        
        
             <ul>
                @foreach($authors as $author)
     
                   <li><a href="{{route('author' , $author->id)}}">{{$author->name}} </a></li>
       
                @endforeach
                
             </ul>
             <a href="{{route('new_author')}}" >Add new Author</a>
   

@endsection




