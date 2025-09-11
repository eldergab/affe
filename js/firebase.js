// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDplkg8QESxOZB4o6sL0dm8_H8sUza67nM",
  authDomain: "consorcio-84d36.firebaseapp.com",
  projectId: "consorcio-84d36",
  storageBucket: "consorcio-84d36.firebasestorage.app",
  messagingSenderId: "411546295386",
  appId: "1:411546295386:web:1730f62a37a368bc630c63",
  measurementId: "G-6XSKZD2Y47"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
