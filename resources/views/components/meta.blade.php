@if($title)
    <title>{{$title}}</title>
    <meta property="og:title" content="{{$title}}"/>
    <meta name="twitter:title" content="{{$title}}"/>
@endif
@if($description)
    <meta name="description" content="{{$description}}"/>
    <meta property="og:description" content="{{$description}}"/>
    <meta name="twitter:description" content="{{$description}}"/>
@endif
@if($keywords)
    <meta name="keywords" content="{{$keywords}}"/>
@endif

@if($robots)
    <meta name="robots" content="{{$robots}}">
@endif

@if($author)
    <meta name="author" content="{{$author}}"/>
@endif
@if($copyright)
    <meta name="copyright" content="{{$copyright}}"/>
@endif

@if($canonical)
    <link rel="canonical" href="{{$canonical}}"/>
@endif

@if($ogType)
    <meta property="og:type" content="{{$ogType}}"/>
@endif
@if($ogImage)
    <meta property="og:image" content="{{$ogImage}}"/>
@endif
@if($ogImageAlt)
    <meta property="og:image:alt" content="{{$ogImageAlt}}"/>
@endif
@if($ogUrl)
    <meta property="og:url" content="{{$ogUrl}}"/>
@endif
@if($ogSiteName)
    <meta property="og:site_name" content="{{$ogSiteName}}"/>
@endif

@if($twitterCard)
    <meta name="twitter:card" content="{{$twitterCard}}"/>
@endif
@if($twitterImage)
    <meta name="twitter:image" content="{{$twitterImage}}"/>
@endif
@if($twitterImageAlt)
    <meta name="twitter:image:alt" content="{{$twitterImageAlt}}"/>
@endif
@if($twitterSite)
    <meta name="twitter:site" content="{{$twitterSite}}"/>
@endif
@if($twitterCreator)
    <meta name="twitter:image" content="{{$twitterCreator}}"/>
@endif
