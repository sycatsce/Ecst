<!DOCTYPE HTML>
<html>
    <head>
        <?php $extsName = $sya->get('home'); 
        $reflect = new ReflectionClass($extsName);
        $extensions = $reflect->newInstanceArgs(); ?>
    </head>
    
    <body>
        <h1> Welcome </h1>
        <p> <?php echo $a; ?> </p>
        <?php $extensions->sayHello(); ?>
    </body>
</html>