<html>
<head>
  <link href="./css/card.css" rel= "stylesheet"  type="text/css">
</head>
{{foreach from=$cards item=card}}
  {{include file='card/common.tpl' card=$card}}
{{/foreach}}

<body>
</body>
</html>
