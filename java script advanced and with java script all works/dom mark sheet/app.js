function bu(){
var name = document.getElementById("name");
var father = document.getElementById("fathername")
var student  = document.getElementById("studentid")

var math = document.getElementById("math")
var urdu = document.getElementById("urdu")
var English = document.getElementById("English")


var total = parseInt(math.value) + parseInt(urdu.value) + parseInt(English.value);
var per = (total/300*100);

document.write("<h1>  " + name.value + " S/O " + father.value + " </h1>")

document.write('name:' + name.value + 'fathername:' + father.value + 'studentid' + student.value  );


document.write('<table border="2px">  <tr> <th>math</th>  <th>urdu</th>   <th>English</th>   </tr>  <tr>   <td>'+math.value+' </td>    <td>'+urdu.value+' </td>     <td>'+English.value+' </td>   </tr>  </table> ') ;


document.write("percentage is : " +parseInt(per));

}