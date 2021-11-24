@extends('layouts.app')
<div>
    <label for="post">showing Comments</label>
    <ul>
        @foreach($comments as $c)
         <li>{{$c->comment}}</li>
         @endforeach
    </ul>
</div>