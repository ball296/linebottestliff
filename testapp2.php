<?php 
#backup datatest.php
    include("data.php");
    #$myArray=$newccAddress;
    date_default_timezone_set("Asia/Bangkok");
    $datedata=date("d/m/Y");
    $datacount=count($data3)+1;
    $datacount2=count($data4)+1;
    #echo $datacount;
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
       await liff.init({liffId:"1655423177-nKP1zdX1"})
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
        "text": "ติดตามงาน ร้องเรียน ประจำวันที่",
        "wrap": true,
        "weight": "bold",
        "color": "#FFFFFFF9",
        "align": "center",
        "contents": []
      },
      {
        "type": "text",
        "text": "'.$datedata.'",
        "weight": "bold",
        "color": "#FFFFFFF9",
        "align": "center",
        "margin": "md",
        "contents": []
      }  
    ]
  },
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
          "text": "เรื่อง ร้องเรียน ที่ยังไม่รับไปดำเนินการ มีจำนวน '.($datacount2-1).' เรื่อง",
          "weight": "bold",
          "wrap": true,
          "contents": []
        }
      ]
    },'?>
    <?php if ($datacount2>1){
  for ($i=1;$i<$datacount2;$i++)
      {
        if ($i%2==0){$color="#F7A3AEFF";}else{$color="#F07566FF";} 
      echo '{ 
      "type": "box",
      "layout": "vertical",
      "backgroundColor": "'.$color.'",
      "contents": [
        {
          "type": "text",
          "text": "'.$data3[$i-1].'",
          "size": "sm",
          "color": "#090000FF",
          "gravity": "center",
          "margin": "md",
          "wrap": true,
          "contents": []
        }
      ]},';
      
      }
    }else{echo '{ 
      "type": "box",
      "layout": "vertical",
      "backgroundColor": "#E9DEE8FF",
      "contents": [
        {
          "type": "text",
          "text": "ขอขอบคุณทีมงานที่เร่งรับเรื่องดำเนินการครับ",
          "size": "sm",
          "color": "#090000FF",
          "gravity": "center",
          "margin": "md",
          "wrap": true,
          "contents": []
        }
      ]},';}
      ?>       
      <?php echo '{
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "text",
            "text": "เรื่อง ร้องเรียน ที่เกิน 15 วัน มีจำนวน '.($datacount-1).' เรื่อง",
            "weight": "bold",
            "wrap": true,
            "contents": []
          }
        ]
      },'?>
      <?php if ($datacount>1){
    for ($i=1;$i<$datacount;$i++)
        {
          if ($i%2==0){$color="#F7A3AEFF";}else{$color="#F07566FF";} 
        echo '{ 
        "type": "box",
        "layout": "vertical",
        "backgroundColor": "'.$color.'",
        "contents": [
          {
            "type": "text",
            "text": "'.$data2[$i-1].'",
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
      }else{echo '{ 
        "type": "box",
        "layout": "vertical",
        "backgroundColor": "#E9DEE8FF",
        "contents": [
          {
            "type": "text",
            "text": "ขอขอบคุณทีมงานทุกท่านที่เร่งดำเนินการปิดงานตามกำหนดครับ",
            "size": "sm",
            "color": "#090000FF",
            "gravity": "center",
            "margin": "md",
            "wrap": true,
            "contents": []
          }
        ]}';}
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
              "uri": "https://liff.line.me/1655423177-nKP1zdX1"
            },
            "color": "#590555FF",
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
