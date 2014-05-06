<html>
<head>
  <link href="./css/card.css" rel= "stylesheet"  type="text/css">
</head>
<table border="0">
  {{for $i=0 to 14}}
    {{if $i % 5 == 0}}<tr>{{/if}}
      <td style="padding: 10px 10px;">{{include file='card/common.tpl' card=$cards[$i]}}</td>
    {{if $i % 5 == 4}}</tr>{{/if}}
  {{/for}}
</table>
<body>
</body>
</html>
