$(document).ready(function() 
{
    $.ajax({
        url: "data.json",
        dataType: "json"
    }).done(function(response) {
        var x = "";
        response.forEach(element => {
            x+="<tr>"+
            "<td>"+element.name+"</td>"+
            "<td>"+element.lastname+"</td>"+
            "<td>"+element.gender+"</td>"+
            "<td>"+element.position+"</td>"+
            "<td>"+element.number+"</td>"+
            "<td>"+element.country+"</td>";
            $('#table-item').html(x);
        });
    });