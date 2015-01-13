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
        <link href=<?php echo base_url("assets/css/style-dashboard.css");?> rel="stylesheet" media="screen">
    <script src=<?php echo base_url("assets/js/jquery-latest.min.js");?> type="text/javascript"></script>
    <script type="text/javascript" src=<?php echo base_url("assets/js/bootstrap.js");?>></script>
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
            <header><?php $this->load->view('admin/header-dashboard'); ?></header>
            <div id="main">
                <div id="dashboard">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="list">
                                <h1>Showcases</h1>
                                <a href="add-showcase.html" class="btn btn-default navbar-btn">Add Showcase</a>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th colspan="2" class="text-center">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="number">1.</td>
                                            <td><a href="#">Dasar-dasar pemrograman</a></td>
                                            <td class="action"><a href="edit-post.html">Edit</a></td>
                                            <td class="action"><a href="">Delete</a></td>
                                        </tr>
                                       <tr>
                                            <td class="number">2. </td>
                                            <td><a href="#">Dasar-dasar pemrograman</a></td>
                                            <td class="action"><a href="edit-post.html">Edit</a></td>
                                            <td class="action"><a href="#">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td class="number">3. </td>
                                            <td><a href="#">Dasar-dasar pemrograman</a></td>
                                            <td class="action"><a href="edit-post.html">Edit</a></td>
                                            <td class="action"><a href="#">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td class="number">4. </td>
                                            <td><a href="#">Dasar-dasar pemrograman</a></td>
                                            <td class="action"><a href="edit-post.html">Edit</a></td>
                                            <td class="action"><a href="#">Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="md-col-12 text-center">
                            <nav>
                              <ul class="pagination">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <footer></footer>
        </div>
    </body>
</html>
