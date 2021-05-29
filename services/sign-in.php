<!-- <html lang="en">

<head>
  <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="406060550580-jn7q6rgafrpbjs3fgnb287u4oo9onr4v.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
  <div id="g_id_onload" data-client_id="406060550580-jn7q6rgafrpbjs3fgnb287u4oo9onr4v" data-context="signin" data-ux_mode="popup" data-login_uri="localhost:8000" data-auto_prompt="false">
  </div>
  <br>
  <h1> dunno </h1>

  <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline" data-text="signin_with" data-size="large" data-logo_alignment="left">
  </div>
  <script>
    console.log("Hello guys");

    function onSignIn(googleUser) {
      var profile = googleUser.getBasicProfile();
      console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
      console.log('Name: ' + profile.getName());
      console.log('Image URL: ' + profile.getImageUrl());
      console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }

    function test() {
      console.log("Test runs");
    }


    // // The ID token you need to pass to your backend:
    // var id_token = googleUser.getAuthResponse().id_token;
    // console.log("ID Token: " + id_token);
    // }
  </script>
</body>

</html> -->

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
      var id_token = googleUser.getAuthResponse().id_token;
      console.log("ID_TOKEN: ", id_token);
    }
  </script>
</body>

</html>