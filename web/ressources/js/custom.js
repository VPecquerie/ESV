$(function()
{
  $('#lienShowMenu').click(function()
  {
    if($("#menuConnexion").is(":visible"))
    {
      $('#menuConnexion').hide();
    }
    else
    {
      $('#menuConnexion').show();
    }

    return false;
  });

  $('select').select2
  ({
    placeholder: "Veuillez selectionner une valeur",
  });

  $('.carousel').delay(4000).carousel();


  $('body').on('click', '.btnAddOneProduct', function()
  {

    var id = $(this).attr('id').split("_").pop();
    addToPanier(id, 1);
  });

});



// AJAX PART :

function addToPanier(id, quantite = 1)
{
  $.ajax
  ({
    type: "POST",
    url: Routing.generate('croangels_esv_ecommerce_add_to_panier'),
    data: { article_id: id, article_quantite: quantite }
  })
  .done(function( msg )
  {
    console.log(msg);

  });
}
