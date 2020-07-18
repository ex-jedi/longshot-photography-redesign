<footer class="main-footer colour-will-change">
	<div class="footer-social-media">
		<a href="https://www.instagram.com/longshot_photo" class="footer-social-media-link">
			<img class="footer-social-media-icon" src="/images/instagram-icon-for-dark-background.svg">
		</a>
		<a href="https://twitter.com/longshot_photo" class="footer-social-media-link">
			<img class="footer-social-media-icon" src="/images/twitter-icon-for-dark-background.svg">
		</a>
	</div>
	<div class="footer-legal">
		<p class="copyright" >&copy; <?php echo date("Y"); ?> KEN LONG</p>
		<p class="privacy"><a href="/privacy-and-cookie-policy">PRIVACY &amp; COOKIE POLICY</a></p>
		<p class="terms"><a href="/terms">TERMS OF USE</a></p>
	</div>
	<div class="footer-promo">
		<p>
			WEB DESIGN & DEVELOPMENT, BRAND DESIGN & ILLUSTRATION BY <a href="https://phoenixandphoenix.co/" class="promo-link">phoenix & phoenix</a>
		</p>
	</div>
</footer>
</div> <!-- wrapper div -->
<!-- TODO: Change Vue to production  version -->
<script type="text/javascript" src="/scripts/minified/vue-min.js" ></script>
<!-- Lazy Load -->
<script src="/scripts/minified/lazyload.min.js"></script>
<!-- TODO: Remove ScrollMagic -->
<!-- ScrollMagic -->
<script src="/scripts/minified/ScrollMagic.min.js"></script>
<!-- TODO: Remove indicators -->
<script src="/scripts/minified/debug.addIndicators.min.js"></script>
<!-- General JS file -->
<script type="text/javascript" src="/scripts/minified/universal-min.js"></script>
<!-- Flickity -->
<script src="/scripts/minified/flickity.pkgd.min.js"></script>
<script>
  const elem = document.querySelector('.main-carousel');
  const flkty = new Flickity(elem, {
  });
</script>

</body>
</html>
