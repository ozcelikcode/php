function kopyala() {
    var text = document.getElementById("metin");
    text.select();
    document.execCommand("copy");
}