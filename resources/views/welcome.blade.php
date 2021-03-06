<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    
    <div id="app">
        <nav class="bg-green-600">
            <router-link to="/home">home</router-link>
            <router-link to="/books">books</router-link>
        </nav>

        <div id="main">
            <router-view></router-view>
        </div>
        
    </div>
    
    <script src="/js/app.js" ></script>
</body>
</html>