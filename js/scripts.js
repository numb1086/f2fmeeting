function loadData(type)
{
	var date = document.getElementById('date');
	var dataHttp;//Type 0:date,1:time,2:datetime
	var uri = "fetchData.php";
	
	if(window.XMLHttpRequest) dataHttp = new XMLHttpRequest();
	else //For older browsers
		dataHttp = new ActiveXObject("Microsoft.XMLHTTP");
	dataHttp.onreadystatechange = function() {
		if(dataHttp.readyState == 4 && dataHttp.status == 200)
			if(type=="0") date.innerHTML += dataHttp.responseText;
			else if(type=="1"){
				var time = document.getElementById('time');
				time.innerHTML = dataHttp.responseText;
			}else if(type=="2"){
				var tbody = document.getElementById('tbody');
				tbody.innerHTML = dataHttp.responseText;
			}
	};
	//Set action
	if(type=="0") uri += "?date=1";
	else if(type=="1"){
		var dateId = date.options[date.selectedIndex].id;
		uri += "?dateId=" + dateId;
	}
	dataHttp.open("GET",uri,true);
	dataHttp.send("");
}
function checkAll(){
	var checkItem = document.getElementsByName('dataAll[]');

	if(checkItem[0].checked){
		for(var i=1;i<checkItem.length;i++)
			checkItem[i].checked = true;
	}else{
		for(var i=1;i<checkItem.length;i++)
			checkItem[i].checked = false;
	}
}
function randomBackGround(){
	var totalCount = 52;
	var num = Math.floor(1+Math.random()*totalCount);
	document.body.style.background = "url(\"img/"+ num +".jpg\") no-repeat center center fixed";
	document.body.style.backgroundSize="cover";
}
function downloadImage(){
	var url = parent.document.body.style.backgroundImage
	var image = url.slice(4, -1).replace(/"/g, "").replace( /.*\//,"")
	window.location = "./download.php?q=" + image
}