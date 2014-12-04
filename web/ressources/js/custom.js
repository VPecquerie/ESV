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
    data: { article_id: id, article_quantite: quantite },
    dataType:"html"
  })
  .done(function( msg )
  {
    if(msg == "OK")
    {
      console.log('OK');
      $('#panier-info').remove();
      $('#panier-info').append('<img src="{{ asset('ressources/img/loader.gif') }}" alt="Chargement..." title="Chargment en cours..." />');
      $.ajax
      ({
        type: "GET",
        url: Routing.generate('croangels_esv_ecommerce_get_panier'),
        dataType:"html"
      }).done(function(retour)
      {
        console.log('Update panier...');
        $('#panier-info').remove();
        $('body').append(retour);
      }).fail(function(jqXHR, textStatus, errorThrown)
      {
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
      });
    }

  })
  .fail(function(jqXHR, textStatus, errorThrown){
    console.log('YOU FAILED !');
    console.log(jqXHR);
    console.log(textStatus);
    console.log(errorThrown);
  });
}
