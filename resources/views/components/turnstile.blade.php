<div
    class="cf-turnstile"
    data-sitekey="{{ config('laravel-base.security.turnstile.site_key') }}"
    data-callback="captchaCallback"
    {{ $attributes->whereStartsWith('data-') }}
></div>
@error('cf-turnstile-response')
    {{ $message }}
@enderror
<script>
    function captchaCallback(token){
        //console.log(token)
    }
</script>
