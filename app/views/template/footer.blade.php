    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    {{HTML::script('/assets/js/vendor/bootstrap/bootstrap.min.js')}}
    {{HTML::script('/assets/js/global.js')}}
    @if(!Auth::guest())
    {{HTML::script('/assets/js/pages/admin.js')}}
    @endif
    <!-- Google Analytics -->
    <script>
    	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    	ga('create', 'UA-63713708-1', 'auto');
    	ga('send', 'pageview');

    </script>
    <!-- Google Analytics --> 
    @yield('scripts')
</body>
</html>