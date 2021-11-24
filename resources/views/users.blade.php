@extends('layouts.app')
<div>
<form method="POST" action="user-roles">
    @csrf
    <label for="user">Choose a user</label>
    <select name="user" id="user">
        @foreach($users as $u)
        <option value="{{$u->id}}">{{$u->name}}</option>
        @endforeach
    </select>
    <button class="btn btn-calculate" type="submit">
        <i class="fa fa-calculator"></i> Get
    </button>
</form>
</div>
