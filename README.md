# oremis
Online Real Estate Management System Manual

<<Requirements>> 
1.Make sure that you have installed and set up your Apache and MySQL servers correctly. 
2.Ensure that you have a current version of any browser with support for running PHP5 and preferably Microsoft Edge®, Mozilla Firefox® or Google Chrome®.
3.In case you would like to view the code and edit them, I would recommend Notepad++® text editor. 
4.For more intuitive management of the database using a GUI tool I would recommend SQLyog – MySQL GUI, the most powerful MySQL manager and admin tool. 

<<Installation>>
1.Copy the folder oremis to the root of your local web server. That is C:\xampp\htdocs\ for XAMPP on Windows.
2.Use one of the SQL dumps in oremis\dbBackup to: 
    i.create database, tables and insert test data – use oremis(structure&data).sql 
    ii.create database and tables only – use oremis(structure).sql
    iii.add test data only – use oremis(data).sql
3.Start your Apache and MySQL servers. Open your browser and visit http://localhost/oremis/ to run the application.

NB: When using the test data, use the following test users: 
        <USERNAME>        <PASSWORD> 
          admin             admin09 
          client1           client109 
          client2           client209 
          powner1           powner109 
          powner2           powner209 
