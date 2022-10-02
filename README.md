tubebuddy-bot-keyword-explorer
==

Documentation 
--
install plugin tubebuddy in browser
get currentChannelId and currentChannelToken from tubebuddy browser (firefox or chrome)
    ```
    * firefox 
    a. url about:devtools-toolbox?id=e389d8c2-5554-4ba2-a36e-ac7a57093130@gmail.com&type=extension
    b. tab network, reload, click domain www.tubebuddy.com dan file getprofile?timeZoneOffset=+07:00 check request header = 
    currentChannelId:
    currentChannelToken:

    * chrome
    a. url chrome-extension://mhkhmbddkmdggbhaaaodilponhnccicb/_generated_background_page.html
    b. click ctrl+shift+i, reload other tab url youtube, back to first tab, click name getprofile?timeZoneOffset=%2B07%3A00 check request header = 
    currentChannelId:
    currentChannelToken:
    ```
currentChannelId and currentChannelToken edit in file 'inc/config' example
    ```
    define('CHANNEL_ID', 'UCJu5ADV3DtGIrhAJvcwIKsQ');
    define('CHANNEL_TOKEN', '79587b35-7261-4944-b275-548c2349ef20');
    ```
file data key in excel save in 'src/' name tubebuddy or edit file config
    ```
    define('FILE_EXCEL', 'tubebuddy');
    format file .xlsx
    ```
closed browser (firefox or chrome) connected from tubebuddy
double click tubebuddy.bat


Description

1. pause next check key tubebuddy in 3 second
2. pause next if looping interval 10 data in 20 second
3. trick: console bat output desc limit 
    a. remove plugin tubebuddy in browser
    b. remove chaneel youtube in account tubebuddy
    c. profile account click "Permanently Delete My Account"
    d. finish, repeat step Documentation

rename set pause edit in file config
define('SLEEP', 3);
define('MAX_SLEEP', 20);





