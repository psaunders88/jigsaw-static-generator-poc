@extends('_layouts.master')

@section('body')

    <form method='POST'>
        <label>Email</label>
        <input name="email" type="text" v-model="email"/>
        <label>Password</label>
        <input name="password" type="password" v-model="password"/>
        <input v-on:click="login" type="button" name="submit"/>

    </form>

@endsection
