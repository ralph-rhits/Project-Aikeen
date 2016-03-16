<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>
    <style>
        .fl{
            padding:3px;margin:0px auto;width:900px;height:500px;overflow:scroll;
        }
        .table td{
            padding:10px;
            border:1px solid gray;
        }
        .table td:hover{
            border:1px solid gray;
            background-color: #A0B0FD;
            cursor: move;
        }
        .table th{
            padding:10px;
            border:1px solid gray;
            background-color: gray;
            color: white;

        }
        
    </style>
</head>

<body id="page-top" class="index">
    

    <div class="container">
            <div class="intro-text">
                 <?php echo $__env->make('Main/test', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
     </div>
</body>

    <!-- jQuery -->
  

</body>

</html>
