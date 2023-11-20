<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laragigs</title>
    <style>

        body {
            font-family: sans-serif;
        }

nav {
    background-color: #333;
    border-radius: 4px;

}

nav ul {
    list-style-type: none;
    display: flex;
}

nav li {
    display: inline;
    margin-right: 30px;
}

nav a {
    text-decoration: none;
    color: #fff;
    text-align: center;
    display: block;
    font-size: 20px;
}

img {
            width: 70px;
        }







footer {
    background-color: #333;
    border-radius: 2px;
    
}

footer p {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
}

        /* create balde css starts here */

        input, textarea {
            display: block;
            padding: 2px;
            margin: auto;
            width: 400px;
            border-radius: 2px;
            border: 2px solid lightblue;
        }

        textarea {
            margin-bottom: 15px;
        }

        h3 {
            text-align: center;
           
        }

        label {
            font-weight: 600;
        }

        a {
            list-style-type: none;
            text-decoration: none;
            font-weight: 600;
            color: red;
        }

        /* search partial css */
        .search {
            display: flex;
            align-items: center;
            width: 300px;
            margin: 20px auto;
        }

        /* edit button css */

        .edit {
            color: green;
        }



    </style>
</head>
<body>
    <nav>
        <ul>
        <li><a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a></li>

        @auth

        <li>
                <span style="color: #fff; font-weight: 700; text-transform:uppercase;">
                    Welcome {{ auth()->user()->name }}
                </span>
            </li>
            <li><a href="/listings/manage">Manage Listings</a></li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                </form>
            </li>

            @else
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>

        @endauth
        

            
        </ul>
    </nav>

    @if (session()->has('message'))
        <div style="color: red; font-size: 12px; font-weight: 500; ">
            <p>{{session('message')}}</p>
        </div>
    @endif

    <main>
    @yield('content')
    </main>
   
    <footer>
    <p>&copy; 2023 laragigs all rights reserved       <a href="/listings/create"><button>Post Job</button></a></p>
</footer>

</body>
</html>