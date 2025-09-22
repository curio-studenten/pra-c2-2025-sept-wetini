<footer>
    <div class="about-us">
        <h3>{{ __("about.about_title") }}:</h3>
        <p>{{ __("about.about_content" )}}</p>
    </div>
    <div class="contact">
        <h3>Contact:</h3>
        <ul>
            <li>Tel: <a href="#">12345678890</a></p>
            <li>Email: <a href="#"></a>DUMMYEMAIL@DUMMY.com</p>
        </ul>
        <p>{!! Lang::get('about.contactform_link', [ 'url' => '/contact' ]) !!}
        </a></p>
    </div>
    <div class="socials">
        <h3>{{ __('about.socials') }}:</h3>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
        <a href="#">TikTok</a>
        <a href="#">LinkedIn</a>
    </div>
    © {{ __('misc.copyright') }}
</footer>

<!-- analytics code -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30506707-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<!-- Einde analytics code -->

<script language="Javascript" type="text/javascript">
    if (top.location != self.location) {
        top.location = self.location.href
    }
</script>
