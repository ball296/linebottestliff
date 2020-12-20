<table>
    <tr>
        <th>First name</th>
    </tr>
    <tbody id="data">
    </tbody>
 </table>       




<script>
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "data.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);

    ajax.send();

    ajax.onreadystatechange = function()
    {
        if (this.readyState==4 && this.status == 200)
        {
            //alert(this.responseText);
             var data=JSON.parse(this.responseText);
             console.log(data);
             var html="";
             for (var a=0; a<data.length; a++)
             {
                 var firstName= data[a].namepea+'&nbsp &nbsp'+data[a].numvoc;
                 var statusvoc1= data[a].statusvoc;
                 var statusvoc2=data[a].typevoc;
                 //var lastName=data[a].numvoc;
                 if (statusvoc1=="รอดำเนินการ" && statusvoc2!="ร้องเรียน")
                 {
                 html +="<tr>";
                    html+="<td>"+firstName+"</td>";
                    //html+="<td>"+lastName+"</td>";
                 html+="</tr>";  
                 } 
             }
             document.getElementById("data").innerHTML=html;
        }
    }
</script>