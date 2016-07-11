# Zoe Financial Full-Stack Developer Test

This project was created using **Laravel 5.1**, **MySQL** and **_Bootstrap_**.

_Note:_ In order to create the database and the data, you have to run the Laravel migration script.

##Instruction for run the process

When you get in to the main page you have to select the client option on the left menu, then you can put the name of the two agents and their zip codes, then you can click on the MATCH button to run the process.

##Process explanation
The process consist in assign clients to 2 agents based on location, the only parameter provided to do that is the zip code, to get the latitude and longitude the process use the **_google maps API_**, then calculate which of the agents is closer to each client using the **_"Great Circle Distance"_** function. The location parameters are updated into the database to improve the future executions of the process, that will avoid consume the google api web service each time.
