<?php 

$Host_name='localhost';
$mysqli_username='root';
$mysqli_password='';



if($con=mysqli_connect("localhost","root","","transport"))
{
    
    // $con=mysqlii_connect("localhost","root","root","transport");
    
    
        $table_reg="CREATE TABLE Registration(
            chassis_no INT NOT NULL PRIMARY KEY,
            vehicle_no varchar(10) NOT NULL,
            eng_no INT NOT NULL,
            vehicle_type varchar(10) not null,
            make varchar(20) not null,
            wheel_base int not null,
            seating_capacity int not null,
            mmy int not null
        )";

        $table_fitness="CREATE TABLE Fitness(
            certificate_no INT NOT NULL PRIMARY KEY,
            vehicle_no varchar(10) NOT NULL REFERENCES Registration(vehicle_no) ON DELETE SET NULL,
            name_of_rto varchar(50) not null,
            expiry_date date not null,
            renewal_date date not null,
            amount_cert int not null
        )";

        $table_roadtax="CREATE TABLE RoadTax(
            Chalan_number int not null primary key,
            Name_of_rto varchar(50) not null,
            Expire_date date not null,
            Renewal_date date not null,
            Amount int not null,
            vehicle_no varchar(10) NOT NULL REFERENCES Registration(vehicle_no) ON DELETE SET NULL

        )";

        $table_insurance="CREATE TABLE Insurance(
           Policy_number varchar(10) not null primary key,
           Name_of_company varchar(50) ,
           Expiry_date DATE,
           Renewal_date DATE,
           Amount_of_insurance integer,
           vehicle_no varchar(10) NOT NULL REFERENCES Registration(vehicle_no) ON DELETE SET NULL
        )";

        $table_permit="CREATE TABLE Permit(
          Chalan_number int not null primary key,
          Name_of_RTO varchar(50),
          Expiry_date date,
          Renewal_date date,
          Amount_of_permit int,
          vehicle_no varchar(10) NOT NULL REFERENCES Registration(vehicle_no) ON DELETE SET NULL

        )";

        $table_spareparts="CREATE TABLE SpareParts(
          VEHICLE_REG_NO varchar(10) primary key NOT NULL REFERENCES Registration(vehicle_no) ON DELETE SET NULL, 
          PURCHASED_DATE date,
          PURCHASED_FROM date,
          BILL_NUMBER int,
          QUANTITY int,
          PARTICUALRS varchar(50),
          BILL_AMOUNT INT

        )";
       
        $table_labour="CREATE TABLE Labour(
          VEHICLE_REG_NO varchar(10) primary key NOT NULL REFERENCES Registration(vehicle_no) ON DELETE SET NULL, 
          Repair_DATE date,
          Repair_FROM date,
          BILL_NUMBER int,
          BILL_AMOUNT int,
          Desciption varchar(50)
        )";

    
        $table_emissiontest="CREATE TABLE EmissionTest(
            VEHICLE_REG_NO varchar(10) primary key NOT NULL REFERENCES Registration(vehicle_no) ON DELETE SET NULL, 
            Renewal_DATE date,
            NAME_OF_TESTCENTRE varchar(50),
            CHALAN_NUMBER int,
            AMOUNT int,
            EXPIRY_DATE date
          )";


        $table_engineoil="CREATE TABLE EngineOil(
            VEHICLE_REG_NO varchar(10) primary key NOT NULL REFERENCES Registration(vehicle_no) ON DELETE SET NULL, 
            BILLING_DATE date,
            PROGRESSIVE_KMS int,
            NO_OF_LITRES int,
            SUPPLIERS_NAME varchar(50),
            BILL_NO int,
            BILL_AMOUNT int,
            DESCRIPTION varchar(50)
          )";

        $table_fuel="CREATE TABLE Fuel(
            VEHICLE_REG_NO varchar(10) primary key NOT NULL REFERENCES Registration(vehicle_no) ON DELETE SET NULL, 
            FILLING_DATE date,
            INDENT_NO int,
            HSD_IN_LITRES int,
            PREVIOUS_READING int,
            TOTAL_KM int,
            KMPL int,
            BILL_NO int,
            AMOUNT int
          )";

        $table_battery="CREATE TABLE Battery(
            BILL_NO int primary key not null,
            SUPPLIERS_NAME varchar(50),
            AMOUNT int,
            QUANTITY int,
            FITTED_DATE int,
            FITTED_TIME int
          )";

        $table_tyres="CREATE TABLE Tyres(
            Tyre_int int primary key not null,
            Fitted_date date,
            Fitted_time_progressive_Kms time,
            Removed_time_progressive_Kms time,
            Removed_date date,
            Tyre_position varchar(6),
            Total_covered_Kms int
          )";

        $table_stocks="CREATE TABLE Stocks(
            Tyre_int int,
            Bill_no int primary key not null,
            Manufacturer varchar(50),
            Cost_of_tyre int,
            Date_of_purchase date,
            Tyre_type varchar(20),
            Tyre_position varchar(6)
          )";
          $user_db="CREATE TABLE User_db(
              username varchar(10) not null,
              password varchar(100) primary key 
              )";

        $insert_user_admin="INSERT INTO User_db VALUES('admin','admin')";
        $insert_user_princi="INSERT INTO User_db VALUES('princi','princi')";

        mysqli_query($con,$table_reg);
        mysqli_query($con,$table_battery);
        mysqli_query($con,$table_emissiontest);        
        mysqli_query($con,$table_engineoil);
        mysqli_query($con,$table_fitness);        
        mysqli_query($con,$table_fuel);
        mysqli_query($con,$table_insurance);
        mysqli_query($con,$table_labour);
        mysqli_query($con,$table_permit);
        mysqli_query($con,$table_roadtax);
        mysqli_query($con,$table_spareparts);
        mysqli_query($con,$table_stocks);
        mysqli_query($con,$table_tyres);
        mysqli_query($con,$user_db);
        mysqli_query($con,$insert_user_admin);
        mysqli_query($con,$insert_user_princi);
        
    }
    



?>