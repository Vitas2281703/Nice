var refLink = document.getElementById("referal-link");
var refBtn = document.getElementById("ref-copylink");

refBtn.onclick = function() {
    refLink.select();
    document.execCommand("copy");
    refBtn.style = 'background-color: #169600;';
    refLink.select();
}
