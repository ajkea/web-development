window.onload = function () {
    var time = document.getElementsByClassName('countdown');

    setInterval(function  () {countdown(time)}, 1000)

}

window.countdown = function (time) {

    let now = new Date().getTime();
    for (let i = 0; i < time.length; i++) {
        var end_date = new Date(time[i].dataset.time)

        let distance = end_date - now

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        time[i].innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";
    }
}