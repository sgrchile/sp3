$(document).ready(function(){
    $.get("https://plataforma.sgrchile.com/api/menus/all").done(function(data){
        if (data !== null){
            if (Object.keys(data).length > 0 ){
                $.each(data, function( index, value ){
                    let li = "<li><a href='" + value.MENU_URL +"'>" + value.MENU_NAME +"</a></li>";
                    $("#menu\\.principal").append(li);
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