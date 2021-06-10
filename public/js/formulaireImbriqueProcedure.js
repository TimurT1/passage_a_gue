

    // setup an "add a procedure" link
    var $addProcedureLink = $('<a href="#" class="add_procedure_link">Ajouter Procedure</a>');
    var $newLinkLi = $('<li></li>').append($addProcedureLink);
    //var $collectionHolder= $('ul.procedures');
   


   
    $('.ovrir').on("click", function(e) {
        e.preventDefault();

        if($(this).text()=="Cacher")
        {
            $(this).text("Voir");
        } else {
            $(this).text("Cacher");
        }            
        $(this).parent().find("ul").toggle();  
    });//$('.ovrir')

    
        
        
   
    jQuery(document).ready(function() {
        // Get the ul that holds the collection of procedures
        var $collectionHolder = $('ul.procedures');
     
        
        
         // add the "add a procedure" anchor and li to the procedures ul
         $collectionHolder.append($newLinkLi);
        
         // count the current form inputs we have (e.g. 2), use that as the new
         // index when inserting a new item (e.g. 2)
         $collectionHolder.data('index', $collectionHolder.find(':input').length);
         
         $addProcedureLink.on('click', function(e) {
             // prevent the link from creating a "#" on the URL
             e.preventDefault();
             
             // add a new procedure form (see code block below)
             addProcedureForm($collectionHolder, $newLinkLi);
         });          
              
    });


    
    function addProcedureForm($collectionHolder, $newLinkLi) {
        // Get the data-prototype explained earlier
        var prototype = $collectionHolder.data('prototype');
       
        // get the new index
        index = $collectionHolder.data('index');
        
        // Replace '$$name$$' in the prototype's HTML to
        // instead be a number based on how many items we have
        var newForm = prototype.replace(/__name__/g, index);
        
        // increase the index with one for the next item
        $collectionHolder.data('index', index + 1);
        
        console.log('index'+index);
        // Display the form in the page in an li, before the "Add a procedure" link li
        var $newFormLi = $('<li></li>').append(newForm);
        
        // also add a remove button, just for this example
        $newFormLi.append('<a href="#" class="remove-procedure">Supprimer Procedure</a>');
        
        $newLinkLi.before($newFormLi);
        
        // handle the removal, just for this example
        $('.remove-procedure').click(function(e) {
            e.preventDefault();
            
            $(this).parent().remove();
            
            return false;
        });
    }
        /////////////////////////////////////////////////////////
    $('.del').click(function(e) {
            e.preventDefault();
            
            $(this).parent("span").remove();
            //removeProcedure(this);
            return false;
        });


////////////////////////////////////////////////////////////////////
        /*$('.ovrirProcedure').click(function(e) {
            e.preventDefault();
            
            $(this).parent().find(".procedures").toggle();
           
            
            return false;
        });
*/
// Ovrir "ul" dans le formulaire de Passage à Gue (Procedure; Procedure)
      /*  $('.ovrir').on("click", function(e) {
            e.preventDefault();

            if($(this).text()=="Cacher")
            {
                $(this).text("Voir");
            } else {
                $(this).text("Cacher");
            }            
            $(this).parent().find("ul").toggle();  
            
            
                 
            return false;

        });

*/
       

    
    /////////////////////////////////////////////////////////
        


  
        
    

//////
      
  