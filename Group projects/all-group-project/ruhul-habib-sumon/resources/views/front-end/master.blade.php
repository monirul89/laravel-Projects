
@include('front-end.includes.header')

        <div class="main-content">

            @yield('body')

           @include('front-end.includes.right-sidebar')

            <div class="clearfix"></div>
        </div>

        @include('front-end.includes.footer')


    </div>
</div>
</body>
</html>