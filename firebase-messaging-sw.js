importScripts('https://www.gstatic.com/firebasejs/3.7.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/3.7.1/firebase-messaging.js');

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
