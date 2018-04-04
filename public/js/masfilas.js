$(document).ready(function(){
    $("#masfilas").click(function(){
        var tableReg = document.getElementById("mytable");
        $("#mytable").append("<tr>"+tableReg.rows[0].innerHTML+"</tr>");//1
        $('.remove-item').off().click(function(e) {
            $(this).parent('td').parent('tr').remove();//2
        });
        //addcambios();
    });
});