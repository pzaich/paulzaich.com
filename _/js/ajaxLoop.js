// ajaxLoop.js
//jQuery(function($){
//    var page = 1;
//    var loading = true;
//    var $window = $(window);
//    var $content = $("#home.content-inner-wrapper");
//    var load_posts = function(){
//            $.ajax({
//                type       : "GET",
//                data       : {numPosts : 6, pageNumber: page},
//                dataType   : "html",
//                url        : "http://www.paulzaich.com/wp-content/themes/paulzaich/loopHandler.php",
//                beforeSend : function(){
//                    if(page != 1){
//                        $content.append('<div id="temp_load"></div>');
//                    }
//                },
//                success    : function(data){
//                	$("#temp_load").remove();
//                    $data = $(data);
//                    if($.isEmptyObject($data)){
//                        $("#temp_load").remove();
//                    }else{
//	                    $data.hide();
//	                    $content.append($data);
//	                    $data.fadeIn(500, function(){
//	                        $("#temp_load").remove();
//	                        loading = false;
//	                    });
//                    } 
//                    
//                                    },
//                error     : function(jqXHR, textStatus, errorThrown) {
//                    $("#temp_load").remove();
//                    alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
//                }
//        });
//    }
//    $window.scroll(function() {
//        var content_offset = $content.offset();
//        if(!loading && ($window.scrollTop() +
//            $window.height()) > ($content.scrollTop() + $content.height() + content_offset.top)) {
//                loading = true;
//                page+= 1;
//                load_posts();
//        }
//    });
//    load_posts();
//});