<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AeShop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                height: 100vh;      
                
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            nav {
                margin-bottom:100px;
            }
          
        </style>
        
    </head>
    <body>

<nav>
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">AeShop | Price List</div>
                    <div class="card-body">          
                        <div class="container">
                            <table class="table text-center">
                                <tr>
                                    <th>Item Type</th>
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                </tr>
                                
                                <tr>
                                @foreach($item AS $items)
                                    <td> {{ $items->item_type }} </td>
                                    <td> {{ $items->item_name }} </td>
                                    <td> {{ $items->item_price }}</td>
                                </tr>

                                @endforeach  
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>           
          
</body>
</html>
