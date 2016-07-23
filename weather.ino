#include "SIM900.h"
#include <SoftwareSerial.h>
#include "sms.h"
SMSGSM sms;
boolean started=false;



void setup()
{
    Serial.begin(9600);
    
    if (gsm.begin(2400)) 
    {
        Serial.println("\nstatus=READY");
        started=true;
    } 
    else 
        Serial.println("\nstatus=IDLE");

    if(started) 
    {
        if (sms.SendSMS("+63995351029", "Arduino SMS"))
        {
          Serial.println("\nSMS sent OK.");
        }
        else
        {
          Serial.println("\nError sending SMS.");
        }      
    }
}

void loop()
{
   
}

<?php
// SPECIFY USB PORT TO USE
$usb_comPort = "COM4";

	switch($_POST)
	{
		case isset($_POST['SignalNumber1']):
			exec("ECHO 1 > $usb_comPort"); // text signal number1
			break;
		case isset($_POST['SignalNumber2']):
			exec("ECHO 2 > $usb_comPort"); // text signal number2
			break;
		case isset($_POST['SignalNumber3']):
			exec("ECHO 3 > $usb_comPort"); // text signal number3
			break;
	

	}

?>