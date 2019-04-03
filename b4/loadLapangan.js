console.log("test");
var tambah = "";
$(document).ready(function () {
    $.getJSON("dataLapangan.json", function (data) {
        console.log(data);
        for (var i in data.lapangan) {
            tambah += "<div class='p-4 mr-3'>" +
                "<div class='card' style='width: 18rem;'>" +
                "<img src='" + data.lapangan[i].imgLapangan + "' class='card-img-top' width='250px' height='300px'>" +
                "<div class='card-body'>" +
                "<h5 class='card-title text-center'>" + data.lapangan[i].namaLapangan + "</h5>" +
                "<a href='#'' class='btn btn-primary col-12'>Book</a>" +
                "</div>" +
                "</div>" +
                "</div>"
        }
        $(".konten").append(tambah);
    });
});