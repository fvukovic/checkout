<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
   let lang = $('html').attr('lang');
  
    if(lang == "de-DE"){
      $(".page-id-2298 #um-submit-btn").val('Login');
      $(".page-id-2299 #um-submit-btn").val('Registrieren');
      $("#free-job").text('Kostenlose Anmeldung');
      $(".page-id-2365 .no_job_listings_found").text('Es gibt kein Suchergebnis für Ihre Anfrage');
      $(".page-id-2298 .um-link-alt").text('Passwort vergessen?');
      $(".um-field-username .um-field-error").text('Bitte geben Sie Ihren Benutzername oder E-Mail-Adresse');
      $(".um-field-password .um-field-error").text('Bitte geben Sie Ihr Passwort');
      $("label[for='username-2290']").text('Benutzername oder E-Mail');
      $("label[for='user_password-2290']").text('Passwort');
      $("label[for='user_login-2289']").text('Benutzername');
      $("label[for='first_name-2289']").text('Vorname');
      $("label[for='last_name-2289']").text('Nachname');
      $("label[for='user_email-2289']").text('E-Mail-Adresse');
      $("label[for='user_password-2289']").text('Passwort');
      $("label[for='add_post_rating']").text('IHRE GESAMTBEWERTUNG DIESES VERZEICHNISSES');   
      $(".page-id-2309 .title-premium").text('Passwort');
      $(".um-notice.success").text('Ihr Konto wurde erfolgreich aktualisiert');
      $("#select2-profile_privacy-result-zvw3-Everyone").text('Jeder');
      $("#pmpro_message_bottom").append('Ihre Kartennummer ist unvollständig.');
      $(".um-field-user_login .um-field-error").text('Benutzername ist erforderlich');
      $("#cookie_action_close_header").text('AKZEPTIEREN');
      $(".detail-wrapper.komentari .title-review").text('Bewertungen');
      $(".detail-wrapper.komentari .pixrating_title").text('Titel');
      $(".detail-wrapper.komentari #pixrating_title").val('Titel');
      $("label[for='comment']").text('Nachricht');
      $(".detail-wrapper.komentari #comment").val('Nachricht');
      $(".detail-wrapper.komentari .submit").val('Speichern');
      $(".detail-wrapper.komentari .title-review").text('Bewertungen');
       $("label[for='pixrating_title']").text('TITEL DEINER BEWERTUNG:');
      
    }
  
    else {
      $(".page-id-2298 #um-submit-btn").val('Login');
      $(".page-id-2299 #um-submit-btn").val('Register');
      $(".page-id-2298 .um-link-alt").text('Forgot your password?');
      $("label[for='username-2290']").text('Username or E-Mail');
      $("label[for='user_password-2290']").text('Password');
      $("label[for='user_login-2289']").text('Username');
      $("label[for='first_name-2289']").text('First name');
      $("label[for='last_name-2289']").text('Last name');
      $("label[for='user_email-2289']").text('E-mail address');
      $("label[for='user_password-2289']").text('Password');
      $("label[for='confirm_user_password-2289']").text('Confirm Password');
      $("#free-job").text('Free post');
      $(".um-field-username .um-field-error").text('Please enter your username or email');
      $(".um-field-password .um-field-error").text('Please enter your password');
       $(".um-notice.success").text('Your account was updated successfully');
      $("#pmpro_message_bottom").append('Your card number is incomplete.');
      $(".um-field-user_login .um-field-error").text('Username is required');
      $(".um-field-user_email .um-field-error").text('Please enter your E-mail');
     $("#cookie_action_close_header").text('ACCEPT');
      $(".detail-wrapper.komentari .title-review").text('Reviews');
      $("label[for='add_post_rating']").text('YOUR OVERALL RATING OF THIS LISTING');
      $(".detail-wrapper.komentari .pixrating_title").text('Title');
      $(".detail-wrapper.komentari #pixrating_title").val('Title');
      $("label[for='comment']").text('Message');
      $(".detail-wrapper.komentari #comment").val('Message');
      $(".detail-wrapper.komentari .submit").val('Submit');
      $(".page-id-2365 .no_job_listings_found").text('There is no search result for your request');
      $(".detail-wrapper.komentari .title-review").text('Reviews');
      $("label[for='pixrating_title']").text('TITLE OF YOUR REVIEW:');    }
});

</script>
<!-- end Simple Custom CSS and JS -->
