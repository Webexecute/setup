<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Webexecute" name="author">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/bundles/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/bundles/flag-icon-css/css/flag-icon.min.css') }}">
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