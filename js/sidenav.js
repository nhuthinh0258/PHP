function openNav() {
  document.getElementById("body").style.marginLeft = "15%";
  document.getElementById("mySidenav").style.width = "15%";
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
  }
  
  function closeNav() {
    document.getElementById("body").style.marginLeft = "0%";
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
  }