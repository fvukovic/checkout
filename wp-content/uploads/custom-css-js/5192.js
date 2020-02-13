<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
  $("a[rel=example_group]").fancybox({
    'transitionIn'		: 'none',
    'transitionOut'		: 'none',
    'titlePosition' 	: 'over',
    'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
      return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
    }
  });
});

</script>
<!-- end Simple Custom CSS and JS -->
