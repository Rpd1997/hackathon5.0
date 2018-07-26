
<!Doctype html>
<html>
	<head>
	<title>RajasthanTourism Jobs.in</title>
    <link href="test.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="st6.css">
	</head>
	<body>
        
        <header>
		<nav>
			<h1>RajasthanTourism Jobs</h1>
			<ul>
			<ul id="nav">
				<li><a class="homered" href="slide.html">HOME</a></li>
				<li><a class="homeblack" href="profile.html">PROFILE</a></li>
				<li><a class="homeblack" href="about.html">ABOUT US</a></li>
				<li><a class="homeblack" href="contact.html">CONTACT</a></li>
				<li><a class="homeblack" href="new 1.html">LOGOUT</a></li>
				</ul>
		</nav>
	</header>
	<div class="divider"></div>
        
        <div id="header1">
            <ul>RAJASTHANTOURISM JOBS</ul>
        </div>
        
        
          <div id="header2">
            <ul>Jobs in Tourism as per you wish .Select your Job Prefrences from below mentioned options</ul>
        </div>



<!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
<div class="custom-select" style="width:200px;">
  <select>
    <option value="0">SELECT SHIFT:</option>
    <option value="1">Day</option>
    <option value="2">Night</option>
  </select>
</div>
        
        
        
        
        <div class="custom-select" style="width:200px;">
  <select>
    <option value="0">SALARY DEMAND:</option>
    <option value="1">Below 10,000</option>
    <option value="2">10,000-20,000</option>
      <option value="3">20,000-40,000</option>
      <option value="4">Above 40,000</option>
  </select>
</div>
        
        
        
        
           
   
                <div class="custom-select" style="width:200px;">
  <select>
    <option value="0">PREFERRED LOCATION:</option>
    <option value="1">Ajmer</option>
    <option value="2">Alwar</option>
      <option value="3">Banswara</option>
      <option value="4">Baran</option>
      <option value="5">Barmer</option>
    <option value="6">Bharatpur</option>
    <option value="7">Bhilwara</option>
      <option value="8">Bikaner</option>
      <option value="9">Bundi</option>
      <option value="10">Chittaurgarh</option>
    <option value="11">Churu</option>
    <option value="12">Dausa</option>
      <option value="13">Dholpur</option>
      <option value="14">Dungarpur</option>
      <option value="15">Hanumangarh</option>
    <option value="16">Jaipur</option>
    <option value="17">Jaisalmer</option>
      <option value="18">Jalore</option>
      <option value="19">Jhalawar</option>
      <option value="20">Jhunjhunu</option>
    <option value="21">Jodhpur</option>
    <option value="22">Karauli</option>
      <option value="23">Kota</option>
      <option value="24">Nagaur</option>
      <option value="25">Pali</option>
    <option value="26">Pratapgarh</option>
    <option value="27">Rajsamand</option>
      <option value="28">Sawai Madhopur</option>
      <option value="29">Sikar</option>
      <option value="30">Sirohi</option>
    <option value="31">Sri ganganagar</option>
    <option value="32">Tonk</option>
      <option value="33">Udaipur</option>
  </select>
</div>
        
        
    
        
        <div class="custom-select" style="width:200px;">
  <select>
    <option value="0">PREFERRED SECTOR:</option>
    <option value="1">Forts & Palaces</option>
    <option value="2">Botanical Gardens</option>
      <option value="3">Holy Places & Temples</option>
      <option value="4">Parks & Gardens</option>
      <option value="5">Heritage Sites</option>
    <option value="6">LandMarks</option>
    <option value="7">Museums</option>
      <option value="8">Travel & Tours</option>
      <option value="9">Hotels & Management</option>
  </select>
</div>
        
        

        
        
        
        
                       
        
        
        <div class="custom-select" style="width:200px;">
  <select>
    <option value="0">JOB AS:</option>
    <option value="1">Tourist Guide</option>
    <option value="2">Travels Agent</option>
      <option value="3">Hotel Manager or Employee</option>
      <option value="4">Member of Tourit spot Trust</option>
      <option value="5">Security Guard</option>
    <option value="6">Gardener or Keeper</option>
    <option value="7">Hygiene & Cleanlines</option>
  </select>
</div>
        
        
        
        
        
        
        
        
        
        
        
        
       
<a href="#" class="next">Next &raquo;</a>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);</script>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
      