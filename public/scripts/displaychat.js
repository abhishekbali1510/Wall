//var method = "POST";
var condi2 = "";
var len = -1;
const condition = async () => {
    // 
    const res = await fetch('/testing');
    var condi = "";
    // console.log("\n");
    console.log('respon json \n');

    console.log(condi);
    // console.log("\n");
    condi = await res.json();
    condi2 = condi;
    // console.log('response from condition \n');
    //  console.log(condi);
    return condi;
}


var scrolled = false; //to check if user is crolling 
function updateScroll() {
    console.log("updateScroll");
    var element = document.getElementById("chat-F");
    element.onscroll = function () {
        scrolled = true;
    }
    if (!scrolled)
        element.scrollTop = element.scrollHeight;
    else {
        setTimeout(function () { scrolled = false; }, 3000)
        //    scrolled= isscroll(element);
    }
}

$("#chat-F").on('scroll', function () {
    scrolled = true;
});
function displayALL(data) {
    if (condi2[0].receiver === null) {
        $("#chat-F").empty();
        $("#chat-F").append("<div class='d-flex justify-content-start mb-4'> <div class='msg_cotainer'><p>select a chat & send message </p></div></div>");
        // console.log("print cmd "+ condi2[0].receiver);
    }
    else {
        console.log("var and data len before :" + len + " : " + data.length);
        if (len < data.length) {


            $("#chat-F").empty();

            console.log('displayALL fun');
            var con = condition();
            // console.log("condi2");
            console.log(condi2);
            // console.log(condi2[0].sender);
            // console.log(data[0].senderId);
            // console.log(condi2[0].receiver);
            // console.log(data[0].receiverId);
            for (var i = 0; i < data.length; i++) {
                if (condi2[0].sender === data[i].senderId) {
                    console.log("sender cond.");
                    $("#chat-F").append("<div class='d-flex justify-content-end mb-4'> <div class='msg_cotainer_send' id='chat-S'> <p>" + data[i].content + "</p> <span class='msg_time_send' id='time-S'>" + " </span> </div> </div>");

                } //chat- :: right side fo chat

                else if (condi2[0].receiver === data[i].senderId) {
                    console.log("receiver cond.");
                    $("#chat-F").append("<div class='d-flex justify-content-start mb-4'> <div class='msg_cotainer'><p>" + data[i].content + "</p><span class='msg_time' id='time-R'>"  + "</span></div></div>");

                } //chat- :: left side fo chat




            }
            // $("#chat-F").scrollTop = $("#chat-F").scrollHeight - $("#chat-F").clientHeight;
            scrolled = false;
            updateScroll();
        }
        len = data.length;

        console.log("var and data len after :" + len + " : " + data.length);


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
    var data = "";
    data = await res.json();
    console.log(res);
    return data;
}

console.log(1);
//// on loading document and displayind data for first time
console.log(2);
condition()
    .then((condi) => {
        console.log("then part");
        console.log(condi);
    })
    .catch(condi => {
        console.log("condi error");
    })
setInterval(function () {
    //$("li:last-child").empty();
    dchat()
        .then((data) => {
            console.log("dt : " + data.length + " sess" + sessionStorage.count)
            console.log(data);
            if (data.length !== sessionStorage.count) {
                var cou = data.length - 1;
                //$("#chat").append="<li>"+data[cou].msg+ "</li>";
                displayALL(data);
                console.log("time d :" + data[cou].msg);
                // $("#chat").append ="<li>"+data[cou].msg+"</li>"
                sessionStorage.count = data.length;
                //console.log("dt cond: "+ data.length+ " sess" + sessionStorage.count)
                // updateScroll();
            }


        })
        .catch(data => {
            $("#chat").append("<li>" + "error" + "   </li>")
            console.log("error sql yahase: " + data);

        });
}, 1000);
$("#chat-F").click(function () {
    this.scrollTop = this.scrollHeight - this.clientHeight;
    //scrolled =false;
    scrolled = false;

});

// function isscroll(element){
//     var ret;
//     $("#chat-F").click(function(){
//         this.scrollTop = this.scrollHeight - this.clientHeight;
//         //scrolled =false;
//         // scrolled=false;
//                 ret=false;
//       });
//       return ret;
// }
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