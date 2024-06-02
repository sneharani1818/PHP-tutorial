<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title="Learning PHP"; echo $title;?></title>
</head>
<body>
    <h2>More on PHP Variables</h2>
    <h4>Rules for creating variables in php</h4>
    <ul>
        <li>Starts with a $ sign</li>
        <li>Cannot start with a number</li>
        <li>Must start with letter or underscore</li>
        <li>Can only contain alphanumeric characters or underscore</li>
        <?php $name="Sneha"; echo $name; ?>
        <li>Variables in PHP are case sensitive</li>
        <?php $Name="Name"; $name="name"; echo $name.$Name; ?>
    </ul>
</body>
</html>