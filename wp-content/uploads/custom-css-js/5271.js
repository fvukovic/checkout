<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
	setTimeout( function(){ 
      let lang = $('html').attr('lang');
  
    if(lang == "de-DE"){
       $(".page-id-2365 .section ul.job_listings .no_job_listings_found").text('Es gibt kein Suchergebnis für Ihre Anfrage');  
       $(".page-id-2365 .section ul.job_listings .no_job_listings_found").addClass('active');
    }
      else {
         $(".page-id-2365 .section ul.job_listings .no_job_listings_found").text('There is no search result for your request');  
         $(".page-id-2365 .section ul.job_listings .no_job_listings_found").addClass('active');
      }
     
    }, 2500 );
  
});

</script>
<!-- end Simple Custom CSS and JS -->
