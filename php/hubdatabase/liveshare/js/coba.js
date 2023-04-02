var key = document.getElementById('key');
var con = document.getElementById('container');

key.addEventListener('keyup', function(){

    var mantap = new XMLHttpRequest();

    mantap.onreadystatechange = function(){
        if(mantap.readyState==4 && mantap.status == 200){
            con.innerHTML = mantap.responseText;
        }
    }

    mantap.open('GET','ajax/mahasiswa.php?key='+ key.value, true);
    mantap.send();
})