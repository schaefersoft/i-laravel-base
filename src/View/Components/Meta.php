<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Meta extends Component
{
    public function __construct(
        public string $title,
        public ?string $description = null,
        public ?string $keywords = null,
        public ?string $robots = null,
        public ?string $author = null,
        public ?string $copyright = null,
        public ?string $canonical = null,
        public ?string $ogType = null,
        public ?string $ogImage = null,
        public ?string $ogImageAlt = null,
        public ?string $ogUrl = null,
        public ?string $ogSiteName = null,
        public ?string $twitterImage = null,
        public ?string $twitterImageAlt = null,
        public ?string $twitterSite = null,
        public ?string $twitterCreator = null,
        public ?string $twitterCard = null,
    ) {
        if (!$this->title) $this->title = config('laravel-base.seo.title');
        if (!$this->description) $this->description = config('laravel-base.seo.description');
        if (!$this->keywords) $this->keywords = config('laravel-base.seo.keywords');

        if (!$this->robots) $this->robots = config('laravel-base.seo.robots');

        if (!$this->author) $this->author = config('laravel-base.seo.author');
        if (!$this->copyright) $this->copyright = config('laravel-base.seo.copyright');

        if (!$this->canonical) $this->canonical = config('laravel-base.seo.canonical');

        if (!$this->ogType) $this->ogType = config('laravel-base.seo.og.type');
        if (!$this->ogImage) $this->ogImage = config('laravel-base.seo.og.image');
        if (!$this->ogImageAlt) $this->ogImageAlt = config('laravel-base.seo.og.image-alt');
        if (!$this->ogUrl) $this->ogUrl = config('laravel-base.seo.og.url');
        if (!$this->ogSiteName) $this->ogSiteName = config('laravel-base.seo.og.site-name');

        if (!$this->twitterCard) $this->twitterCard = config('laravel-base.seo.twitter.card');
        if (!$this->twitterImage) $this->twitterImage = config('laravel-base.seo.twitter.image');
        if (!$this->twitterImageAlt) $this->twitterImageAlt = config('laravel-base.seo.twitter.image-alt');
        if (!$this->twitterSite) $this->twitterSite = config('laravel-base.seo.twitter.site');
        if (!$this->twitterCreator) $this->twitterCreator = config('laravel-base.seo.twitter.creator');
    }

    public function render(): View
    {
        return view('base::components.meta');
    }
}
