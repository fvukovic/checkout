<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
   if ($("body").hasClass("logged-in")) {
     $('.page-id-1857 .btn-register').attr('href', '').css({'cursor': 'pointer', 'pointer-events' : 'none'});
    }
  
  $(".page-id-2297 .um-profile-meta .um-name").append('<div class="add-img">Klicken Sie auf den Kreis, um ein Foto hochzuladen</div>');
  $('.um-account-side ul li:last-child').remove();
  $('.um-account-side ul li:eq( 2 )').remove();
  
   $(".job-dashboard-action-duplicate").each(function() {
        var current_element = $(this);      
            current_element.parent('li').remove();
  });
  
  $('#comments').closest('.detail-wrapper').addClass('komentari');
  
    $(".page-id-2365 .section ul.job_listings .no_job_listings_found").text('aasasa');

  
  
});

</script>
<!-- end Simple Custom CSS and JS -->
