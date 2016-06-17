# Global Archive v2

Version 2 of Global Archive
# Patch Installation
 ```
    mysql >> source /path/to/patch/patch.sql;
 ```   


#Completed
    1 : The user account should get warning messages or lockedup upon giving wrong password several times.
    2 : For the new users, information should be provided in the login page for them to send a request for 
        the password through email (done need to configure mail server information in config.php) 
    3 : In Dashboard, "click to see your tasks" shows the tool tip text as "search books" 
        even for audio,video,letters and others
    4 : In the above case-1, the save and the reset button in form needs tool tip text.
    5 : Also when saving the form, we need alert/confirmation box.
    6 : The search icon in the role page upon clicking gets the 'add new role' form.
    7 : The search icon in the user page upon clicking gets the 'add new user' form.
    8 : When editing/creating the user form, the password allows more than 10 characters 
        and get saved which is contrary to the login page where the password allows only 10 characters.  
    9 : After getting the searched results, again if we select the role to be 'select a role', 
        the page is not getting refreshed. 
    10 : The tool tip text should be there for all the fields so that the user
         gives only the correct values.  
    11 : Alert/confirmation messages should be there before saving the form.            

# Noting to do
    1 : Even if we are not making any changes to the form, when we click the 'save' button, notice comes as
        'updated successfully'.
    2 : Even without filling any fields, when we click save, we get the message" 
        Artefact successfully updated"


# Enhancement Purpose
     1 : When we select the role, we are getting the search result.Upon clicking the 'Reset' button,
         the page is not getting reset.


# Need Confirmation
      1 : When filling the artefact form the save and the clear button could be at the bottom of the page
      2 : Form accepts invalid input. Eg- accepting alpha characters for the year etc. 
      3 : Archive code is mandatory here in this form but no asterisk sign is displayed. 
          Also even without entering the archival code, the form is getting submitted and saved.
      
# Need to Clarify
      1 : Allows duplication when creating artefact.
      2 : After getting the search results if we click the 'Perform task' button, it gets the task page 
          where the save button and the rest button are getting hanged when we click it.
      