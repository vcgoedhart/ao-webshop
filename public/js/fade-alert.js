var alert = document.getElementById("fade-alert");

(function () {
    setTimeout(function () {
        alert.style.animation = "fadeAlert 750ms ease";
    }, 3000);
    setTimeout(function () {
        alert.remove();
    }, 3750);
})();

/**
 * 
 * @param {*} test 
 * @param {*} a 
 */
function test(test, a) {

}