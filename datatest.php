<?php 
#backup datatest.php
    include("data.php");
    $myArray=$newccAddress;
    date_default_timezone_set("Asia/Bangkok");
    $datedata=date("d/m/Y");
?>    
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
               altText:"รายงานข้อร้องเรียนประจำวัน",
               contents:<?php echo'{
  "type": "bubble",
  "direction": "ltr",
  "header": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "text",
        "text": "ติดตามงาน ร้องขอ/แจ้งเหตุ/เสนอแนะ ประจำวัน",
        "weight": "bold",
        "color": "#FFFFFFF9",
        "align": "center",
        "contents": []
      },
      {
        "type": "text",
        "text": "วันที่ '.$datedata.'",
        "weight": "bold",
        "color": "#FFFFFFF9",
        "align": "center",
        "margin": "md",
        "contents": []
      }  
    ]
  },'?>
  "body": {
    "type": "box",
    "layout": "vertical",
    "contents": [      
      {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "text",
            "text": "รายงานเรื่อง ร้องขอ/แจ้งเหตุ/เสนอแนะ ที่เกิน 15 วัน",
            "contents": []
          }
        ]
      },
      <?php $datacount=count($data2)+1;
    $colorvalue=1;  
    for ($i=1;$i<$datacount;$i++)
{if ($i%2==0){$color="#E9DEE8FF";}else{$color="#F1D0EFFF";} echo '{ 
        "type": "box",
        "layout": "vertical",
        "backgroundColor": "'.$color.'",
        "contents": [
          {
            "type": "text",
            "text": "'.$data2[$i-1].'",
            "weight": "bold",
            "size": "sm",
            "color": "#090000FF",
            "gravity": "center",
            "margin": "md",
            "wrap": true,
            "contents": []
          }
        ]';
        if ($i==$datacount-1){echo '}';}else{echo '},';}
        }
?> 
    ]
  },
  "footer": {
    "type": "box",
    "layout": "horizontal",
    "contents": [
      {
        "type": "box",
        "layout": "horizontal",
        "spacing":"md",
        "margin": "none",
        "contents": [
          {
            "type": "button",
            "action": {
              "type": "uri",
              "label": "Share",
              "uri": "https://liff.line.me/1655423177-8dMEraKE"
            },
            "color": "#22B003FF",
            "margin": "md",
            "height": "sm",
            "style": "primary",
            "gravity": "center"
          }
        ]
      }
    ]
  },
  "styles": {
    "header": {
      "backgroundColor": "#93048EFF"
    },
    "body": {
      "backgroundColor": "#FFF9FFFF"
    },
    "footer": {
      "backgroundColor": "#93048EFF"
    }
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
