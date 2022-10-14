<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
        <p>any con get</p>
        <form action="{{ url('any') }}" method="get">
            <input type="submit" value="Submit"/>
        </form>
        <a href="{{ url('any') }}">any con get, sólo con get</a>
        
        <p>any con delete</p>
        <form action="{{ url('any') }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Submit"/>
        </form>
        
        <p>any con post</p>
        <form action="{{ url('any') }}" method="post">
            @csrf
            <input type="submit" value="Submit"/>
        </form>
        
        <p>any con put</p>  
        <p>{{ url('get/addsa') }}</p>
        <form action="{{ url('any') }}" method="post">
            @method('put')
            @csrf
            <input type="submit" value="Submit"/>
        </form>
        
        <p>get</p>     
        <form action="{{ url('get') }}" method="get">
            <input type="submit" value="Submit"/>
        </form>
        <a href="{{ url('any') }}">any con get, sólo con get</a>
        
        <p>delete</p> 
        <form action="{{ url('delete') }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Submit"/>
        </form>
        
        <p>post</p>   
        <form action="{{ url('post') }}" method="post">
             @csrf
            <input type="submit" value="Submit"/>
        </form>
        
        <p>put</p>    
        <form action="{{ url('put') }}" method="post">
            @method('put')
            @csrf
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>