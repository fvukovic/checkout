<script>
	+function($){"use strict";var n=function(n,e,t){if("[object Object]"===Object.prototype.toString.call(n))for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&e.call(t,n[o],o,n);else for(var i=0,a=n.length;a>i;i++)e.call(t,n[i],i,n)},e=document.querySelectorAll(".hamburger");e.length>0&&n(e,function(n){n.addEventListener("click",function(){this.classList.toggle("active")},!1)})}(jQuery),+function($){"use strict";function n(){var n=2*$(".navbar").height();$(window).scrollTop()>n?$(".navbar").addClass("scrolled"):$(".navbar").removeClass("scrolled")}$(".navbar").length>0&&$(window).on("scroll load resize",function(){n()})}(jQuery),window.megaNavbar={},+function(n,$){"use strict";var e=!1;$.extend(n,{unitedMenu:{defaults:{content:$("#navbar")},initialize:function(n,t){return e?this:(e=!0,this.$content=n||this.defaults.content,this.setOptions(t).build().events(),this)},setOptions:function(n){return this.options=$.extend(!0,{},this.defaults,n),this},build:function(){var n=this,e=$("#navbar");return e.find(".dropdown-toggle, .dropdown-submenu > a").append($("<i/>").addClass("fa fa-angle-down")),e.find(".dropdown").addClass("dropdown-reverse"),this},events:function(){var n=this,e=$("#navbar"),t=$(window);e.find('a[href="#"]').on("click",function(n){n.preventDefault()}),e.find('.dropdown-toggle[href="#"], .dropdown-submenu a[href="#"], .dropdown-toggle[href!="#"] .fa-angle-down, .dropdown-submenu a[href!="#"] .fa-angle-down').on("click",function(n){n.preventDefault(),t.width()<768&&$(this).closest("li").toggleClass("opened")})}}}),"undefined"!=typeof n.unitedMenu&&n.unitedMenu.initialize()}.apply(this,[window.megaNavbar,jQuery]);+function($){"use strict";function t(t){$(t).next().find('a[data-toggle="tab"]').click()}function e(t){$(t).prev().find('a[data-toggle="tab"]').click()}function a(){var t=0;$(".product").each(function(){t+=parseFloat($(this).children(".product-line-price").text())});var e=t*c,a=t>0?r:0,i=t+e+a;$(".totals-value").fadeOut(l,function(){$("#cart-subtotal").html(t.toFixed(2)),$("#cart-tax").html(e.toFixed(2)),$("#cart-shipping").html(a.toFixed(2)),$("#cart-total").html(i.toFixed(2)),0==i?$(".button").fadeOut(l):$(".button").fadeIn(l),$(".totals-value").fadeIn(l)})}function i(t){var e=$(t).parent().parent(),i=parseFloat(e.children(".product-price").text()),o=$(t).val(),n=i*o;e.children(".product-line-price").each(function(){$(this).fadeOut(l,function(){$(this).text(n.toFixed(2)),a(),$(this).fadeIn(l)})})}function o(t){var e=$(t).parent().parent();e.slideUp(l,function(){e.remove(),a()})}var n=$(window);n.load(function(){var t=$("#preloader"),e=$(".preloader");e.fadeOut(400,function(){t.delay(400).addClass("active")})}),$(".toggle").click(function(){$(this).children("i").toggleClass("fa-user-plus"),$(".form").animate({height:"toggle","padding-top":"toggle","padding-bottom":"toggle",opacity:"toggle"},"slow")}),$(".nav-tabs > li a[title]").tooltip(),$('a[data-toggle="tab"]').on("show.bs.tab",function(t){var e=$(t.target);if(e.parent().hasClass("disabled"))return!1}),$(".next-step").click(function(e){var a=$(".register .nav-tabs li.active");a.next().removeClass("disabled"),t(a)}),$(".prev-step").click(function(t){var a=$(".register .nav-tabs li.active");e(a)}),$(".hover").mouseleave(function(){$(this).removeClass("hover")});var c=.05,r=15,l=300;$(".product-quantity input").change(function(){i(this)}),$(".product-removal button").click(function(){o(this)}),null==$.cookie("MM-United")&&setTimeout(function(){$("#Cookie").modal("show"),$.cookie("MM-United"),document.cookie="MM-United=true; expires=Fri, 31 Dec 9999 23:59:59 UTC"},1e3)}(jQuery);function validateFirstStep(){return $(".wizard form").validate({rules:{firstname:"required",lastname:"required",email:{required:!0,email:!0}},messages:{firstname:"Please enter your First Name",lastname:"Please enter your Last Name",email:"Please enter a valid email address"}}),!!$(".wizard form").valid()}function validateSecondStep(){return $(".wizard form").validate({rules:{},messages:{}}),!!$(".wizard form").valid()||(console.log("invalid"),!1)}function readURL(e){if(e.files&&e.files[0]){var i=new FileReader;i.onload=function(e){$("#avatarPreview").attr("src",e.target.result).fadeIn("slow")},i.readAsDataURL(e.files[0])}}$(document).ready(function(){$(".wizard").bootstrapWizard({tabClass:"nav nav-pills",nextSelector:".btn-next",previousSelector:".btn-previous",onInit:function(e,i,t){var a=i.find("li").length;$width=100/a,$display_width=$(document).width(),$display_width<600&&a>3&&($width=50),i.find("li").css("width",$width+"%")},onNext:function(e,i,t){return 1==t?validateFirstStep():2==t?validateSecondStep():3==t?validateThirdStep():void 0},onTabClick:function(e,i,t){return!1},onTabShow:function(e,i,t){var a=i.find("li").length,d=t+1,r=i.closest(".wizard");d>=a?($(r).find(".btn-next").hide(),$(r).find(".btn-finish").show()):($(r).find(".btn-next").show(),$(r).find(".btn-finish").hide())}}),$("#avatar").change(function(){readURL(this)}),$('[data-toggle="wizard-radio"]').click(function(){wizard=$(this).closest(".wizard"),wizard.find('[data-toggle="wizard-radio"]').removeClass("active"),$(this).addClass("active"),$(wizard).find('[type="radio"]').removeAttr("checked"),$(this).find('[type="radio"]').attr("checked","true")}),$('[data-toggle="wizard-checkbox"]').click(function(){$(this).hasClass("active")?($(this).removeClass("active"),$(this).find('[type="checkbox"]').removeAttr("checked")):($(this).addClass("active"),$(this).find('[type="checkbox"]').attr("checked","true"))}),$height=$(document).height(),$(".set-full-height").css("height",$height)});
</script>