<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Class</h2>
    <p>The class is a contruct that is used as a template to create objects of that class. Class has states and behaviours
        that
        all the objects of that class share</p>
    <ul>
        <li>for example <b>Class Car{}</b> can have these methods</li>
        <ul type="circle">
            <li>turnRight()</li>
            <li>turnLeft()</li>
            <li>brake()</li>
            <li>activeHorn()</li>
            <li>goBack()</li>
            <li>accelerate()</li>
            <li>increaseSpeed()</li>
        </ul>
    </ul>
    <hr>

    <h2>Instance</h2>
    <p>One can have instance of a class. The instance is the actual object of that class</p>
    <hr>

    <h2>Attributes/Properties</h2>
    <p>Represent the state</p>
    <hr>

    <h2>Operations/Methods</h2>
    <p>Resresent the behaviour</p>
    <hr>

    <h1>Access Modifieres</h1>
    <h2>public</h2>
    <p>The resource can be accessed from any scope/from anywhere (default)</p>
    <hr>

    <h2>private</h2>
    <p>the resource can only be accessed from inside the class where it is defined</p>
    <hr>

    <h2>protected</h2>
    <p>the resouce can only be accessed from within the class or from its descendents / child classes</p>
    <hr>

    <h2>final</h2>
    <p>the resouce is accessible from any scope but cannot be overriden/redefined in descendents/child classes.
        It only applies to methods and classes. Class defined as final, cannot be extended
    </p>
    <hr>

</body>

</html>