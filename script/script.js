$(function () {
  $(".sidenav").sidenav();   
});

$(document).ready(function () {  
  $("#noivas").click(function () {
    $(function () {      
      $(".container").load("../pages/noivas.php");                        
    });
  })
  $("#noivass").click(function () {
    $(function () {      
      $(".container").load("../pages/noivas.php");                  
    });
  })
  $("#projetos").click(function () {
    $(function () {
      $(".container").load("../pages/projetos.php");
    });
  })
  $("#projetoss").click(function () {
    $(function () {
      $(".container").load("../pages/projetos.php");
    });
  })
  $("#studio").click(function () {
    $(function () {
      $(".container").load("../pages/studio.php");
    });
  })
  $("#studios").click(function () {
    $(function () {
      $(".container").load("../pages/studio.php");
    });
  })
  $("#contatos").click(function () {
    $(function () {
      $(".container").load("../pages/contato.php");
    });
  })  
  $("#contatoss").click(function () {
    $(function () {
      $(".container").load("../pages/contato.php");
    });
  })  
});


