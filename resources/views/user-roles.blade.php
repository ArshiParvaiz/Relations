@extends('layouts.app')
<div>
    <label for="post">showing Roles</label>
    <ul>
        @foreach($roles as $r)
         <li>{{$r->role}}</li>
         @endforeach
    </ul>
</div>