<html>
    <head>
        <title>AFAS Profit authorisatie key</title>
        <script src="./base.js?<?= filemtime('./base.js')?>"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
  <div class="row">
    <div class="col-sm shadow-sm p-3 mb-5 bg-white rounded">
      <h1>Uitleg</h1>
      <p>Op deze pagina kan je de usertoken die je in de app connector van AFAS Profit gegenereerd hebt omzetten in een autorisatie token voor webconnectoren en Power BI.</p>
    </div>
    <div class="col-sm shadow-sm p-3 mb-5 bg-white rounded">
      <h1>Invoer</h1>
      <form>
      <div class="form-group">
    <label for="AfasToken">AFAS User Token</label>
    <input type="text" class="form-control" id="AfasToken" placeholder="<token><version>1</version><data>string</data></token>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col-sm shadow-sm p-3 mb-5 bg-white rounded">
      <h1>Output</h1>
      <div id="OutputDiv"></div>
    </div>
  </div>
</div>
    </body>
</html>