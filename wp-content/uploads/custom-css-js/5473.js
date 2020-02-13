<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
  
  setTimeout(function(){

    $(".listing-thumb").each(function() {
       var $current_element = $(this);
      
       if(!($current_element.hasClass('premium'))) {
          $(this).closest('.listing-content-wrap').addClass('no-reviews');
       }
      
    });
  },2000)

});</script>
<!-- end Simple Custom CSS and JS -->
