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
        
        <div class="nav bg-green-500">
            <router-link>home</router-link>
            <router-link>books</router-link>
        </div>

        <div id="main">
            <router-view></router-view>
        </div>
        
    </div>

    <script src="/js/app.js" ></script>
</body>
</html>