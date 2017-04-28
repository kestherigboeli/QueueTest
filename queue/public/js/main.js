/**
 * 
 */

$(document).ready(function() {
  var referrer =  document.referrer;
  console.log('refferrer: ' + referrer);


  var frmo = $('#register-form');
  var msg = $('#registerstatus');
  var loader = $('.ajax-loader');



  frmo.submit(function (ev) {
   // You can also do this, but it seems a long way 'round
   var values = frmo.serializeArray();

    $.ajax({
    type: frmo.attr('method'),
    url: frmo.attr('action'),
    data: values,
    dataType: "json",
    success: function (res) {
     console.log(res.response.success);
     if(res.response.success){
      msg.text(res.response.message);
      msg.css({color:'green'});
      location.reload(true).
      frmo[0].reset();

     }else{
      msg.text(res.response.message);
      msg.css({color:'red'});
     }

     msg.show();
    
    }
  });

  ev.preventDefault();

 });
  });


function myFunction() {

var x = document.getElementById("purpose").value;

if (x=="1"){
	 $(".myLogin").show();
        $(".myLastName").show();
        document.getElementById("myText").placeholder = "First Name";
	    $(".myFirstName").show();
	    $(".myTitle").show(); 

}else if (x=="2"){
	$(".myLogin").show();
        $(".myLastName").hide();
        document.getElementById("myText").placeholder = "Enter Organisation Name";
	    $(".myFirstName").show();
	    $(".myTitle").hide();



}else if (x=="0"){
	 $(".myLogin").show();
        $(".myLastName").hide();
	    $(".myFirstName").hide();
	    $(".myTitle").hide(); 

}else{
	$(".mySelect").show();
	$(".myCustomer").show();
	$(".myLogin").hide();
	$(".myTitle").hide();
	$(".myLastName").hide();
	$(".myFirstName").hide();

	}

}

/*<th>Action</th>
 <td><a href="{{ url($customer->id.'/delete') }}">Delete</a></td>*/