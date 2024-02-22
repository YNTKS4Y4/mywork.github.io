const contentDiv = document.getElementById("content");

if (navigator.userAgent.includes("NontonTV/3.1.557 ")) {
  contentDiv.innerHTML = "Welcome, MyCustomUserAgent!";
} else {
  contentDiv.innerHTML = "Sorry, you are not authorized to view this content.";
}