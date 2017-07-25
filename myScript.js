
window.alert('This is a alert from myScript.');

var y = document.getElementById('year');
var m = document.getElementById('month');
var d = document.getElementById('day');
var dateEle = new Date();

var modm = dateEle.getMonth() + 1;

function abstructDate() {
	y.innerHTML = "The year is now " + dateEle.getFullYear() + "<br>";
	m.innerHTML = "Month is " + modm + "<br>";
	d.innerHTML = "Date is " + dateEle.getDate() + ", and it\'s the " + dateEle.getDay() + ". day in the week." + "<br>";
}