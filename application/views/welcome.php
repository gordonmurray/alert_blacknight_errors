BlackLog makes an FTP connection to a Blacknight Hosting account error_log file.<br />

It then looks through the error_log file looking for mentions of 'PHP Fatal Error'.<br />

Blacklog then uses the Twilio API to make a phone call to the Programmers mobile number and calls out the number of PHP errors found. It is designed to run Daily using Cron.<br />

This application was made to learn how to use the Twilio API using Codeigniter and also to enter the Orchestra.io Competition.<br />