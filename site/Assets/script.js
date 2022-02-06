function responsiveTopNav() {
  var x = document.getElementById("navMain");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

$(document).ready(function () {
  $(function () {

    try {
      var x = document.getElementById("home");
      console.log(x);


      if (x.className != "active") {
        x.className += (' active');
        console.log(x.className);
      } else {
        x.className = "";
        console.log(x);
      }
    } catch {
      console.log("Not home")


      if ((location.pathname.split("/")[1]) !== "") {
        $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass(' active');
        console.log(location.pathname.split("/")[1]);
      }
    }

  }
  )
});
