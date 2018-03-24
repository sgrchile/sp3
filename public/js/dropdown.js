$("#rubro").change(function (event) {
    $.get("subrubros/"+event.target.value+"", function (response, rubro) {
        console.log(response);

        $("#subrubro").empty();

        for ( i=0; i<response.length; i++){

            $("#subrubro").append("<option value='"+response[i].id+"'> "+response[i].name+"</option>");
        }
    });
});
