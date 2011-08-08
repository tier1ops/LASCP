<?php
$out = <<< EOF
/*
Tier1 Server Control Pannel
Version: 0.2
Date: 2011-02-27
Author: Banshee
Edit: BoSSMan_DK - 2001-04-27
URL: http://tier1ops.eu

Tier1 Server Control Pannel is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License. Permissions beyond the scope of this license may be available at http://going4.com.

http://creativecommons.org/licenses/by-nc-sa/3.0/
*/


body {
  background-color:black;
  color:white;
  font-family: 'Droid Sans', Arial, serif;
  text-align:center;
}

#wrapper {
  width:500px;
  margin:auto;
  margin-top:50px;
}

#content {
  margin-left:120px;
}

#footer {
  margin-left:120px;
  color:rgb(100,100,100);
  margin-top:100px;
}

#footer a {
  color:rgb(100,100,100);
}

a {
  text-decoration:none;
  color:white;
}

a :hover {
  background-color:rgb(23,23,23);
}

img {
  padding-bottom:50px;
}

.button {
  -moz-border-radius: 12px;
  border-radius:12px;
  border: 1px solid rgb(23,23,23);
  color:white;
  line-height:1.4;
  padding:12px 20px;
  width:250px;
  display:inline-block;
  margin-top:20px;
}

.button :hover {
  -moz-border-radius: 12px;
  border-radius: 12px;
  background-color:rgb(23,23,23);
  border: 1px solid #ccc;
  line-height:1.4;
  padding: 12px 20px;
  width:250px;
}

.danger {
  color:red;
  font-weight:bold;
}

.success {
  color:green;
  font-weight:bold;
}
EOF;

echo $out;
?>