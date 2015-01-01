/*Jamell Winn*/

$( document ).ready(function() {
    var num = 1;
        if(num == 1){
                $.ajax({
                    url: 'pages/sidebars/sidebar.php', 
                    success: function(data){ $("aside").html(data); }
                })
}
});

// Nav Click Events


$('#home_btn').click(function(){
    var num = 1;
         if(num == 1){
            $.ajax({
                url: 'pages/sidebars/sidebar.php', 
                success: function(data){ $("aside").html(data); }
            });
        }
    })


$('#mocks_btn').click(function(){
    var num = 2;
        if (num == 2){
            $.ajax({
                url: 'pages/sidebars/sidebar2.php', 
                success: function(data){ $("aside").html(data); }
            });
    }
})

$('#graphics_btn').click(function(){
    var num = 3;
        if (num == 3){
            $.ajax({
                url: 'pages/sidebars/sidebar3.php', 
                success: function(data){ $("aside").html(data); }
            });
    }
})



$('.site_image').contenthover({
    overlay_background:'#000',
    overlay_opacity:0.8
});

$('.mockup_image').contenthover({
    overlay_background:'#000',
    overlay_opacity:0.8
});

$('.icon').mouseover(function(){
    $(this).rotate(355);
});

$('.icon').mouseleave(function(){
    $(this).rotate(360);
});