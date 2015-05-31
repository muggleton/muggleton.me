    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    {{HTML::script('/assets/js/vendor/bootstrap/bootstrap.min.js')}}
    {{HTML::script('/assets/js/global.js')}}
    @if(!Auth::guest())
    {{HTML::script('/assets/js/pages/admin.js')}}
    @endif
    @yield('scripts')
</body>
</html>