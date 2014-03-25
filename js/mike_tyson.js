$(document).ready(function() {
    
$("#countdown").countdown({
date: "15 july 2014 12:00:00", //add the countdown's end date (i.e. 31 december 2014 12:00:00)
format: "on" // on (03:07:52) | off (3:7:52) - two_digits set to ON maintains layout consistency
},
      
function() { 
        
        // the code here will run when the countdown ends. What that is I have no idea, but I'm thinking about it 
			alert("done!")
      	});
});