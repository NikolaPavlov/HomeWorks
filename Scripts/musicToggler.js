$('#music-toggle').toggle(
    function () {
        document.getElementById('play-music').play();
    },
    function () {
        document.getElementById('play-music').pause();
    }
);