<?php

//AT POST
$recordingUrl = $_POST['sessionId'];
$isActive  = $_POST['isActive'];
$direction = $_POST['direction'];
$callerNumber = $_POST['callerNumber'];
$destinationNumber = $_POST['destinationNumber'];
$dtmfDigits  = $_POST['dtmfDigits'];
$recordingUrl = $_POST['recordingUrl'];
$durationInSeconds  = $_POST['durationInSeconds'];
$currencyCode  = $_POST['currencyCode'];
$amount  = $_POST['amount'];

//PARAMS
require_once('AfricasTalkingGateway.php');
$username   = "WeloveNerds";
$apikey     = "34916511ccfe864b9aed8cb41758c5c87638daf3867148dea6c951a38e2ff126";
$from = "+254711082880";

//call to db
$to   = "+254708415904,+254732730473";
// Create a new instance of our awesome gateway class
$gateway = new AfricasTalkingGateway($username, $apikey);


switch($dtmfDigits){
    case "0":
    // Talk to sales... Compose the response
    $response  = '<?xml version="1.0" encoding="UTF-8"?>';
    $response .= '<Response>';
    $response .= '<Say>Please hold while we connect you to Sales.</Say>';
    $response .= '<Dial sequential="true" phoneNumbers="880.welovenerds@ke.sip.africastalking.com,+254787235065" ringbackTone="http://173.212.225.164:8010/voice/media/sautisol.mp3"/>';
    $response .= '</Response>';

    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;
    break;

    case "1":
        // Talk to support... Compose the response
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Say>Please hold while we connect you to Support.</Say>';
        $response .= '<Dial sequential="true" phoneNumbers="880.welovenerds@ke.sip.africastalking.com,+254787235065" ringbackTone="http://173.212.225.164:8010/voice/media/sautisol.mp3"/>';
        $response .= '</Response>';
    
        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
    break;

    case "2":
        // Talk listen again... Compose the response
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Redirect>http://173.212.225.164:8010/voice/pick.php</Redirect>';
        $response .= '</Response>';

        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
        break;

    default:
        // Talk to support... Compose the response
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Say>Please hold while we connect you to Support.</Say>';
        $response .= '<Dial sequential="true" phoneNumbers="880.welovenerds@ke.sip.africastalking.com,+254787235065" ringbackTone="http://173.212.225.164:8010/voice/media/sautisol.mp3"/>';
        $response .= '</Response>';
    
        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
    break;

}


?>
