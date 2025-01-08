const express = require('express');
const mysql = require('mysql');

const app = express();
const host = '127.0.0.1';
const user = 'root';
const password = '';
const database = 'laracoffee';

app.use((req, res, next) => {
    res.setHeader("Access-Control-Allow-Origin", "*");
    res.setHeader(
      "Access-Control-Allow-Headers",
      "Origin, X-Requested-With, Content-Type, Accept, Authorization"
    );
    res.setHeader("Access-Control-Allow-Methods", "GET, POST, PATCH, DELETE");
    next();
});

// ------------  PROVINSI  --------------------
app.get('/list_provinsi', (req, res, next)=>{
    var con = mysql.createConnection({host,user,password,database});

    con.connect(function(err) {
        if (err) throw err;
        con.query("select * from provinsi", function (err, result, fields) {
            if (err) throw err;
            return res.json(result);
        });
    });
})

// ------------  KOTA  --------------------
app.get('/list_kota/:id', (req, res, next)=>{
    var con = mysql.createConnection({host,user,password,database});

    con.connect(function(err) {
        if (err) throw err;
        con.query("select * from kota where kode_provinsi = '"+req.params.id+"'", function (err, result, fields) {
            if (err) throw err;
            return res.json(result);
        });
    });
})

app.get('/list_user', (req, res, next)=>{
    var con = mysql.createConnection({host,user,password,database});

    con.connect(function(err) {
        if (err) throw err;
        con.query("select * from users", function (err, result, fields) {
            if (err) throw err;
            return res.json(result);
        });
    });
})

app.get('/list_products', (req, res, next)=>{
    var con = mysql.createConnection({host,user,password,database});

    con.connect(function(err) {
        if (err) throw err;
        con.query("select * from products", function (err, result, fields) {
            if (err) throw err;
            return res.json(result);
        });
    });
})

app.listen(5000,() => {
    console.log('listening to port 5000')
})