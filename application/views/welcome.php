<html>
    <head>
	<title>BlackLog - Blacknight Error Logs over the phone</title>
	<style>
	    body
	    {
		font-size: 12px;
		font-family:verdana;
	    }
	</style>
    </head>
    <body>
	<h2>BlackLog - Automatically notify the Developer of PHP errors over the phone</h2>

	<p>BlackLog makes an FTP connection to a Blacknight Hosting account error_log file.</p>

	<p>It then looks through the error_log file looking for mentions of 'PHP Fatal Error'.</p>

	<p>Blacklog then uses the Twilio API to make a phone call to the Programmers mobile number and calls out the number of PHP errors found. It is designed to run Daily using Cron.</p>

	<p>This application was made to learn how to use the Twilio API using Codeigniter and also to enter the Orchestra.io Competition.</p>

	<p>Thanks to <a href="http://blacknight.ie">Blacknight</a>, <a href="http://twilio.com">Twilio</a> and <a href="http://orchestra.io">Orchestra.io</a></p>

	<p>Source code available on <a href="https://github.com/murrion/BlackLog_Public">GitHub</a></p>
    </body>
</html>