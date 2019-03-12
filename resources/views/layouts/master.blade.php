<!DOCTYPE html>
<html>
<head>
<style>
*
{
	box-sizing:border-box;
}

	
.kolom1{width:8.333%;}
.kolom2{width:16.66%;}
.kolom3{width:25%;}
.kolom4{width:33.33%;}
.kolom5{width:41.66%;}
.kolom6{width:50%;}
.kolom7{width:58.33%;}
.kolom8{width:66.66%;}
.kolom9{width:75%;}
.kolom10{width:83.33%;}
.kolom11{width:91.66%;}
.kolom12{width:100%;}

[class*="kolom"]
{
	
	float :left;
}

body {
  background-color: lightblue;
}
</style>
</head>
<body>

<div class="kolom3">@include('layouts.sidebar')
<h1>Hello World!</h1></div>

<h1>erke sip</h1>
@yield('index')

@extends('dashboard.index')


</body>
</html>
