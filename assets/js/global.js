$(document).ready(function() {
  $("#modalAddMunForm").submit(
    function() {
      return validateForm("#modalAddMunForm");
  });
  
  $("#modalEditMunForm").submit(
    function() {
      return validateForm("#modalEditMunForm");
  });
});

function validateForm(oThis){
  var statusOk = true;
  
  $(oThis + " :input").each(function(){
      var input = $(this);
      if(input.attr("requiredData") && input.val() == ""){
        // if(input.attr('type') == "text")
        input.addClass("data-required-invalid");
        setTimeout(
          function(){
            input.removeClass("data-required-invalid")
          }, 2000);
        statusOk = false;
      }
   });

   return statusOk;
}

function removeRequireInvalid(input){

}
// $("#modalEditForm").submit( function(event) { console.log("clicou");
    //   //validateForm(event);
    //   event.preventDefault();
    // }); // event

    // $("#modalDeleteForm").submit( function(event) { console.log("clicou");
    //   //validateForm(event);
    //   event.preventDefault();
    // }); // event

    // // event
    // function validateForm(event) {
    //     // if ( $( "input" ).first().val() === "correct" ) {
    //       // $( "span" ).text( "Validated..." ).show();
    //       // return;
    //     // }
    //   //  alert("clicou");
    //   console.log("clicou");
    //     // $( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );
    //     event.preventDefault();

    // }