document.body.onkeydown = function( e ) {
    var keys = {
        37: 'left',
        39: 'right',
        40: 'down',
        38: 'rotate', //up arrow for rotation the falling obj
        32: 'rotate',  //space for rotation the falling obj


        27: 'esc',  //exit of the game
        80: 'pause' //pause
    }
    if ( typeof keys[ e.keyCode ] != 'undefined' ) {
        keyPress( keys[ e.keyCode ] );
        render();
    }
}

