<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <h1>Content header</h1>
        <div class="form-container">
            <form action="{{ route('user.store') }}" method="POST" class="vertical-form">
                @csrf
                <label for="name">Name</label>
                <input name="name" type="text" id="name" required/>
                <label for="email">Email</label>
                <input name="email" type="email" id="email" required/>
                <label for="password">Password</label>
                <input name="password" type="password" id="password" required/>
                <button type="submit">Submit</button>

                
            </form>
        </div>
    </body>
</html>
