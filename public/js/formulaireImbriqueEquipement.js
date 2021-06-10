

    // setup an "add a equipement" link
    var $addEquipementLink = $('<a href="#" class="add_equipement_link">Ajouter Equipement</a>');
    var $newLinkLi = $('<li></li>').append($addEquipementLink);
    //var $collectionHolder= $('ul.equipements');
   


   
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
        // Get the ul that holds the collection of equipements
        var $collectionHolder = $('ul.equipements');
     
        
        
         // add the "add a equipement" anchor and li to the equipements ul
         $collectionHolder.append($newLinkLi);
        
         // count the current form inputs we have (e.g. 2), use that as the new
         // index when inserting a new item (e.g. 2)
         $collectionHolder.data('index', $collectionHolder.find(':input').length);
         
         $addEquipementLink.on('click', function(e) {
             // prevent the link from creating a "#" on the URL
             e.preventDefault();
             
             // add a new equipement form (see code block below)
             addEquipementForm($collectionHolder, $newLinkLi);
         });          
              
    });


    
    function addEquipementForm($collectionHolder, $newLinkLi) {
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
        // Display the form in the page in an li, before the "Add a equipement" link li
        var $newFormLi = $('<li></li>').append(newForm);
        
        // also add a remove button, just for this example
        $newFormLi.append('<a href="#" class="remove-equipement">Supprimer Equipement</a>');
        
        $newLinkLi.before($newFormLi);
        
        // handle the removal, just for this example
        $('.remove-equipement').click(function(e) {
            e.preventDefault();
            
            $(this).parent().remove();
            
            return false;
        });
    }
        /////////////////////////////////////////////////////////
    $('.del').click(function(e) {
            e.preventDefault();
            
            $(this).parent("span").remove();
            //removeEquipement(this);
            return false;
        });


////////////////////////////////////////////////////////////////////
        /*$('.ovrirEquipement').click(function(e) {
            e.preventDefault();
            
            $(this).parent().find(".equipements").toggle();
           
            
            return false;
        });
*/
// Ovrir "ul" dans le formulaire de Passage à Gue (equipement; Equipement)
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
      
  