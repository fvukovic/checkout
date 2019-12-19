<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
;(function($){
  
  $(document).on('click', '.accordion', function(e) {
    e.preventDefault();
    console.log('fff');
	$(this).toggleClass("active").next().slideToggle();
  });

})(jQuery);</script>
<!-- end Simple Custom CSS and JS -->
