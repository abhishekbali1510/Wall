const express = require("express");
const bodyParser = require("body-parser");
const app = express();

app.use(bodyParser.json({extended: true}));


app.get("/", function(req,res){
    res.sendFile(__dirname+"/index.php");
});/*
app.get("/msg", function(req,res){
    res.sendFile(__dirname+"/index.php");
});*/
app.post("/", function(req,res){
   console.log(req.body);
   res.send("E recieved");
})
app.listen(3000,function(){
    console.log("server is running at port 3000 :)");
}); 