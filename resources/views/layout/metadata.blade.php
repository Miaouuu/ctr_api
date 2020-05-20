<meta charset="utf-8">
<meta name="description" content="@if (isset($description)) {{ $description }} @else {{ __("Page d'administration des drafts Crash Team Racing") }} @endif">
<meta name="keywords" content="CTR Draft, Crash Team Racing Draft, Crash Team Racing, CTR, CTR picks, Crash Team Racing picks, Crash Team Racing bans">
<meta name="author" content="Heddi Brahiti">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

@if(config("services.ga.tracking_id") !== '')
    <meta name="ga-tracking-id" content="{{ config("services.ga.tracking_id") }}">
@endif
