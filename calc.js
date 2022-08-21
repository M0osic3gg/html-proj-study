permission = prompt("Do you want to use JScalc? (Write 'yes' to continue)");
while(permission === "yes") {
first = prompt("enter your 1st num")
first = Number(first);
second = prompt("enter your 2nd num")
second = Number(second);
operand = prompt("enter your desired operation (+ - * / %)")
if (operand == "+") alert(first+second)
else if (operand == "-") alert(first-second)
else if (operand == "*") alert(first*second)
else if (operand == "/" || operand == "\\") alert(first/second)
else if (operand == "%") alert(first%second)
else alert("what are you doing in my swamp? i mean, error. try again.")
permission = prompt("Continue calculating?")
}
