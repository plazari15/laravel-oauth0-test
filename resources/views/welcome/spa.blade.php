<script src="https://cdn.auth0.com/js/lock/10.0/lock.min.js"></script>
<script type="text/javascript">
  var lock = new Auth0Lock('aBp7a8nrBIByq4EkbD3a4n9v7NOQ3Y5i', 'pi-uscs.auth0.com', {
    auth: {
      redirectUrl: 'http://mercadolivre.app/auth0/callback',
      responseType: 'code',
      params: {
        scope: 'openid email' // Learn about scopes: https://auth0.com/docs/scopes
      }
    }
  });
</script>
<button onclick="lock.show();">Login</button>