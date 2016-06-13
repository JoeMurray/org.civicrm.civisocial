<div class="civisocial-wrapper">
  {crmAPI var='result' entity='Setting' action='getvalue' name="enable_facebook"}
  {if $result eq '1'}
    <a class="btn btn-facebook" href="{crmURL p='civicrm/civisocial/login/facebook'}?continue={$currentUrl}">Sign in with Facebook</a>
  {/if}
  {crmAPI var='result' entity='Setting' action='getvalue' name="enable_googleplus"}
  {if $result eq '1'}
    <a class="btn btn-googleplus" href="{crmURL p='civicrm/civisocial/login/googleplus'}?continue={$currentUrl}">Sign in with Google</a>
  {/if}
  {crmAPI var='result' entity='Setting' action='getvalue' name="enable_twitter"}
  {if $result eq '1'}
    <a class="btn btn-twitter" href="{crmURL p='civicrm/civisocial/login/twitter'}?continue={$currentUrl}">Sign in with Twitter</a>
  {/if}
</div>