var navId = document.currentScript.getAttribute("navId")

$(document).ready(function() {
    $('#navigation').load("header.html", function(){
        $('#'+navId).addClass('active')
    })

});