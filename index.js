function show(){
	document.getElementById('form').style.display="block";
	document.getElementById('add').style.display="none";

}
function save(){
	document.getElementById('add').style.display="block";
	document.getElementById('form').style.display="none";
	var a=document.getElementById('item').value;
	alert("Itam Saved");



}
function check(id){
	if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='delete.php?rnk='+id;
     }
}

function inc(i){
 // var a=document.getElementById("like").style.background;
 // alert("hello");
 window.location.href='updatelike.php?rn='+i;
}

function cut(){
	alert("hello");
	// document.getElementById('natural').style.display="block";
}
