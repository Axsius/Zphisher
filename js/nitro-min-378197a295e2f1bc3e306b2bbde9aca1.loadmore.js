jQuery((function(e){e("body").on("click",".loadmore",(function(){var a=e(this),o={action:"chic_lifestyle_loadmore",page:chic_lifestyle_loadmore_params.current_page,cat:chic_lifestyle_loadmore_params.cat};e.ajax({url:chic_lifestyle_loadmore_params.ajaxurl,data:o,type:"POST",beforeSend:function(e){a.text("Loading...")},success:function(o){o?(e("div.blog-list-block").append(o),a.text("More Posts"),chic_lifestyle_loadmore_params.current_page++,chic_lifestyle_loadmore_params.current_page==chic_lifestyle_loadmore_params.max_page&&a.remove()):a.remove()}})}))}));