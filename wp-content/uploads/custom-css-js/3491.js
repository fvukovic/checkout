<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
;(function($){
  
  $(document).on('click touchstart', '#simple-menu', function(e) {
    e.preventDefault();
    $('#trp-floater-ls').addClass("active"); 
  });
  
  $(document).on('click touchstart', '.menu-close', function(e) {
    e.preventDefault();
    setTimeout(function(){
    	$('#trp-floater-ls').removeClass("active"); 
    },800)

  });

})(jQuery);</script>
<!-- end Simple Custom CSS and JS -->
