<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
    <link rel="stylesheet" href= "{{ asset('/css/login.css') }}">

</head>
<body>
<form class="login-form">
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="email" class="login-username" autofocus="true" required="true" placeholder="Email" />
  <input type="password" class="login-password" required="true" placeholder="Password" />
  <input type="submit" name="Login" value="Login" class="login-submit" />
</form>
<a href="#" class="login-forgot-pass">forgot password?</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 
</body>

    

</html> 

<!-- @extends ('layouts.app') 

@section ('title', 'login')

@section ('content') 

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 8 rounded-1g shadow-lg"> 
  <h1 class="text-3xl text-center font -bold"> LOGIN </h1>

  <form class="mt-4" method="POST" action="">

  <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
  text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" 
  name="email"> -->
