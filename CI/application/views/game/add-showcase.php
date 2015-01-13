<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Showcase - Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <!-- Bootstrap -->
        <link href="css/style-dashboard.css" rel="stylesheet" media="screen">
        <script src="js/jquery-latest.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            $(function() {
                $("header").load("header-dashboard.html");
            });
        </script>
    </head>
    <body>
        <div id="container">
            <header></header>
            <div id="main">
                <div id="jumlah-donasi">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="add">
                                <h1>Add Showcase</h1>
                                <form role="form">
                                  <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Title">
                                  </div>
                                  <div class="form-group">
                                    <label for="content">Showcase Content</label>
                                    <textarea rows="5" class="form-control" id="content"></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="thumbnail">Thumbnail</label>
                                    <input type="file" id="thumbnail">
                                    <p class="help-block">Silahkan pilih gambar untuk thumbnail showcase</p>
                                  </div>
                                  <div class="form-group">
                                    <label for="gambarBerita">Gambar Utama Showcase</label>
                                    <input type="file" id="gambarBerita">
                                    <p class="help-block">Silahkan pilih gambar utama showcase</p>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3" for="screenshot1">Screenshot 1:</label>
                                    <input class="col-md-9" type="file" id="screenshot1">
                                    <label class="col-md-3" for="screenshot2">Screenshot 2:</label>
                                    <input class="col-md-9" type="file" id="screenshot2">
                                    <label class="col-md-3" for="screenshot3">Screenshot 3:</label>
                                    <input class="col-md-9" type="file" id="screenshot3">
                                    <label class="col-md-3" for="screenshot4">Screenshot 4:</label>
                                    <input class="col-md-9" type="file" id="screenshot4">
                                  </div>
                                  <button type="submit" class="btn btn-default">Save</button>
                                </form>
                            </div>
                            </div>
                     </div>
                </div>
            </div>
            <footer></footer>
        </div>
    </body>
</html>