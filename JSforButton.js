window.onload = function(){
	button = document.getElementById('submitButton');
	button.onClick = sendCommand;
}

function sendCommand(){
	speed = document.getElementById("speedText").value;

	form = document.getElementById("speedForm");
	form.method = "GET";
	form.action = "remote_control.php";
	form.submit();
}

function startTime(){
    var mydate=new Date();
    var year=mydate.getYear();

	if (year < 1000)
		{
			year+=1900;
			var day =mydate.getDay();
			var month =mydate.getMonth();
			var daym =mydate.getDate();
		}

	if (daym<10)
		{
			daym ="0"+daym;
		}

	var dayarray= new Array("Sunday","Monday","Tuesday","Wednesday",
		"Thursday","Friday","Saturday");

	var montharray= new Array("January","February","March","April","May","June",
		"July","August","September","October","November","December");

	document.getElementById('date').innerHTML = dayarray[day]+", "
		+montharray[month]+" "+daym+", "+year;
}


function updateClock(){
	var Digital=new Date();
	var hours=Digital.getHours();
	var minutes=Digital.getMinutes();
	var seconds=Digital.getSeconds();
	var dn="PM";

	if (hours<12)
		dn="AM";
	if (hours>12)
		hours=hours-12;
	if (hours==0)
		hours=12;
	if (minutes<=9)
		minutes="0"+minutes;
	if (seconds<=9)
		seconds="0"+seconds;

	var ctime=hours+":"+minutes+" " +dn
	document.getElementById("clock").innerHTML = ctime;

	setTimeout("updateClock()",1000);
}
