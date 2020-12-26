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
      {
        "type": "box",
        "layout": "vertical",
        "backgroundColor": "#770D6EFF",
        "contents": [
          {
            "type": "text",
            "text": "1. กฟอ.แม่สอด",
            "weight": "bold",
            "color": "#F7EBEBFF",
            "gravity": "center",
            "margin": "sm",
            "wrap": true,
            "contents": []
          }
        ]
      },
      {
        "type": "box",
        "layout": "vertical",
        "backgroundColor": "#B90CAAFF",
        "contents": [
          {
            "type": "text",
            "text": "2. กฟจ.พิษณุโลก ",
            "weight": "bold",
            "color": "#F7EFEFFF",
            "margin": "sm",
            "wrap": true,
            "contents": []
          }
        ]
      }
    ]
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
}
           }
      ])
    liff.closeWindow()
    }
    main()
  </script>
</body>
</html>
