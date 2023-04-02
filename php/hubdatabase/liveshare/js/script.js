let key = document.getElementById('live');
let container = document.getElementById('container');

key.addEventListener('keyup', function () {
    let ajak = new XMLHttpRequest();

    ajak.onreadystatechange = function () {
        if (ajak.readyState == 4 && ajak.status == 200) {
            container.innerHTML = ajak.responseText;
        }
    }
    ajak.open('GET','ajax/mahasiswa.php?key='+ key.value, true);
    ajak.send();
})

