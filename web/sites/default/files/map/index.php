<script src="js/core.js"></script>
<script src="js/maps.js"></script>
<script src="js/worldLow.js"></script>
 <link rel="stylesheet" href="js/all.css" > 

  <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

  $('.nav-tabs .nav-item').on('click', function() {
    $(".nav-tabs .nav-item").each(function(){ 
      $(this).removeClass("active");
    });
    $(this).addClass("active");
  });


</script>

<nav class="nav nav-tabs">
  <a class="nav-item nav-link  " href="#accueil" data-toggle="tab" id="example-tabs">Coopération Bilatérale </a>
   
  <a class="nav-item nav-link" href="#temoignages" data-toggle="tab">Coopération Régionale </a>
  <a class="nav-item nav-link" href="#commu" data-toggle="tab">Coopération Multilatérale  </a>

</nav>


<div class="tab-content">
  <div class="tab-pane active " id="accueil"><?php include 'copb.php'; ?></div>
<div class="tab-pane " id="commu"><?php include 'cm.php'; ?></div>



<div class="pager-list">
  <!-- Pagination buttons will be generated here -->
</div>


  <div class="tab-pane" id="temoignages">
<nav class="nav nav-tabs">
  <a class="nav-item nav-link active" href="#a" data-toggle="tab"><img src="copreg/medrec.png" class="reg" id="1"  ></a>   
  <a class="nav-item nav-link" href="#b" data-toggle="tab"><img src="copreg/irena.png" class="reg" id="1" >  </a>
  <a class="nav-item nav-link" href="#c" data-toggle="tab"><img src="copreg/rcreee.png" class="reg" id="1"  >  </a>
  <a class="nav-item nav-link" href="#d" data-toggle="tab"><img src="copreg/ome.png" class="reg" id="1"  >  </a>
  <a class="nav-item nav-link" href="#e" data-toggle="tab"> <img src="copreg/med.png" class="reg" id="1"  > </a>
  <!-- <a class="nav-item nav-link" href="#f" data-toggle="tab"> <img src="copreg/unescwa.png" class="reg" id="1"  > </a> -->
</nav>
<div class="tab-content">
  <div class="tab-pane active" id="a"><?php include 'a.php'; ?></div>
  <div class="tab-pane" id="b"><?php include 'b.php'; ?></div>
  <div class="tab-pane" id="c"><?php include 'c.php'; ?></div>
  <div class="tab-pane" id="d"><?php include 'd1.php'; ?></div>
  <div class="tab-pane" id="e"><?php include 'e.php'; ?></div>
  <div class="tab-pane" id="f"><?php include 'f.php'; ?></div>
</div>
</div>
  
</div>


<style type="text/css">
  *{
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body, button{
  font-family: 'Helvetica Neue', arial, sans-serif;
}

.controls{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  padding: 2%;
}

@media screen and (max-width: 450px){
  .controls{
    display: none;
  }
}

label{
  font-weight: 300;
  margin: 0 .4em 0 0;
}
  button.filter{
  margin: 0px;
  }
button{
   padding: 10px;
  margin: 10px;
  font-family: "adobe-garamond-pro";
  font-style: italic;
  border: none;
  border-radius: 3px;
  background-color: transparent;
  color: #b3b0ab;
  font-size: 16px;
  font-weight: 600;
  text-transform: capitalize;
  letter-spacing: 3px;
  cursor: pointer;
}

button.active{
  color: #C51D36;
}

button:focus{
  outline: 0 none;
}

button + label{
  margin-left: 1em;
}

.container{
  padding: 2% 2% 0;
  text-align: justify;
  font-size: 0.1px;
  
  -webkit-backface-visibility: hidden;
}

.container:after{
  content: '';
  display: inline-block;
  width: 48%;
}

.container .mix,
.container .gap{
  display: inline-block;
  width: 49%;
}

.container .mix{
  position: relative;
}

.container .mix{
  text-align: left;
  margin-bottom: 0%;
  display: none;
}

.container .mix:after{
  content: attr(data-myorder);
  color: white;
  font-size: 16px;
  display: none;
  vertical-align: top;
/*  padding: 4% 6%; */
  font-weight: 700;
}

.container .mix:before{
  content: '';
  display: none;
 /* padding-top: 60%; */
}

@media all and (max-width: 449px){
  .container .mix,
  .container .gap{
    width: 100%;
  }
}

@media all and (min-width: 450px){
  .container .mix,
  .container .gap{
    width: 48%;
  }
}

@media all and (min-width: 900px){
  .container .mix,
  .container .gap{
    width: 32.5%;
  }
}

a{
  cursor: pointer;
}

img.image{
  display: block;
  width: 100%;
  height: auto;
}

/* Hover Styling */
 .overlay{
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #000;
}
.mix:hover .overlay{
  opacity: .75;
}

.hover-text{
  color: #fff;
  width: 100%;
  font-family: 'adobe-garamond-pro';
  font-style: italic;
  font-weight: 600;
  text-decoration: underline;
  font-size: 24px;
  position: absolute;
  text-transform: capitalize;
  text-align: center;
  letter-spacing: 2px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}
 
.container {
 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 13px;
}
.check-top{
  display: flex;
}
ul.ks-cboxtags {
  float: right;
    list-style: none;
  /*  padding: 20px;*/
}
ul.ks-cboxtags li{
  display: inline;
}
ul.ks-cboxtags li label{
    display: inline-block;
    background-color: rgba(255, 255, 255, .9);
    border: 2px solid #00a3da;
    color: #adadad;
    border-radius: 25px;
    white-space: nowrap;
    margin: 3px 0px;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    transition: all .2s;
}

ul.ks-cboxtags li label {
    padding: 8px 12px;
    cursor: pointer;
}

ul.ks-cboxtags li label::before {
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 12px;
    padding: 2px 6px 2px 2px;
    content: "\f067";
    transition: transform .3s ease-in-out;
}

ul.ks-cboxtags li input[type="checkbox"]:checked + label::before {
    content: "\f00c";
    transform: rotate(-360deg);
    transition: transform .3s ease-in-out;
}

ul.ks-cboxtags li input[type="checkbox"]:checked + label {
    border: 2px solid #1bdbf8;
    background-color: #12bbd4;
    color: #fff;
    transition: all .2s;
}

ul.ks-cboxtags li input[type="checkbox"] {
  display: absolute;
}
ul.ks-cboxtags li input[type="checkbox"] {
  position: absolute;
  opacity: 0;
}
ul.ks-cboxtags li input[type="checkbox"]:focus + label {
  border: 2px solid #e9a1ff;
}
 
  .nav-tabs .nav-link {
    display: flex;
        width: 20%;
  }
  .nav-tabs .nav-link {
  background:#f1f1f1;
  font-family: 'Inconsolata', monospace;
  font-weight:bold;
  color:#034885;
  text-align:center;
  -webkit-font-smoothing: antialiased;
}
.nav-tabs{
  display:flex;
  justify-content:center;
}
.nav-link{
 font-family: 'Roboto', sans-serif;
  background:#f1f1f1;
  width:30%;
  border:1px solid #d6d6d6;
  box-shadow:0 2px 3px 0px rgba(0,0,0,0.25);
  border-radius:3px;
  transition:.2s all; 
}
.nav-tabs:hover .nav-link{
  filter:blur(3px);
  opacity:.5;
  transform: scale(.98);
  box-shadow:none;
}
.nav-tabs:hover .nav-link:hover{
  transform:scale(1);
  filter:blur(0px);
  opacity:1;
  box-shadow:0 8px 20px 0px rgba(0,0,0,0.125);
}
a.nav-item.nav-link {
    max-width: 144px;
}
a.nav-item.nav-link img {
    width: 81px;
    /* text-align: center; */
    margin: auto;
}
nav.nav.nav-tabs
{
  /*max-width: 720px;*/
  width: auto;
}
</style>
