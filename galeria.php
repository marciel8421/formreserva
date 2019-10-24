<!DOCTYPE html>
<html>
<head>
    <title>GALERIA</title>
    <meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="style2.js"></script>
<meta id="viewport" name="viewport" content="width=device-width,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<div class="container-fluid">

<?php
for($c=1;$c<=60;$c++)
    print"
<div class='container-fluid'>
<div class='row'>
        <div class=''>
            <div class='col-lg-3 col-md-4 col-xs-6 thumb'>
                <a class='thumbnail' href='#'' data-image-id='' data-toggle='modal' data-title=''
                   data-image='imagens/parquecidade$c.jpg'
                   data-target='#image-gallery'>
                    <img class='img-thumbnail'
                         src='imagens/parquecidade$c.jpg'
                         alt='teste'>
                </a>
                </div>
            </div>    
        </div>
     </div>"
?>
</div>
        


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	

</body>
</html>