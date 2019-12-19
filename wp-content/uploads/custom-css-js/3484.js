<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
;(function($){
    var clicks = 0;

  $(document).delegate('#trp-floater-ls', 'click', function(e){
    
      if (clicks == 0){
          e.preventDefault();
      } else {

          $(document).unbind('#trp-floater-ls', 'click', function(e){
  });
        }

    ++clicks;
        
});
})(jQuery);</script>
<!-- end Simple Custom CSS and JS -->
