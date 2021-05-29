<!DOCTYPE html>
<html>

<head>
  <title>Google Auth Demo</title>
  <script src="https://apis.google.com/js/platform.js" async defer></script>

  <meta name="google-signin-client_id" content="406060550580-jn7q6rgafrpbjs3fgnb287u4oo9onr4v">
</head>

<body>
  <h1>Welcome to the Demo</h1>
  <div class="g-signin2" data-onsuccess="onSignIn"></div>
  <script>
    function onSignIn(googleUser) {
      // get user profile information
      console.log(googleUser.getBasicProfile())
      //get token
      var id_token = googleUser.getAuthResponse().id_token;
      console.log("ID_TOKEN: ", id_token);

      //Send token to backend via https post cause why not 
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'https://yourbackend.example.com/tokensignin');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onload = function() {
        console.log('Signed in as: ' + xhr.responseText);
      };
      xhr.send('idtoken=' + id_token);
    }
  </script>
</body>

</html>