<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Webexecute" name="author">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/bundles/bootstrap-social/bootstrap-social.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
    @if (!empty($css))
    @foreach ($css as $value)
    @if(!empty($value))
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/customcss/'.$value) }}">
    @endif
    @endforeach
    @endif
    

    @if (!empty($plugincss))
        @foreach ($plugincss as $value)
            @if(!empty($value))
                <link rel="stylesheet" href="{{ asset('public/backend/assets/'.$value) }}">
            @endif
        @endforeach
    @endif

    <script>
        var baseurl = "{{ asset('/') }}";
    </script>
</head>

<body class="background-image-body">
    @yield('content')
    <!-- General JS Scripts -->
    <script src="{{ asset('public/backend/assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{ asset('public/backend/assets/js/scripts.js') }}"></script>
   

    @if (!empty($pluginjs))
        @foreach ($pluginjs as $value)
            <script src="{{ asset('public/backend/assets/'.$value) }}" type="text/javascript"></script>
        @endforeach
    @endif

    @if (!empty($js))
    @foreach ($js as $value)
    <script src="{{ asset('public/backend/assets/js/customjs/'.$value) }}" type="text/javascript"></script>
    @endforeach
    @endif
    <script>

            jQuery(document).ready(function () {
            @if (!empty($funinit))
                    @foreach ($funinit as $value)
            {{  $value }}
            @endforeach
                    @endif
            }
            );
    </script>
</body>
</html>