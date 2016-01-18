<?php 
/**************************************************
Name		:				Gowrinath Jarugula

Zid			:				Z1744852

Section		:				CSCI 566-0004

Assignment	:				Assignment 10

Due Date	:				11/12/2014

TA			:				Robert Durham

Program Name:				inputBox.php

Description :				This php file displays form with a single input box and a button. Whenever the button is clicked
							the content of the text box is fetched and the years that consists of this name is shown in the form.
**************************************************/
include ('phpdbconnect.php');							#including the phpdbconnect.php file which has the information for the connection to database

$page_title = 'Input Box(page1)';						#Naming the page as input box(page1)

echo '<form action="inputBox.php" method="post">';		#Creating a form which will call the post method when submit is clicked

echo 'Enter First Name: <input type="text" name="name">';	#Creating a text box to enter the name of he individual

echo '<br><br>';						#using <br> to create new line spaces in the form

echo '<input type="submit" name="submit" value="Submit"><br>';			#Creating a submit button that will call the post method

echo '</form>';								#end of the form

if ($_SERVER['REQUEST_METHOD'] == 'POST')		#calling the post method
{
$name = $_POST['name'];							#Retrieving the name from the form
echo '<br>';									#break
$sql = "select distinct year from BabyName where name = ?";				#sql query for the retrieval of names from the database
$stmt = $conn->prepare($sql);							#preparing the connection
$stmt -> execute(array($name));							#Executing the array elements one by one
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<h1>year</h1><br>';					#using heading tag to highlight the year heading
foreach($rows as $r)						#using for each to iterate till the rows are completed
{

echo $r['year'];							#printing out the year
echo '<br>';

}
}											#end of program
?>






