<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    </head>
    <body>
        <div id="mess">
            <h1>@{{ message }}</h1>
            <input v-model="message">
        </div>
        <script type="text/javascript" src="/js/app.js"></script>
        <script type="text/javascript">
            new Vue({
                el: '#mess',
                data: {
                    message: '123'
                }
            })
        </script>
    </body>
</html>