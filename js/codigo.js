$(document).ready(function(e) {

$("#botones").hide();

$("#lista").click(function(e) {
    $("#botones").toggle(500);
	$(".listas").fadeIn(500);
});


$("#sesion").animate({"margin-top":"150px"},1000);



});// JavaScript Document