function changeText(){
    var button = document.getElementsByTagName('button');
    if(button[0].innerHTML == 'Unlike'){
        button[0].innerHTML = 'Like'
    } else {
        button[0].innerHTML = 'Unlike';
    }
}
