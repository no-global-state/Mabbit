@extends('layouts.master')

@section('title')
Welcome to Mabbit
@stop

@section('content')
<article>
    <p>Mabbit is a lightweight issue tracking system. It can be used to manage TODO lists or project bugs</p>
    <p>In order to start using it, you need to <a href="/auth/login">login</a> or <a href="/auth/register">register</a> a new account</p>
</article>
@stop