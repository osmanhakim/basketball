<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <img src="http://localhost:8000/download.jpeg" />
        <p>Welcome <?php echo e($data['userName']); ?></p>
        <p>We are happy to tell you we will accept your kids to join our team</p>
        <p>Email : <?php echo e($data['userEmail']); ?></p>
    </center>
</body>

</html><?php /**PATH E:\BasketBall\backend\resources\views/mail/myEmail.blade.php ENDPATH**/ ?>