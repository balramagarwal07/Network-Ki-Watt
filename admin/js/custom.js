$('#short-field').keyup(function () {
    var max = 150;
    var len = $(this).val().length;
    if (len >= max) {
      $('#short-charNum').text(' you have reached the limit');
    } else {
      var char = max - len;
      $('#short-charNum').text(char + ' characters left');
    }
  });

  //*******special packages and top tours script************ */


  //*******coupon conditions statements starts************ */

	$("#coupon-discount-type").change(function(){
	
		if ( $(this).val() == "percentage-discount" ) { 
			$("#coupon-percentage-amount").show();
			$("#coupon-fixed-amount").hide();
        }
        if( $(this).val() == "fixed-discount" ) { 
          $("#coupon-percentage-amount").hide();
          $("#coupon-fixed-amount").show();
        }
     
    }); 
  
    $("#coupon-discount-conditions").change(function(){
	
      if ( $(this).val() == "coupon-for-all-tours" ) { 
        $("#coupon-cart-amount").hide();
        $("#coupon-selected-tour").hide();
        $("#coupon-selected-locations").hide();
          }
          if( $(this).val() == "coupon-for-selected-tours" ) { 
            $("#coupon-cart-amount").hide();
        $("#coupon-selected-tour").show();
        $("#coupon-selected-locations").hide();
          }

          if ( $(this).val() == "coupon-for-all-locations" ) { 
            $("#coupon-cart-amount").hide();
            $("#coupon-selected-tour").hide();
            $("#coupon-selected-locations").hide();
              }

          if ( $(this).val() == "coupon-for-selected-locations" ) { 
            $("#coupon-cart-amount").hide();
            $("#coupon-selected-tour").hide();
            $("#coupon-selected-locations").show();
              }
              if( $(this).val() == "coupon-for-cart-amount" ) { 
                $("#coupon-cart-amount").show();
            $("#coupon-selected-tour").hide();
            $("#coupon-selected-locations").hide();
              }
       
              if ( $(this).val() == "coupon-for-first-order" ) { 
                $("#coupon-cart-amount").hide();
                $("#coupon-selected-tour").hide();
                $("#coupon-selected-locations").hide();
                  }
      }); 
  
      

  //*******coupon conditions statements starts************ */

  // Create a "close" button and append it to each list item
var myNodelist = jQuery("ul#myspecialpackages LI").length;
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul#myspecialpackages');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("specialpackageInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myspecialpackages").appendChild(li);
  }
  document.getElementById("specialpackageInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}

  //*******End special packages and top tours script************ */
