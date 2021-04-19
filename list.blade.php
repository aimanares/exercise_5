@extends('subview.master') 
@section('title', 'Book List') 
@section('content') 
 <h1>Book List</h1>
 
<table class="table table-sm">
    <thead>
        <tr>
        <td>Title</td>
        <td>ISBN</td>
        <td>Category</td>
        <td>No of page</td>
        </tr>
    </thead>
    <tbody>
        @foreach($list as $bList) 
            <tr>
            <td> {{$bList['Title']}}</td>
            <td> {{$bList['ISBN']}}</td>
            <td> {{$bList['Category']}}</td>
            <td> {{$bList['Page']}}</td>
            </tr>
        @endforeach 
    </tbody>
 </table>

@endsection

