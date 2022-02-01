// ajoute la propriété pour le drop et le transfert de données
$.event.props.push("dataTransfer");

$(document).ready(function () {
  var $this,
    $log = $("#log");

  $("tr td").on({
    // on commence le drag
    dragstart: function (e) {
      $this = $(this);

      // on garde le texte en mémoire (A, B, C ou D)
      e.dataTransfer.setData("text", $this.html());
    },
    // on passe sur un élément draggable
    dragenter: function (e) {
      e.preventDefault();
    },
    // on quitte un élément draggable
    dragleave: function () {},
    // déclenché tant qu on a pas laché l élément
    dragover: function (e) {
      e.preventDefault();
    },
    // on lache l élément
    drop: function (e) {
      if (true) {
        // on récupère le texte initial
        var data = e.dataTransfer.getData("text");
        //data="<img src='"+data+"' />";

        // on log
        //$log.html(data + ' > ' + $(this).html()).fadeIn('slow').delay(1000).fadeOut();
        $log.html(data + " > " + $(this).html());
        // on met le nouveau texte à la place de l ancien et inversement
        // ATTENTION ASTUCE SUR CETTE LIGNE POUR MANGER UNE PIECE, CODE A REVOIR !!!
        $this.text($(this).text());
        $(this).html(data);
      }
    },
    // fin du drag (même sans drop)
    dragend: function () {},
    // au clic sur un élément
    click: function () {
      alert($(this).text());
    },
  });
});
