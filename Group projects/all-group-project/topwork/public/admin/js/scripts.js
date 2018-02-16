
function initializeJS() {

    //tool tips
    jQuery('.tooltips').tooltip();

    //popovers
    jQuery('.popovers').popover();

    jQuery(".top-nav ul.dropdown-menu li").click(function(event){
         event.stopPropagation();
    });

    //sidebar small & mini
    jQuery('.sidebar-mini li.sub-menu').hover(
        function () {
            jQuery(this).find("ul.sub").addClass('display-menu');
        }, 
        function () {
            jQuery(this).find("ul.sub").removeClass('display-menu');
        }
    );

    jQuery('.sidebar-small li.sub-menu').hover(
        function () {
            jQuery(this).find("ul.sub").addClass('display-menu');
        }, 
        function () {
            jQuery(this).find("ul.sub").removeClass('display-menu');
        }
    );


    //panel options function

    jQuery(".panel a.btn-setting").click(function(){
        jQuery(this).closest(".panel-heading").next(".panel-body.btn-setting").slideToggle(800);
    });
    jQuery(".panel a.del").click(function(){
        jQuery(this).closest(".panel-heading").next(".panel-body.del").remove();
    });

    //custom scrollbar
        //for html
    jQuery("html").niceScroll({styler:"fb",cursorcolor:"#3ff761", cursorwidth: '6', cursorborderradius: '10px', background: '#F7F7F7', cursorborder: '', zindex: '1000'});
        //for sidebar
    jQuery("#sidebar").niceScroll({styler:"fb",cursorcolor:"#3ff761", cursorwidth: '3', cursorborderradius: '10px', background: '#F7F7F7', cursorborder: ''});

    //sidebar accordion
    $('#sidebar .sub-menu > a').click(function(){

        //Expand or collapse this panel
        $(this).next().slideToggle(800);

        //Hide the other panels
        $("#sidebar .sub-menu > .sub").not($(this).next()).slideUp(800);

    });

    // sidebar menu toggle
    jQuery(function() {
        function responsiveView() {
            var wSize = jQuery(window).width();
            if (wSize <= 768) {
                jQuery('#container').addClass('sidebar-close');
                jQuery('#sidebar > ul').hide();
            }

            if (wSize > 768) {
                jQuery('#container').removeClass('sidebar-close');
                jQuery('#sidebar > ul').show();
            }
        }
        jQuery(window).on('load', responsiveView);
        jQuery(window).on('resize', responsiveView);
    });

    jQuery('.toggle-nav').click(function () {
        if (jQuery('#sidebar > ul').is(":visible") === true) {
            jQuery('#main-content').css({
                'margin-left': '0px'
            });
            jQuery('#sidebar').css({
                'margin-left': '-240px'
            });
            jQuery('.header-short').css({
                'left': '0px'
            });
            jQuery('#sidebar > ul').hide();
            jQuery("#container").addClass("sidebar-closed");
        } else {
            jQuery('#main-content').css({
                'margin-left': '240px'
            });
            jQuery('#sidebar > ul').show();
            jQuery('#sidebar').css({
                'margin-left': '0'
            });
            jQuery('.header-short').css({
                'left': '240px'
            });
            jQuery("#container").removeClass("sidebar-closed");
        }
    });

    jQuery('.toggle-nav').click(function () {
        if (jQuery('.sidebar-mini > ul').is(":visible") === true) {
            jQuery('#mini-content').css({
                'margin-left': '0px'
            });
            jQuery('.sidebar-mini').css({
                'margin-left': '-52px'
            });
            jQuery('.sidebar-mini > ul').hide();
            jQuery("#container").addClass("sidebar-closed");
        } else {
            jQuery('#mini-content').css({
                'margin-left': '0px'
            });
            jQuery('.sidebar-mini > ul').show();
            jQuery('.sidebar-mini').css({
                'margin-left': '0'
            });
            jQuery("#container").removeClass("sidebar-closed");
        }
    });

    jQuery('.toggle-nav').click(function () {
        if (jQuery('.sidebar-small > ul').is(":visible") === true) {
            jQuery('#mini-content').css({
                'margin-left': '0px'
            });
            jQuery('.sidebar-small').css({
                'margin-left': '-109px'
            });
            jQuery('.sidebar-small > ul').hide();
            jQuery("#container").addClass("sidebar-closed");
        } else {
            jQuery('#mini-content').css({
                'margin-left': '0px'
            });
            jQuery('.sidebar-small > ul').show();
            jQuery('.sidebar-small').css({
                'margin-left': '0'
            });
            jQuery("#container").removeClass("sidebar-closed");
        }
    });

    //dashboard sparkline
    jQuery("#dash-bar").sparkline([5,6,7,2,0,4,2,4,8,7,6,2,4,3,7,4, 4, 7, 8, 8, 9, 3, 2, 5, 7], {
        type: 'bar',
        height: '200 ',
        barWidth: 10,
        barColor: '#136a66',
        zeroColor: '#7fff00'
    });

    jQuery("#dash-line").sparkline([3, 4, 7, 8, 8, 9, 3, 2, 5, 7, 4,5, 6, 7 ], {
        type: 'line',
        width: '100%',
        height: '200',
        lineColor: '#4cd964',
        fillColor: '#4cd964',
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        spotRadius: 0
    });

    jQuery("#dash-pie").sparkline([1,1,2,4], {
        type: 'pie',
        height: '200',
        sliceColors: ['#4c4c4c','#666666','#cccccc','#b2b2b2','#66aa00','#dd4477','#0099c6','#990099',' ']
    });

    //rightbar
    jQuery(".rightslide a").click(function() {
        jQuery('#rightbar').toggleClass( "rightvisible" );
    });
    jQuery("#rightbar-line").sparkline([3, 4, 7, 8, 8, 9, 3, 2, 5, 7, 4,5, 6, 7 ], {
        type: 'line',
        width: '60',
        height: '20',
        lineColor: '#4cd964',
        fillColor: '#4cd964',
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        spotRadius: 0
    });

    //sidebarsparklines
    jQuery("#rightbar-bar").sparkline([5,6,7,2,0,4,2,4], {
        type: 'bar',
        height: '20',
        barColor: '#72767c',
        negBarColor: '#6b4141'
    });

    jQuery("#rightbar-pie").sparkline([1,1,2,4], {
        type: 'pie',
        width: '30',
        height: '30',
        sliceColors: ['#4c4c4c','#666666','#cccccc','#b2b2b2','#66aa00','#dd4477','#0099c6','#990099',' ']
    });

    
    jQuery("#sidebar-line").sparkline([3, 4, 7, 8, 8, 9, 3, 2, 5, 7, 4,5, 6, 7 ], {
        type: 'line',
        width: '60',
        height: '20',
        lineColor: '#b2b2b2',
        fillColor: '#cccccc',
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        spotRadius: 0
    });

    jQuery("#sidebar-bar").sparkline([5,6,7,2,0,4,2,4], {
        type: 'bar',
        height: '20',
        barColor: '#72767c',
        negBarColor: '#6b4141'
    });

    jQuery("#sidebar-pie").sparkline([1,1,2,4], {
        type: 'pie',
        width: '30',
        height: '30',
        sliceColors: ['#4c4c4c','#666666','#cccccc','#b2b2b2','#66aa00','#dd4477','#0099c6','#990099',' ']
    });

    //bar chart
    if (jQuery(".custom-custom-bar-chart")) {
        jQuery(".bar").each(function () {
            var i = jQuery(this).find(".value").html();
            jQuery(this).find(".value").html("");
            jQuery(this).find(".value").animate({
                height: i
            }, 2000)
        })
    }
}

jQuery(document).ready(function($){
    initializeJS();
});