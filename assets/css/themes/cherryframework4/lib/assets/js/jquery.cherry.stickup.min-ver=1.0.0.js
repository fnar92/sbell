!function(t){t.fn.CherryStickUp=function(e){function o(){a=parseInt(n.offset().top),f=parseInt(n.css("margin-top")),u=parseInt(n.outerHeight(!0)),i.pseudo&&(t('<div class="pseudoStickyBlock"></div>').insertAfter(n),c=t(".pseudoStickyBlock"),c.css({position:"relative",display:"block"})),i.active&&s()}function s(){p.on("scroll",function(){r=t(this).scrollTop(),h=r>S?"down":"up",S=r,correctionValue=0!=k.length?k.outerHeight(!0):0,d=parseInt(l.scrollTop()),d>a-correctionValue?(n.addClass("isStick"),v.addClass("isStick"),i.pseudo?(n.css({position:"fixed",top:correctionValue}),c.css({height:u})):n.css({position:"fixed",top:correctionValue})):(n.removeClass("isStick"),v.removeClass("isStick"),i.pseudo?(n.css({position:"relative",top:0}),c.css({height:0})):n.css({position:"absolute",top:0}))}).trigger("scroll"),p.on("resize",function(){n.hasClass("isStick")?a!=parseInt(c.offset().top)&&(a=parseInt(c.offset().top)):a!=parseInt(n.offset().top)&&(a=parseInt(n.offset().top))})}var i={correctionSelector:".correctionSelector",listenSelector:".listenSelector",active:!1,pseudo:!0};t.extend(i,e);var c,r,n=t(this),l=t(window),p=t(document),a=0,u=0,f=0,d=0,S=0,h="",k=t(i.correctionSelector),v=t(i.listenSelector);0!=n.length&&o()}}(jQuery);