<footer class="row footer-class">
    <div class="column large-4 medium-4 small-12 footer-block">
        @if (!Auth::user())
            <a href="/login">Login</a>
        @endif
    </div>
    <div class="column large-4 medium-4 small-12 footer-block">
        <a href="//www.iubenda.com/privacy-policy/8277837" class="iubenda-white iubenda-embed" title="Privacy Policy">Privacy Policy</a>
        <script type="text/javascript">
            (function (w,d) {
                var loader = function () {
                    var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0];
                    s.src = "//cdn.iubenda.com/iubenda.js";
                    tag.parentNode.insertBefore(s,tag);
                };
                if(w.addEventListener){
                    w.addEventListener("load", loader, false);
                }
                else if(w.attachEvent){
                    w.attachEvent("onload", loader);
                }
                else{
                    w.onload = loader;
                }
            })(window, document);
        </script>
    </div>
    <div class="column large-4 medium-4 small-12 footer-block">
        <a href="https://www.linkedin.com/in/spencer-mcleod"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
    </div>
</footer>
