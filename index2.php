
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
             //document.getElementById("data").innerHTML=html;
        }
    }
</script>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
  <title>My LIFF App</title>
  <style>
    body { padding: 256px }
    button { display: none; width: 50%; padding: 16px 0; margin: 16px auto }
  </style>
</head>
<body>
  
  <script src="https://static.line-scdn.net/liff/edge/versions/2.5.0/sdk.js"></script>
  <script>
    async function main() {
       await liff.init({liffId:"1655423177-8dMEraKE"})
       await liff.shareTargetPicker([
             {
               type:"flex",
               altText:"Flex message Picker",
               contents:{
  "type": "bubble",
  "hero": {
    "type": "image",
    "url": "https://gdurl.com/UyRY",
    "margin": "xxl",
    "size": "3xl",
    "aspectRatio": "20:5",
    "backgroundColor": "#79058BF2"
  },
  "body": {
    "type": "box",
    "layout": "vertical",
    "spacing": "sm",
    "backgroundColor": "#F8EEEEFF",
    "borderColor": "#DA2A14EA",
    "contents": [
      {
        "type": "text",
        "text": "รายงานสรุปข้อร้องเรียนประจำวัน",
        "weight": "bold",
        "size": "md",
        "color": "#080809FF",
        "align": "center",
        "wrap": true,
        "contents": []
      },
      {
        "type": "box",
        "layout": "baseline",
        "backgroundColor": "#931AA000",
        "contents": [
          {
            "type": "text",
            "text": "<?php echo $html ?>;",
            "weight": "bold",
            "size": "sm",
            "color": "#4D0968FF",
            "flex": 0,
            "align": "start",
            "wrap": true,
            "contents": []
          }
        ]
      }
    ]
  },
  "footer": {
    "type": "box",
    "layout": "vertical",
    "spacing": "sm",
    "contents": [
      {
        "type": "text",
        "text": "แผนกลูกค้าสัมพันธ์ น.2 โทร 12 10529",
        "weight": "bold",
        "size": "sm",
        "color": "#0A0000FF",
        "contents": []
      },
      {
        "type": "button",
        "action": {
          "type": "uri",
          "label": "Button",
          "uri": "https://liff.line.me/1655423177-8dMEraKE"
        }
      }
    ]
  }
}
             }
      ])
    liff.closeWindow()
    }
    main()
  </script>
</body>
</html>
