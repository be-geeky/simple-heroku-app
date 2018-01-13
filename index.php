<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://www.gstatic.com/firebasejs/3.7.2/firebase.js"></script>
<script>
// Initialize Firebase
  var config = {
    apiKey: "AIzaSyAMyHQkZUpmTj342hqoW4wCEX-Kjt00Iaw",
    authDomain: "push-notifications-78a15.firebaseapp.com",
    databaseURL: "https://push-notifications-78a15.firebaseio.com",
    projectId: "push-notifications-78a15",
    storageBucket: "push-notifications-78a15.appspot.com",
    messagingSenderId: "895350685860"
  };
  firebase.initializeApp(config);


const messaging = firebase.messaging();

messaging.requestPermission()
.then(function() {
  console.log('Notification permission granted.');
  return messaging.getToken();
})
.then(function(token) {
  console.log(token); // Display user token
})
.catch(function(err) { // Happen if user deney permission
  console.log('Unable to get permission to notify.', err);
});

messaging.onMessage(function(payload){
  console.log('onMessage',payload);
})

</script>
  </head>
  <body>
    
  </body>
</html>
