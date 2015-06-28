function calculate(input)
{
	var str = document.getElementById('results').innerHTML;
	
	if((input == "clear") || (str.match("Push Me") && ((input=="+") || (input=="div") || (input=="x") || (input=="=") || (input=="back"))))
		document.getElementById('results').innerHTML = "";
	else if(((str[str.length-1] == "+") || (str[str.length-1] == "-") || (str[str.length-1] == "/") || (str[str.length-1] == "x") || (str[str.length-1] == null)) &&
			((input == "+") || (input == "-") || (input == "div") || (input == "x")))
		document.getElementById('results').innerHTML = str;
	else if(str.match("Push Me") && ((input!="+") || (input!="=")))
	{
		if(input == "decimal")
			document.getElementById('results').innerHTML = ".";
		else
			document.getElementById('results').innerHTML = input;	
	}
	else if(input == "=")
	{
		var prev=0, i, j=0, result=0;
		var numArray = new Array();
		numArray[0] = "null";
		
		// separate numbers and operations into an array
		for(i=0; i < str.length; i++)
		{
			if(((str[i] == "+") || (str[i] == "-") || (str[i] == "/") || (str[i] == "x")) && (i!=0)) {
				numArray[j] = str.substr(prev,i-prev);
				
				if(numArray[j] == ".")
					numArray[j] = 0;
				
				numArray[j+1] = str[i];
				j = j+2;
				prev = i+1;
			}
		}

		numArray[j] = str.substr(prev, str.length-1);
		
		if(numArray[j] == ".")
			numArray[j] = 0;
			
		if((str == "") || (numArray.length == 1) || (str[str.length-1] == "+") || (str[str.length-1] == "-") || (str[str.length-1] == "/") || (str[str.length-1] == "x") || (numArray[0] == "null"))
		{
			document.getElementById('results').innerHTML = str;
		}
		else
		{
			for(i=0; i<numArray.length; i++)
			{
				if(i==0)
				{
					if(numArray[i+1] == "+")
						result = parseFloat(numArray[i]) + parseFloat(numArray[i+2]);
					else if(numArray[i+1] == "-")
						result = parseFloat(numArray[i]) - parseFloat(numArray[i+2]);
					else if(numArray[i+1] == "/")
						result = parseFloat(numArray[i]) / parseFloat(numArray[i+2]);
					else
						result = parseFloat(numArray[i]) * parseFloat(numArray[i+2]);
					i += 2;
				}
				else
				{
					if(numArray[i] == "+")
						result = result + parseFloat(numArray[i+1]);
					else if(numArray[i] == "-")
						result = result - parseFloat(numArray[i+1]);
					else if(numArray[i] == "/")
						result = result / parseFloat(numArray[i+1]);
					else
						result = result * parseFloat(numArray[i+1]);
					i++;
				}
			}
			document.getElementById('results').innerHTML = result;
		}
	}
	else if(input == "div")
		document.getElementById('results').innerHTML = str + "/";
	else if(input == "decimal")
	{
		var k;
		for(k=str.length-1; k>-1; k--) {
			if((str[k] == "+") || (str[k] == "-") || (str[k] == "/") || (str[k] == "x"))
			{
				str = str + ".";
				break;
			}
			else if(str[k] == ".")
			{
				break;
			}
			else
				continue;
		}
		if((((k == -1) || (str[0] == null)) && (str[str.length-1] != ".")) || (str[str.length-1] == 0))
			document.getElementById('results').innerHTML = str + ".";	
		else
			document.getElementById('results').innerHTML = str;	
	}
	else if(input == "back")
		document.getElementById('results').innerHTML = str.substr(0,str.length-1);
	else
		document.getElementById('results').innerHTML = str + input;
}