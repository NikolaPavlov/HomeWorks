function hideOddRows(){
    var tr = document.getElementsByTagName('tr');
    for(var i = 0; i < tr.length; i += 2) {
        tr[i].style.display = 'none';
    }
}