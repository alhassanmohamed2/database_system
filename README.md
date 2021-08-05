# **PHP DataBase System**



This System consists of Three Classes:

- Database
- DatabaseQuery
- DataQuery

## **Database Class**

This Class is responsible for the connection to the database
and is a parent calss for both the other classes (DatabaseQuery, DataQuery)
To use the connection protected member from Database class  in both other classes.


## **DatabaseQuery Class**

This Class is responsible for the Queries that affect the entire Database, 
It uses Database Class conncetion member To Excute Queries.


## **DataQuery Class**

This Class is responsible for the Queries that affect a table in the Database, 
It uses Database Class conncetion member To Excute Queries.






