<div class="footer text-center">
    <div class="bottom-menu">
        <ul>
            @foreach($categories as $category)
                <li><a href="#">{{ $category->category_name }}</a></li> |
            @endforeach
            {{--<li><a href="index.html">World  News</a></li> |--}}
            {{--<li><a href="sports.html">Sports</a></li> |--}}
            {{--<li><a href="tech.html">Techology</a></li> |--}}
            {{--<li><a href="business.html">Business</a></li> |--}}
            {{--<li><a href="movies.html">Movies</a></li> |--}}
            {{--<li><a href="movies.html">Entertainment</a></li> |--}}
            {{--<li><a href="books.html">Books</a></li> |--}}
            {{--<li><a href="movies.html">Culture</a></li> |--}}
            {{--<li><a href="classifieds.html">Classifieds</a></li> |--}}
            {{--<li><a href="blog.html">Blogs</a></li>--}}
        </ul>
    </div>
    <div class="copyright text-center">
        <p>Amr News Reporter &copy; 2018 All rights reserved | Develop by  <a href="http://mdruhulbd.com/" target="_blank"><span style="color: blue;">mdruhulbd.com</span></a></p>
    </div>
</div>