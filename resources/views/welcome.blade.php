@extends('layouts.app')
<div>
<form method="POST" action="comments">
                     @csrf
    <label for="post">Choose a post</label>
    <select name="post" id="post">
        @foreach($posts as $p)
        <option value="{{$p->id}}">{{$p->post}}</option>
        @endforeach
    </select>
    <button class="btn btn-calculate" type="submit">
                    <i class="fa fa-calculator"></i> Get
                </button>
</form>
</div>