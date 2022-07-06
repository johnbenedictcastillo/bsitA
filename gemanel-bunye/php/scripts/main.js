var navId = document.currentScript.getAttribute("navId")

$(document).ready(function() {
    $('#navigation').load("nav.html", function(){
        $('#'+navId).addClass('active')
    })

});