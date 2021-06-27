$(document).ready(function() {
  $("#modalAddMunForm").submit(
    function() {
      return validateForm("#modalAddMunForm");
  });
  
  $("#modalEditMunForm").submit(
    function() {
      return validateForm("#modalEditMunForm");
  });

  $("#modalAddUFForm").submit(
    function() {
      return validateForm("#modalAddUFForm");
  });
  
  $("#modalEditUFForm").submit(
    function() {
      return validateForm("#modalEditUFForm");
  });
});


function validateForm(oThis){
  var statusOk = true;
  
  $(oThis + " :input").each(function(){
      var input = $(this);

      if(input.attr("requiredData")){
        if(input.val() == ""){
          changeValidationState(input,false);
          // input.addClass("data-required-invalid");

          statusOk = false;
        }else{
          changeValidationState(input,true);
        } 
      }
   });

   if(statusOk){
     resetForm(oThis);
   }
   return statusOk;
}

// function removeClass(inputs,hasClass,remove){
//   inputs.siblings().each(
//     function(){
//       if($(this).hasClass(hasClass)){
//         $(this).removeClass(remove);
//       }

//       if(hasClass == "validation-necessary"){
//         $(this).addClass("validation-ok");
//       } else {
//         $(this).addClass("validation-necessary");
//       }
//     });
// }

function changeValidationState(input, condition) {
  // INVALID
  if(!condition){
    input.addClass("data-required-invalid");
    input.removeClass("data-required-valid");
    
    input.siblings().each(
      function(){
        if($(this).hasClass("validation")){
          $(this).removeClass("d-none");
          
          $(this).addClass("text-danger");
          $(this).removeClass("text-success");

          $(this).text(" <-- é necessário preencher");
        }    
      });
      
      // OK
    }else{
      input.removeClass("data-required-invalid");
      input.addClass("data-required-valid");
      
      input.siblings().each(
        function(){
          if($(this).hasClass("validation")){
            $(this).removeClass("d-none");

            $(this).addClass("text-success");
            $(this).removeClass("text-danger");

            $(this).text(" <-- tudo ok!");
          }    
      });
  }
}


function resetForm(oThis){
  $(oThis + " :input").each(function(){
    var input = $(this);

    if(input.attr("requiredData")){
      input.removeClass("data-required-invalid");
      input.removeClass("data-required-valid");

      input.siblings().each(
        function(){
          if($(this).hasClass("validation-necessary"))
            $(this).addClass("d-none");

          if($(this).hasClass("validation-ok")){
            $(this).addClass("d-none");
          }
        });
   }
  });
}