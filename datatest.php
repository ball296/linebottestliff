<?php 
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
  "type": "bubble",
  "direction": "ltr",
  "header": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "text",
        "text": "ติดตามงานข้อร้องเรียนประจำวัน",
        "weight": "bold",
        "color": "#FFFFFFF9",
        "align": "center",
        "contents": []
      },
      {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "text",
            "text": "ประจำวันที่",
            "align": "center",
            "margin": "sm",
            "contents": []
          }
        ]
      }
    ]
  },
  "body": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      <?php
      $datacount=count($data2)+1;
      #echo $datacount;
      $colorvalue=1; 
      foreach($data2 as $value) {
        if ($colorvalue%2==0){$color="#770D6EFF";}else{$color="#B90CAAFF";}
      echo "{";
        echo '"type":"box",';
        echo '"layout": "vertical",';
        echo '"backgroundColor":"'.$color.'",';
        echo '"contents": [';
          echo "{";
            echo '"type": "text",';
            echo '"text": "'.$value.'",';
            echo '"weight": "bold",';
            echo '"color": "#F7EBEBFF",';
            echo '"gravity": "center",';
            echo '"margin": "sm",';
            echo '"wrap": true,';
            echo '"contents": []';
          echo "}";
        echo "]";
        if($colorvalue==$datacount-1){
      echo "}";}else{echo "},";}
      $colorvalue=$colorvalue+1;
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
        "layout": "baseline",
        "contents": [
          {
            "type": "text",
            "text": "แผนกลูกค้าสัมพันธ์ โทร (12) 10215",
            "weight": "bold",
            "size": "xs",
            "color": "#FFFFFFFF",
            "wrap": true,
            "contents": []
          }
        ]
      },
      {
        "type": "box",
        "layout": "horizontal",
        "margin": "xxl",
        "contents": [
          {
            "type": "button",
            "action": {
              "type": "uri",
              "label": "Share",
              "uri": "https://liff.line.me/1655423177-8dMEraKE"
            },
            "color": "#860B8CFF",
            "margin": "md",
            "height": "sm",
            "style": "primary",
            "gravity": "bottom"
          }
        ]
      }
    ]
  },
  "styles": {
    "header": {
      "backgroundColor": "#C905C1FF"
    },
    "body": {
      "backgroundColor": "#E198DCFF"
    },
    "footer": {
      "backgroundColor": "#A906ADFF"
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
