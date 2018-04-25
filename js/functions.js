$(document).ready(function(){

  // background gradient
        var gradient1 = ['#B993D6,#8CA6DB'];
        var gradient2 = ['#649173,#DBD5A4'];
        var gradient3 = ['#00d2ff,#3a7bd5'];
        var gradient4 = ['#DAD299,#B0DAB9'];
        var gradient5 = ['#ddd6f3,#faaca8'];
        var gradient6 = ['#DE6262,#FFB88C'];
        var gradient7 = ['#f857a6,#ff5858'];
        var gradient8 = ['#4b6cb7,#182848'];
        var gradient9 = ['#e43a15,#e65245'];
        var gradient10 = ['#5f2c82,#49a09d'];
        var gradient11 = ['#24C6DC,#514A9D'];

        var gradient = [gradient1, gradient2, gradient3, gradient4, gradient5, gradient6, gradient7, gradient8, gradient9, gradient10, gradient11]

        var aleatoire = Math.floor(Math.random() * 11)

  $('.gradient').css('background-image', 'linear-gradient(' + gradient[aleatoire] + ')');

});
