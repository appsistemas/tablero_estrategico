<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            {{--       <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com" target="_blank">{{ __('Creative Tim') }}</a>
                    </li>
                    <li>
                        <a href="https://updivision.com" target="_blank">{{ __('UpDivision') }}</a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com/" target="_blank">{{ __('Blog') }}</a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license" target="_blank">{{ __('Licenses') }}</a>
                    </li>
                </ul>
            </nav> --}}
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __('. ') }}<i
                        class=" "></i>{{ __('   ') }}<a
                        class="@if (Auth::guest()) text-white @endif" href="http://www.bateriasecuador.com/"
                        target="_blank">{{ __('FABRIBAT') }}</a>{{ __(' @ Derechos ') }}<a
                        class="@if (Auth::guest()) text-white @endif" target="_blank"
                        href="http://www.bateriasecuador.com/">{{ __('Reservados ') }}</a>
                </span>
            </div>
        </div>
    </div>
</footer>
