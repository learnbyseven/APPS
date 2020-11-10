var express = require('express');
var app = express();
var fs = require("fs");

app.get('/cars', function (req, res) {
   fs.readFile( __dirname + "/" + "cars.json", 'utf8', function (err, data) {
      console.log( data );
      res.end( data );
   });
})
app.get('/bikes', function (req, res) {
   fs.readFile( __dirname + "/" + "bikes.json", 'utf8', function (err, data) {
      console.log( data );
      res.end( data );
   });
})
var server = app.listen(8082, function () {
   var host = server.address().address
   var port = server.address().port
   console.log("Example app listening at http://%s:%s", host, port)
})
