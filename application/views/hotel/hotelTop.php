<?php ?>

 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box " style="background-color: #555555;border: solid;border-color:  #000044;border-width: 0.5em;padding: 1%;">
            <div class="inner" style="color: #555555;background-color: white;">
              <h3 id="orders" style="color: black"></h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" >
          <!-- small box -->
          <div class="small-box " style="background-color: #555555;border: solid;border-color:  #000044;border-width: 0.5em;padding: 1%;">
            <div class="inner" style="color: #555555;background-color: white;">
              <h3 id="visitors" style="color: black"></h3>

              <p>No of Visitors </p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color: #555555;border: solid;border-color:  #000044;border-width: 0.5em;padding: 1%;">
            <div class="inner" style="color: #555555;background-color: white;">
              <h3 id="inquiries" style="color: black"></h3>

              <p>No of Inquiries</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color: #555555;border: solid;border-color:  #000044;border-width: 0.5em;padding: 1%;">
            <div class="inner" style="color: #555555;background-color: white;">
              <h3 id="notifications" style="color: black"></h3>

              <p>No of Updates</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

     

     

<script>
    firstCall();
    function firstCall(){
        setvisitors();
        setorders();
        setinquiries();
        setupdates();
     var myVar1 = setInterval(setvisitors, 1000*600);
     var myVar2 = setInterval(setorders, 1000*600);
     var myVar3 = setInterval(setinquiries, 1000*600);
     var myVar4 = setInterval(setupdates, 1000*600);
    }
                                                                        
    function setvisitors() {
        
        var comp=1;
        var obj;
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            obj = new ActiveXObject("Microsoft.XMLHTTP");
        } else {
            alert("Browser Doesn't Support AJAX!");
        }
        if (obj !== null) {
            obj.onreadystatechange = function () {
                if (obj.readyState < 4) {
                    // progress
                } else if (obj.readyState === 4) {
                    var res = obj.responseText;
                   
                    var opt1 = JSON.parse(res)[0].count;
                    
                    document.getElementById('visitors').innerHTML=opt1;
                     
                        }
            }
            obj.open("GET", "getData.php?visitors=" + encodeURIComponent(comp), true);
            obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            obj.send();
        }
    }
    function setorders() {
        var comp=1;
        var obj;
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            obj = new ActiveXObject("Microsoft.XMLHTTP");
        } else {
            alert("Browser Doesn't Support AJAX!");
        }
        if (obj !== null) {
            obj.onreadystatechange = function () {
                if (obj.readyState < 4) {
                    // progress
                } else if (obj.readyState === 4) {
                    var res = obj.responseText;
                    var opt1 = JSON.parse(res)[0].items;
                    document.getElementById('orders').innerHTML=opt1; 
                    document.getElementById('ordersSideBar').innerHTML=opt1;
                }
            }
            obj.open("GET", "getData.php?orders=" + encodeURIComponent(comp), true);
            obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            obj.send();
        }
    }
    function setinquiries() {
        var comp=1;
        var obj;
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            obj = new ActiveXObject("Microsoft.XMLHTTP");
        } else {
            alert("Browser Doesn't Support AJAX!");
        }
        if (obj !== null) {
            obj.onreadystatechange = function () {
                if (obj.readyState < 4) {
                    // progress
                } else if (obj.readyState === 4) {
                    var res = obj.responseText;
                   
                    var opt1 = JSON.parse(res)[0].contacts;
                    document.getElementById('inquiries').innerHTML=opt1;
                     document.getElementById('inquirySideBar').innerHTML=opt1;
                }
            }
            obj.open("GET", "getData.php?inquiries=" + encodeURIComponent(comp), true);
            obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            obj.send();
        }
    }
    function setupdates() {
        var comp=1;
        var obj;
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            obj = new ActiveXObject("Microsoft.XMLHTTP");
        } else {
            alert("Browser Doesn't Support AJAX!");
        }
        if (obj !== null) {
            obj.onreadystatechange = function () {
                if (obj.readyState < 4) {
                    // progress
                } else if (obj.readyState === 4) {
                    var res = obj.responseText;
                    var opt1 = JSON.parse(res)[0].updates;
                  
                    document.getElementById('notifications').innerHTML=opt1; 
                    document.getElementById('updateSideBar').innerHTML=opt1; 
                }
            }
            obj.open("GET", "getData.php?notifications=" + encodeURIComponent(comp), true);
            obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            obj.send();
        }
    }
    </script>