<title>{{$title}}</title>
<meta property="og:title" content="{{$title}}"/>
<meta name="twitter:title" content="{{$title}}"/>

@if($description !== null)
    <meta name="description" content="{{$description}}"/>
    <meta property="og:description" content="{{$description}}" />
    <meta name="twitter:description" content="{{$description}}"/>
@endif

@if($keywords !== null)
    <meta name="keywords" content="{{$keywords}}"/>
@endif
