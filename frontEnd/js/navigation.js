var i = {
  data: function () {
    return { showSearch: !1, showNavigation: !1 };
  },
  toggleSearch: function () {
    this.showSearch = !this.showSearch;
  },
  toggleNavigation: function () {
    this.showNavigation = !this.showNavigation;
  },
};

function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  console.log(document.getElementById("mySidebar").style);
  document.getElementById("app").style.marginLeft = "250px";
  document.getElementById("mySidebar").style.removeProperty('transform');
}
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("app").style.marginLeft = "0";
  document.getElementById("mySidebar").style.transform = "translate3d(-100%,0,0)";
}
