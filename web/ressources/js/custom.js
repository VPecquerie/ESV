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
});
