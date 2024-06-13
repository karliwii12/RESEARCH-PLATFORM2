function Ocultar() {
    const click = document.getElementById("sidebar");
    const b = document.getElementById('boton');
    const a = document.getElementById('1');
    const al = document.getElementById('2');
    const all = document.getElementById('3');
    const con = document.getElementById('contenedor')
    if (sidebar.style.display === "none") {
        sidebar.style.display = "block";
        a.className = 'col-lg-3';
        al.className = 'col-lg-6';
        all.className = 'col-lg-3';
        con.style.width = '90%';
    } else {
        sidebar.style.display = "none";
        a.className = 'col-lg-0';
        al.className = 'col-lg-8';
        all.className = 'col-lg-4';
        con.style.width = '90%'


    }
}