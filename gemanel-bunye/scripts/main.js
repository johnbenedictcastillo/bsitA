var navId = document.currentScript.getAttribute("navId")

$(document).ready(function() {
    $('#navigation').load("nav.html")
    $('#'+navId).addClass('active')

});