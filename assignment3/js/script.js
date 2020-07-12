//time = Number(document.getElementById("getime").value)
		//document.getElementById("btntime")

		function displayslideshow(){
			document.getElementById('showslideshow').style.display='block';
			console.log(parseInt(document.getElementById('settime').value));
			var time = document.getElementById("settime").value ;

			if(time.length==0){
				document.getElementById("demo").innerHTML="Invalid input.Enter time in seconds";
			}
			/*else{
				time=parseInt(time)
				document.getElementById("demo").innerHTML=time;
			}*/
			
		}

/*		function changebg(){

			document.getElementById('email').style.backgroundColor = "red" ;
		}*/

		function printop(operator){
			document.getElementById("operator").innerHTML = operator;
			if(operator == '+'){
				var ans = parseInt(document.getElementById("num1").value)+parseInt(document.getElementById("num2").value)
				document.getElementById("ans").innerHTML = ans;
			}
			if(operator== '-'){
				var ans1 = parseInt(document.getElementById("num1").value)-parseInt(document.getElementById("num2").value)
				document.getElementById("ans").innerHTML = ans1;
			}
			if(operator== '/'){
				var ans = parseInt(document.getElementById("num1").value)/parseInt(document.getElementById("num2").value)
				document.getElementById("ans").innerHTML = ans;
			}
			if(operator== '*'){
				var ans = parseInt(document.getElementById("num1").value)*parseInt(document.getElementById("num2").value)
				document.getElementById("ans").innerHTML = ans;
			}
			
		}

		function color(email){
			//var email=document.getElementsByClassName("myEmail").value;
			var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
		
			if (emailPattern.test(email)){
				//console.log(emailPattern.test(email));
				document.getElementById("k").style.color = "blue";
					
			}
			else{
				console.log(emailPattern.test(email));
				document.getElementById("k").style.backgroundColor = "red";
			}
		
		//email=document.getElementById("myEmail").value;

		}

		