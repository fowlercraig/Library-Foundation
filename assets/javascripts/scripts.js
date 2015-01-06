$(function(){

	$("form.cart").on("change", ".quantity .qty", function () { $(this).closest('li').find('.add_to_cart_button').attr('data-quantity', this.value); });
  ​
  // Replace Some Copy

  $("span.amount").text(function () {
    return $(this).text().replace("$0.00", "Free"); 
  });

});