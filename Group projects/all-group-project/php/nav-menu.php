<style>

/********************Menu********************/

nav{
    border-top: 1px solid #cecece;
    border-bottom: 1px solid #cecece;
    height: 54px;
}
.menu_bar {
    position: relative;
    float: right;

}
.menu_bar ul {
    height: 54px;
}
.menu_bar ul {
    padding: 0;
    margin: 0;

}
.menu_bar ul li{
    border-right: 1px solid #cecece;
    list-style-type: none;
    padding: 0;
    position: relative;
    float: left;
}
.menu_bar ul li.last:last-child{
    border-right: 0px solid #cecece;
}
.menu_bar ul li:hover {
    background-color:#f2f2f2;
}
.menu_bar ul li a {
    color: #00483a;
    font-family: "Calibri",Verdana;
    font-size: 14px;
    line-height: 52px;
    text-decoration: none;
    padding: 18px 38px;
}
.menu_bar ul ul {
    background: #fff none repeat scroll 0 0;
    padding: 0;
    position: absolute;
    z-index: 2;
    visibility: hidden;
    margin: 0;
    width: 200px;
}
.menu_bar ul ul li {
    border: 1px solid #cecece;
    list-style-type: none;
    margin: 0;
    width: 200px;
    border-bottom: none;
    position: relative;
    left: -1px;
}
.menu_bar ul ul ul li {
    left: 0px;
}
.menu_bar ul ul li:last-child {
    border-bottom: 1px solid #cecece;
}
.menu_bar ul ul li a {
    color: #00483a;
    text-decoration: none;
    padding: 0px 10px;
    display: block;
    width: calc(100% - 20px);
    line-height: 30px;
}
.menu_bar ul li:hover > ul {
    visibility:visible;
    display:block;
}
.menu_bar ul ul ul{
    top:-1px;
    left:100%;
}
.menu_bar ul ul li a:hover ul {
    visibility:visible;
    display:block;
}
.menu_bar ul ul li:last-child {
    border-bottom: 1px solid #cecece;
}
.menu_bar ul ul li:hover {
    background-color:#F7F7F7;
}
.menu_bar ul:last-child {
    border-right-width: 0px;
}
.menu_bar ul a:hover {
    color:#1b1b1b;
}
.menu_bar ul li:last-child:hover {
    border-right: 1px solid #cecece;
}
.menu_bar ul li:first-child:hover {
    border-left: 1px solid #cecece;
}

/********************End Menu********************/
</style>
<nav>
    <div class="menu_bar">
        <ul>
            <li><a href="#">Home</a>
                <ul>
                    <li ><a href="#">STACKING PLAN</a></li>
                    <li ><a href="#">EXEC DASHBOARD</a></li>
                    <li ><a href="#">LEASE ABSTRACTOR</a></li>
                    <li ><a href="#">BSOM</a></li>
                    <li ><a href="#">MATCHING TOOL</a></li>
                    <li ><a href="#">OWE</a></li>
                    <li ><a href="#">LEASEFLOW ENGINE</a></li>
                </ul>
            </li>
            <li><a href="#">Gallery</a>
                <ul>
                    <li class=""><a href="#">Item-1</a></li>
                    <li class=""><a href="#">Item-2</a></li>
                    <li class=""><a href="#">Item-3</a></li>
                </ul>
            </li>
            <li><a href="#">Contact us</a>
                <ul>
                    <li><a href="#">Item-1</a></li>
                    <li><a href="#">Item-2</a></li>
                    <li><a href="#">Item-3</a>
                        <ul>
                            <li><a href="#">Item-1</a></li>
                            <li><a href="#">Item-2</a></li>
                            <li><a href="#">Item-3</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Views</a>
                <ul>
                    <li><a href="#">Item-1</a>
                        <ul>
                            <li><a href="#">Item-1</a></li>
                            <li><a href="#">Item-2</a></li>
                            <li><a href="#">Item-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Item-2</a>
                        <ul>
                            <li><a href="#">Item-1</a></li>
                            <li><a href="#">Item-2</a></li>
                            <li><a href="#">Item-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Item-3</a>
                        <ul>
                            <li><a href="#">Item-1</a></li>
                            <li><a href="#">Item-2</a></li>
                            <li><a href="#">Item-3</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Blog</a></li>
            <li class="last"><a href="#">About us</a></li>
        </ul>
    </div>
</nav>