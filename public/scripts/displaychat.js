//var method = "POST";
var condi2="";
const condition=async()=>
{
    // 
    const res = await fetch('/testing');
    var condi = "";
// console.log("\n");
console.log('respon json \n');

// console.log(condi);
// console.log("\n");
  condi = await res.json();
  condi2=condi;
console.log('response from condition \n');
 console.log(condi);
return condi;
}


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
    var con = condition();
    console.log("condi2");
    console.log(condi2);
    console.log(condi2[0].sender);
    console.log(data[0].senderId);
    console.log(condi2[0].receiver);
    console.log(data[0].receiverId);
    for (var i = 0; i < data.length; i++) { 
        if(condi2[0].sender === data[i].senderId){
        $("#chat-R").append("<li>" +data[i].content+"</li>"); } //chat- :: right side fo chat
    
    else if(condi2[0].receiver === data[i].receiverId){
        $("#chat-L").append("<li>" +data[i].content+"</li>"); } //chat- :: right side fo chat
        
    
    }
}


$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });




//var URL = "message/displaychat.blade.php";
const dchat = async () => {
    const res = await fetch('/msgShow');
    var data ="";
    data = await res.json();
    console.log(res); 
    return data;
}

console.log(1);
//// on loading document and displayind data for first time
console.log(2);
condition()
    .then((condi)=>{
        console.log("then part");
        console.log(condi);
    })
    .catch(condi=>{
        console.log("condi error");
    })
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