<!--  <h1>welcome to home</h1>
<a href="/">welcome page</a>
<a href="about/harshil">about page</a>
<h1>{{ $name }}</h1>
<h1>{{$users[1]}}</h1>

@if ($name=='harshil')
<h2>this is harshil</h2>
@elseif ($name=='xyz')
<h2>this is xyz</h2>
@else
<h2>other user</h2>
@endif

<div>
    @foreach ($users as $user)
    <h5>{{ $user }}</h5>
    @endforeach
</div>

<div>
    @for ($i=0; $i<=10; $i++)
    <h3>{{ $i }}</h3>
    
    @endfor
</div> 

@include('common.header')
<h1>home page</h1>

@include('common.inner',['page'=>"this is home pge"]) -->

<x-message-banner>
<x-message-banner>
<h1>home page</h1>

<style>
    .success{
        background:lightgreen
        color(green);
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;

    }
</style>
