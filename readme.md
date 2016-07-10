# Zoe Financial Full-Stack Developer Test

This project was created using **Laravel 5.1** and **MySQL**.

_Note:_ In order to create the database and the data, you have to run the Laravel migration script.

##Instruction for run the process

When you get in to the main page you have to select the client option on the left menu, then you can put the name of the two agents and their zip codes, then you can click on the MATCH button to run the process.

##Process explanation
The process consist in to get the latitude and longitude using the zip codes of the clients and the agents, using the **_google maps API_**, then calculate which of the agents is closer to each client using the **_"Great Circle Distance"_** function.