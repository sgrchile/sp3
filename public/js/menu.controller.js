$(document).ready(function(){
    $.get("https://plataforma.sgrchile.com/api/menus/all").done(function(data){
        if (data !== null){
            if (Object.keys(data).length > 0 ){
                $.each(data, function( index, value ){
                    let li = "<li id='menu"+ value.MENU_ID + "'><a href='" +location.protocol + "//" +window.location.hostname + value.MENU_URL +"'>" + value.MENU_NAME +"</a></li>";
                    if (value.MENU_PARENT == null){
                        $("#menu\\.principal").append(li);
                    }
                    else{
                        if ($( "#menu"+ value.MENU_PARENT ).children("ul").length > 0){
                            $( "#menu"+ value.MENU_PARENT ).children("ul").append(li);
                        }
                        else{
                            $( "#menu"+ value.MENU_PARENT ).addClass("dropdown");
                            $( "#menu"+ value.MENU_PARENT ).children("a").attr("data-toggle", "dropdown");
                            $( "#menu"+ value.MENU_PARENT ).append("<ul class='dropdown-menu-left'>" + li +"</ul>");
                        }
                    }
                });
            }
            else
            {
                let row = "<tr><th scope='row' colspan='6'>(sin datos)</th></tr>";
                $("oportunidades\\.table").append(row);  
            }
        }
        else{
            let row = "<tr><th scope='row' colspan='6'>(sin datos)</th></tr>";
            $("oportunidades\\.table").append(row);  
        }
    });
});