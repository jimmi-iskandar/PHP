//ambil element

let key = document.getElementById('live');

let tombol_live = document.getElementById('tombol_live');

let container = document.getElementById('container');


//tambahkan event ketika key ditulis

key.addEventListener('keyup', function () {

    //buat objek ajax
    let ajak = new XMLHttpRequest();

    //cek kesiapan ajax
    ajak.onreadystatechange = function () {
        if (ajak.readyState == 4 && ajak.status == 200) {
            container.innerHTML = ajak.responseText;
        }
    }
    //exsekusi ajak

    ajak.open('GET','ajax/mahasiswa.php?key='+ key.value, true);
    ajak.send();
})

