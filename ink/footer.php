<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer class="bopi-footer mdui-card mdui-shadow-0 mdui-p-y-2">
        <div class="mdui-text-center">
            Copyright &copy; 2018·Theme <a href="https://github.com/idalao/Typecho-Theme-Bopi" target="_blank">Bopi</a>
        </div>

    <!--HTMLInFooter-->
    <?php echo "\n"; ?>
    <?php echo $this->options->inFooter(); ?>
    <!--HTMLInFooter_end-->

    <!--JS-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/jquery@3.2/dist/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
    <script src="//unpkg.com/nprogress@0.2.0/nprogress.js"></script>

    <!--Pjax-->
    <script>
	$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
   		container: '#pjax-container',
    	fragment: '#pjax-container',
    	timeout: 8000
	})
	$(document).on('pjax:start', function() { NProgress.start(); });
	$(document).on('pjax:end',   function() { NProgress.done();  });
	</script>
</footer>
