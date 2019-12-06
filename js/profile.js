var liens = ["apropos","aporpos2","aporpos3","edit-profil"];
var article = document.querySelector("article");
var sections = article.querySelectorAll("section");
var divLiens = article.querySelector(".liens")

for (const sec of sections) {
    sec.style.display = "none";
}
article.querySelector("section.apropos").style.display = "block";
for (const lien of liens) {
    divLiens.querySelector("a#"+lien).addEventListener("click",function () {
        for (const a of divLiens.querySelector("a")) {
            a.classList.remove("active");
        }
        this.classList.add("active");
        for (const sec of sections) {
            
        }
    });
}