<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>test PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
        
    <?php
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<Ss9wJ6Jlux/t2eY0j/fTM3ZUznJ+s/6NRTQ9RRunQMFxYps0mKiKjGAQE/1sZU9x9Q6j9h1va9GS5smGaKK4lm0i79fmDyOaQOtJYVdc0AOVmUU3DhAGrt7sZWDlTOorqm7PXz/NGpaLP4zmG7SxEAdB04t89/1O/w1cDnyilFU=>');
                $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<b91870f8a4b81810f5586de7a6f03ee4>']);
                
                $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
                $response = $bot->pushMessage('<U4043ae181f2a93bec78b41721d866359>', $textMessageBuilder);
                
                echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
    ?>
    
</body>
</html>