<title>{{$meta->title}}</title>
<meta property="og:title" content="{{$meta->title}}"/>
<meta name="twitter:title" content="{{$meta->title}}"/>

@if($meta->description)
    <meta name="description" content="{{$meta->description}}"/>
    <meta property="og:description" content="{{$meta->description}}" />
    <meta name="twitter:description" content="{{$meta->description}}"/>
@endif

@if($meta->keywords !== null)
    <meta name="keywords" content="{{join(',', $meta->keywords)}}"/>
@endif

