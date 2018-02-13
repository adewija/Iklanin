<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/style.css">
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/jquery/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script>
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {
      height: 1000px;
    }
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #A88645;
      height: 100%;
    }
    a{
      color: white;
    }
    h4{
      color: white;
    }
    
    /* Set black background color, white text and some padding */
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 5px;
      }
      .row.content {height: auto;} 
    }
    @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);


body {
  background: #f5f5f5;
  color: #000;
  font-weight: 400;
  font-size: 1.3em;
  font-family: 'Lato', Arial, sans-serif;
  margin:0;
  padding:0;
  padding-bottom:0px;
}
.ccheader {
  margin: 0 auto;
  padding: 2em;
  text-align: center;
}

.ccheader h1 {
  margin: 0;
  font-weight: 300;
  font-size: 2.5em;
  line-height: 1.3;
}
.ccheader {
  margin: 0 auto;
  padding: 2em;
  text-align: center;
}

.ccheader h1 {
  margin: 0;
  font-weight: 300;
  font-size: 2.5em;
  line-height: 1.3;
}

/* Form CSS*/
.ccform {
   margin: 0 auto;
    width: 800px;
}
.ccfield-prepend{
  margin-bottom:10px;
  width:100%;
}

.ccform-addon{
  color:#A88645; 
  float:left;
  padding:8px;
  width:8%;
  background:#FFFFFF;
  text-align:center;  
}

.ccformfield {
  color:#000000; 
  background:#FFFFFF;
  border:none;
  padding:8px;
  width:91.9%;
  display:block;
  font-family: 'Lato',Arial,sans-serif;
  font-size:18.4px;
}

.ccformfield {
  font-family: 'Lato',Arial,sans-serif;
}
.ccbtn{
  display:block;
  border:none;
  background:#A88645;
  color:#FFFFFF;
  padding:12px 25px;
  cursor:pointer;
  text-decoration:none;
  font-weight:bold;
}
.ccbtn:hover{
  background:#d8850e;

}
.credit {
  width: 800px;
  clear:both;
margin:0 auto;
  line-height:25px;
 padding: 25px 50px; 
text-align: center;
}
.credit em{
margin-right:5px;
}
.credit a {
color: #000;
font-weight: bold;
text-decoration: none;
}

  </style>

</head>
</html>