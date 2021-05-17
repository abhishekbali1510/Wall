//var method = "POST";
var scrolled = false; //to check if user is crolling 
function updateScroll(){
   
        var element = document.getElementById("msg");
        element.onscroll = function(){
            scrolled = true;
        }
        if(!scrolled)
        element.scrollTop = element.scrollHeight;
       else{
       setTimeout(function(){scrolled=false;},3000)
       
}
}

$("#msg").on('scroll', function(){
    scrolled=true;
});
function displayALL(data) {
    $("#chat").empty();
    for (var i = 0; i < data.length; i++) { 
        $("#chat").append("<li>" +data[i].content+"</li>") };
}


$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });




//var URL = "message/displaychat.blade.php";
const dchat = async () => {
    const res = await fetch('/test4');
    var data ="";
    data = await res.json();
    console.log(res); 
    return data;
}

console.log(1);
//// on loading document and displayind data for first time
console.log(2);

setInterval(function () {
  //$("li:last-child").empty();
    dchat()
        .then((data) => {
            console.log("dt : "+ data.length+ " sess" + sessionStorage.count)
            console.log(data);
            if(data.length!==sessionStorage.count){
                var cou = data.length-1;
                //$("#chat").append="<li>"+data[cou].msg+ "</li>";
                displayALL(data);
                console.log("time d :"+data[cou].msg);
               // $("#chat").append ="<li>"+data[cou].msg+"</li>"
                sessionStorage.count= data.length;
                //console.log("dt cond: "+ data.length+ " sess" + sessionStorage.count)
               updateScroll();
            }
           

        })
        .catch(data => {
            $("#chat").append("<li>" +"error"+"   </li>") 
            console.log("error sql yahase: " + data);

        });
}, 1000);
$("#msg").click(function(){
    this.scrollTop = this.scrollHeight - this.clientHeight;
    //scrolled =false;
    scrolled=false;
            
  });
console.log(3);
console.log(4);






////////////////////////////////////////////////////////////////////////////
/*$(document).ready(function () {
    dchat()
        .then((data) => {
            console.log(data);
            var count = 0;
             count = data.length;
            if (typeof (Storage) !== "undefined") {
                // Store
                sessionStorage.count = data.length;
                // Retrieve
                $("#result").text("session : " + sessionStorage.count + "data len : " + data.length);
            }
            displayALL(data);
        })
        .catch(data => {
            console.log("error : " + data);

        });

})*/

/*$("button").click(function () {
    $("#chat").empty();
    dchat()
        .then((data) => {
            console.log(data);
            if (typeof (Storage) !== "undefined") {
                // Store
                sessionStorage.count = data.length;
                // Retrieve
                $("#result").text("session : " + sessionStorage.count + "data len : " + data.length);
            }
            displayALL(data);
        })
        .catch(data => {
            console.log("error click sql: " + data);

        });
});*/