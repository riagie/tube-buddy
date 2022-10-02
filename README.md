tubebuddy-bot-keyword-explorer
==

TubeBuddy's Keyword Explorer API Wrapper 

### Getting started
1. install plugin tubebuddy in browser
2. get currentChannelId and currentChannelToken from tubebuddy browser (firefox or chrome)
```
firefox
- get url `about:devtools-toolbox?id=e389d8c2-5554-4ba2-a36e-ac7a57093130@gmail.com&type=extension`
- check/click tab network, reload, domain www.tubebuddy.com dan file getprofile?timeZoneOffset=+XX:X
- view request header **currentChannelId** and **currentChannelToken**
<<<<<<< HEAD
=======

>>>>>>> ddf968432b92ee8f7abb89bc901c65691575e7ed
chrome
- get url `chrome-extension://mhkhmbddkmdggbhaaaodilponhnccicb/_generated_background_page.html`
- click/click ctrl+shift+i, reload other tab url youtube and back to first tab
- click name getprofile?timeZoneOffset=%2B07%3A00
- view request header **currentChannelId** and **currentChannelToken**
```
3. currentChannelId and currentChannelToken edit in file **inc/config** name *CHANNEL_ID* and *CHANNEL_TOKEN*
4. file data key in excel save in **src** name tubebuddy or edit file config name *FILE_EXCEL*
5. closed browser (firefox or chrome) connected from tubebuddy
6. double click tubebuddy.bat

### Description
pause next in check key tubebuddy 3 second and looping interval 10 data in 20 second then update file config *SLEEP* and *MAX_SLEEP*

### Trick limit output console bat desc limit 
1. remove plugin tubebuddy in browser and chaneel youtube in account tubebuddy
2. delete account in profile account click *Permanently Delete My Account*
3. finish, repeat step Getting started
<<<<<<< HEAD
=======





>>>>>>> ddf968432b92ee8f7abb89bc901c65691575e7ed
