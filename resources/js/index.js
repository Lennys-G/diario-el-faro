/* Reloj */
function updateDateTime() {
    const date = new Date();
    const getCurrentDate = date.toLocaleString();

    const showCurrentDate = document.getElementById("currentDate");
    showCurrentDate.innerHTML = getCurrentDate;
}
setInterval(updateDateTime, 1000);
