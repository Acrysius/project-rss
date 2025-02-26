let potatoIcon = ["butter_potato", "raw_potato", "baked_potato", "cheese_potato", "chilli_potato", "mushroom_potato", "egg_potato", "potato"];

$(document).ready(function(){
    $("#navbar-icon").attr("src", "images/"+potatoIcon[Math.floor(Math.random()*potatoIcon.length)]+".webp");
});