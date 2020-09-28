$(document).ready(function() {

$(".soma").bind("blur change check", function() {
    total = 0;

$("input[type='checkbox']:checked,input[type='radio']:checked").each(function() {
    total+=parseFloat($(this).val());
});

$("#total").val(total.toFixed(2));
$("#resultado").html(total.toFixed(2));
});

});