<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
   $('.dropdown-toggle').on('click', function(){
  console.log('ff');
    $(this).closest(".bs-searchbox").remove();
});
});</script>
<!-- end Simple Custom CSS and JS -->
