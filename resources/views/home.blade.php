
    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Home</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}" />

            <script type="text/javascript">
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            </script>
    
            <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
            
            <script src="{{asset("vendor/jquery/jquery.js")}}"></script>
            <script src="{{asset("vendor/remarkable/remarkable.js")}}"></script>
            <script src="{{asset("vendor/react/react.js")}}"></script>
            <script src="{{asset("vendor/react/react-dom.js")}}"></script>
            <script src="{{asset("vendor/babel/browser.js")}}"></script>

            <link rel="stylesheet" href="{{asset("assets/css/app.css")}}">

        </head>
        <body>
            <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <div id="content"></div>
            <script type="text/babel" src="{{asset("assets/js/app.js")}}"></script>
            
        </body>
    </html>