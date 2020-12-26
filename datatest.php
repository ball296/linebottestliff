#backup datatest.php
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
      echo "{<br>";
        echo '"type":"box",<br>';
        echo '"layout": "vertical",<br>';
        echo '"backgroundColor":"'.$color.'",<br>';
        echo '"contents": [<br>';
          echo "{<br>";
            echo '"type": "text",<br>';
            echo '"text": "'.$value.'",<br>';
            echo '"weight": "bold",<br>';
            echo '"color": "#F7EBEBFF",<br>';
            echo '"gravity": "center",<br>';
            echo '"margin": "sm",<br>';
            echo '"wrap": true,<br>';
            echo '"contents": []<br>';
          echo "}<br>";
        echo "]<br>";
        if($colorvalue==$datacount-1){
      echo "}<br>";}else{echo "},<br>";}
      $colorvalue=$colorvalue+1;
          }

          echo ']
  },
  "footer": {
    "type": "box",
    "layout": "horizontal",
    "contents": [
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
              "uri": "https://linecorp.com"
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
}'
?>
             }
      ])
    liff.closeWindow()
    }
    main()
  </script>
</body>
</html>
