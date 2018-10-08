var date = new Date(),
    year = date.getFullYear()+"년",
    month = date.getMonth(),
    day = date.getUTCDate()+"일",
    months = [ "1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12"];

document.getElementById('daymonth').innerHTML = months[month] + " " + day;
document.getElementById('year').innerHTML = year;

// var clockH = $(".hours");
// var clockM = $(".minutes");

// function time() {     
//   var d = new Date(),
//       s = d.getSeconds() * 6,
//       m = d.getMinutes() * 6 + (s / 60),
//       h = d.getHours() % 12 / 12 * 360 + (m / 12);  
//     clockH.css("transform", "rotate("+h+"deg)");
//     clockM.css("transform", "rotate("+m+"deg)");  
// }

// var clock = setInterval(time, 1000);
// time();