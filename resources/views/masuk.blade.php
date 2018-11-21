<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        
    html {
  height: 100%;
}
body {
  min-height: 100%;
  display: grid;
  grid-template-rows: 1fr auto;
}
.content {
  padding: 20px;
}
.footer {
  grid-row-start: 2;
  grid-row-end: 3;
}

* {
  box-sizing: border-box;
}
body {
  margin: 0;
  font: 16px Sans-Serif;
}

.footer {
  background: #42A5F5;
  color: white;
  padding: 20px;
}





    </style>
</head>
<body>

<div class="content">
  <h1>Sticky Footer with Grid</h1>
  <p><button id="add">Add Content</button></p>
</div>

<footer class="footer">
  Footer
</footer>

<script src="{{ asset('frontend/homepage/vendor/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
    $("#add").on("click", function() {
  $("<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>").appendTo(".content");
});
</script>
</body>
</html>