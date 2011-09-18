# blacklog.orchestra.io

## Make a phone call to the programmer when PHP errors are found on the server Log file

[blacklog.orchestra.io](http://blacklog.orchestra.io/ "BlackLog")

### How does it work?

BlackLog makes an FTP connection to a Blacknight Hosting account error_log file.

It then looks through the error_log file looking for mentions of 'PHP Fatal Error'.

Blacklog then uses the Twilio API to make a phone call to the Programmers mobile number and calls out the number of PHP errors found. It is designed to run Daily using Cron.

This application was made to learn how to use the Twilio API using Codeigniter and also to enter the Orchestra.io Competition.

This is a Public copy of the code with API and FTP details removed.

Twilio account currently pending authorization to make International Calls (US to Ireland)

### Configuration

1. Update config/ftp.php with the FTP access details to your Blacknight Error FTP account

2. Update config/Twilioapi.php with your Twilio AccountSid and AuthToken

