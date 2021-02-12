$( document ).ready(function(){
    $("select").material_select();
    $(".button-collapse").sideNav();
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Ahora',
        clear: 'Limpiar',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
      });
       // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
        $(".dropdown-button").dropdown();
        $('.slider').slider();  
        
})
