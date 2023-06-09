// Navbar scrolling template

window.addEventListener('scroll', ()=>{
    document.querySelector('nav').classList.toggle('scroll-bar', window.scrollY > 0)
})

// Open Navbar
const menu = document.querySelector(".navbarMenu");
const openBtn = document.querySelector("#open-icon-btn");
const closeBtn = document.querySelector("#close-icon-btn");

openBtn.addEventListener('click', ()=>{
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    openBtn.style.display = "none";
})

// Close Navbar

const closeNavbar = ()=>{
    menu.style.display = "none";
    closeBtn.style.display = "none";
    openBtn.style.display = "inline-block";
}

closeBtn.addEventListener('click', closeNavbar);

var jk;
function getJk(jenisKelamin){
    this.jk = jenisKelamin;
}

function joinus(){
    var name = document.getElementById('Name').value;
    var usia = document.getElementById('Usia').value;
    var Email = document.getElementById('email').value;
    var Kerja = document.getElementById('Pekerjaan').value;
    var dom = document.getElementById('Domisili').value;

    if(name!= "" &&  usia != "" && Email != "" && Kerja !="" && dom != "" && this.jk != undefined ){
        if(this.jk == "Pria"){
            var PL = 'L';
        }else if(this.jk == "Perempuan"){
            PL = "P";
        }
         alert( "Selamat Bergabung dalam komunitas Nadeline\n\n" + "Nama : " + name + " (" + PL + ")" + "\nUsia: " + usia + " tahun\n" + "Pekerjaan : " +Kerja + "\nDomisili: " + dom+"\nEmail: " +Email );
         window.open("index.php");
    }else{
        alert("You are required to fill the information");
    }
}