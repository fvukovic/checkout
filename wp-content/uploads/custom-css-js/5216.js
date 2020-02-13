<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
;(function($){
    
  $(document).ready(function() {
    $('.pmpro_btn-submit-checkout').click(function() {
        if ($('#checkbox_1').prop('checked') == false){
          	  $('.cbx-message').remove();
              $(".page-id-2309 .agbs").append('<div class="cbx-message">Um fortzufahren, aktivieren Sie bitte das Kontrollkästchen!</div>');
        }
      else {
        $('.cbx-message').remove();
      }
    });
});
  
})(jQuery);

</script>
<!-- end Simple Custom CSS and JS -->
