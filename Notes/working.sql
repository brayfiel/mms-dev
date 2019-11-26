DROP TABLE IF EXISTS `AATorahReadings`;
Create Table `AATorahReadings` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Parashat VARCHAR(20),
 Week INT(2) unsigned,
 Portion VARCHAR(30),
 HaftarahAshkenazim VARCHAR(40),
 HaftarahSephardim VARCHAR(40),
 Shabbat DATETIME,
 SpecialShabbat VARCHAR(40),
 AlternateHaftarah VARCHAR(45),
 AlternateMaftir VARCHAR(45),
 DoubledWith VARCHAR(20),
 Notes VARCHAR(50),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `AATorahReadings_Local2`;
Create Table `AATorahReadings_Local2` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Jewish_Date VARCHAR(30),
 Calendar_Jewish_Year INT(2) unsigned,
 Calendar_Jewish_Month INT(2) unsigned,
 Calendar_Jewish_Day INT(2) unsigned,
 Calendar_Holiday_Type VARCHAR(1),
 Calendar_Holiday_Code VARCHAR(7),
 Calendar_Holiday_Name VARCHAR(50),
 Week INT(2) unsigned,
 Portion VARCHAR(30),
 HaftarahAshkenazim VARCHAR(40),
 HaftarahSephardim VARCHAR(40),
 Calendar_Civil_Date DATETIME,
 SpecialShabbat VARCHAR(40),
 AlternateHaftarah VARCHAR(45),
 AlternateMaftir VARCHAR(45),
 DoubledWith VARCHAR(20),
 Notes VARCHAR(50),
 Calendar_Services_AM VARCHAR(4),
 Calendar_PMMULT INT(2) unsigned,
 Calendar_PMBEFOR INT(2) unsigned,
 Calendar_LITELAMP VARCHAR(7),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `CDDSCHED`;
Create Table `CDDSCHED` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 GMON VARCHAR(2),
 GDOM VARCHAR(2),
 GMCH VARCHAR(9),
 GYR VARCHAR(4),
 HMON VARCHAR(2),
 HDOM VARCHAR(2),
 HMCH VARCHAR(8),
 HYR VARCHAR(4),
 HSD VARCHAR(1),
 HDNY VARCHAR(3),
 GNDOW DOUBLE,
 GDOWCH VARCHAR(9),
 DST DOUBLE,
 SERVAM VARCHAR(4),
 SERVPM VARCHAR(4),
 LITELAMP VARCHAR(6),
 NOTES VARCHAR(28),
 RECTYPE VARCHAR(1),
 ARROW VARCHAR(1),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `CDTPRAY`;
Create Table `CDTPRAY` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 SD VARCHAR(1),
 DNY VARCHAR(3),
 ONDATE VARCHAR(4),
 ONDOW VARCHAR(1),
 FORMONTH VARCHAR(8),
 FORMON VARCHAR(2),
 FORDOM VARCHAR(2),
 FORDOW VARCHAR(1),
 GRP VARCHAR(1),
 EXCEPT VARCHAR(1),
 XSATMORN VARCHAR(1),
 EXCMIN VARCHAR(1),
 ADV VARCHAR(1),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `CDTSDATE`;
Create Table `CDTSDATE` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 SDAY VARCHAR(1),
 DNY VARCHAR(3),
 REF VARCHAR(5),
 MONCH VARCHAR(8),
 MONNO VARCHAR(2),
 DOM VARCHAR(2),
 DOW VARCHAR(1),
 GRPS VARCHAR(5),
 CODE VARCHAR(4),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `CDTSSSNY`;
Create Table `CDTSSSNY` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 MON VARCHAR(2),
 DAY VARCHAR(2),
 SUNRISE VARCHAR(4),
 SUNSET VARCHAR(4),
 CANDLES VARCHAR(4),
 STARS3 VARCHAR(2),
 SHABEND VARCHAR(4),,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblCalendar`;
Create Table `tblCalendar` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Calendar_Civil_Date DATETIME,
 Calendar_Jewish_Year INT(2) unsigned,
 Calendar_Jewish_Month INT(2) unsigned,
 Calendar_Jewish_Day INT(2) unsigned,
 Calendar_Holiday_Type VARCHAR(1),
 Calendar_Holiday_Code VARCHAR(7),
 Calendar_Holiday_Name VARCHAR(50),
 Calendar_Week INT(2) unsigned,
 Calendar_Portion VARCHAR(45),
 Calendar_Haftarah_Ashkenazim VARCHAR(45),
 Calendar_Haftarah_Sephardim VARCHAR(45),
 Calendar_Special_Shabbat VARCHAR(40),
 Calendar_Alternate_Haftarah VARCHAR(45),
 Calendar_Alternate_Maftir VARCHAR(45),
 Calendar_Doubled_With VARCHAR(50),
 Calendar_Notes VARCHAR(50),
 Calendar_Services_AM VARCHAR(4),
 Calendar_PMMULT INT(2) unsigned,
 Calendar_PMBEFOR INT(2) unsigned,
 Calendar_LITELAMP VARCHAR(7),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblCalendar_Hebrew_Master`;
Create Table `tblCalendar_Hebrew_Master` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Subject VARCHAR(30),
 Start_Date DATETIME,
 Start_Time VARCHAR(11),
 End_Date DATETIME,
 End_Time VARCHAR(11),
 All_Day_Event VARCHAR(6),
 Description VARCHAR(255),
 Show_Time_As VARCHAR(2),
 Location VARCHAR(16),,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblCalendar_Jewish_Holidays_Backup`;
Create Table `tblCalendar_Jewish_Holidays_Backup` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Jewish_Holiday_Name VARCHAR(28),
 Jewish_Holiday_Codename VARCHAR(3),
 Jewish_Holiday_Year VARCHAR(4),
 Jewish_Holiday_Month VARCHAR(2),
 Jewish_Holiday_Month_Word VARCHAR(25),
 Jewish_Holiday_Day VARCHAR(2),
 Jewish_Holiday_Services_AM VARCHAR(4),
 Jewish_Holiday_PMMULT DOUBLE,
 Jewish_Holiday_PMBEFOR DOUBLE,
 Jewish_Holiday_LITELAMP VARCHAR(6),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblCalendar_Parashats`;
Create Table `tblCalendar_Parashats` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Torah_Reading_Code VARCHAR(5)
 Torah_Reading_Sedra VARCHAR(40)
 Torah_Reading_Sedra_New VARCHAR(40)
 Torah_Reading_Special VARCHAR(41)
 Torah_Reading_Torah_Reading VARCHAR(49)
 Torah_Reading_Haftorah1 VARCHAR(49)
 Torah_Reading_Note1 VARCHAR(49)
 Torah_Reading_Haftorah2 VARCHAR(49)
 Torah_Reading_Note2 VARCHAR(49),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblCalendar_Priority`;
Create Table `tblCalendar_Priority` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Priority INT(2) unsigned
 Description VARCHAR(30),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblCalendar_Torah_Readings`;
Create Table `tblCalendar_Torah_Readings` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Torah_Reading_Code VARCHAR(5)
 Torah_Reading_Sedra VARCHAR(22)
 Torah_Reading_Special VARCHAR(41)
 Torah_Reading_Torah_Reading VARCHAR(47)
 Torah_Reading_Haftorah1 VARCHAR(42)
 Torah_Reading_Note1 VARCHAR(49)
 Torah_Reading_Haftorah2 VARCHAR(34)
 Torah_Reading_Note2 VARCHAR(49),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblCalendar2`;
Create Table `tblCalendar2` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Civil_Start_Date DATETIME
 Hebrew_Start_Date VARCHAR(30)
 Civil_End_Date DATETIME
 Hebrew_End_Date VARCHAR(30)
 Parashat VARCHAR(28)
 Daf_Yomi VARCHAR(25)
 Candle_Lighting VARCHAR(10)
 Havdalah VARCHAR(10)
 Omer VARCHAR(5)
 Holiday_Code VARCHAR(10)
 Holiday VARCHAR(30)
 Holiday_Code2 VARCHAR(10)
 Holiday2 VARCHAR(30)
 Holiday_Code3 VARCHAR(10)
 Holiday3 VARCHAR(30)
 Rosh_Chodesh VARCHAR(30)
 Civil_Holiday_Code VARCHAR(10)
 Civil_Holiday VARCHAR(30),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblCalendar3`;
Create Table `tblCalendar3` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Civil_Date DATETIME
 Hebrew_Date VARCHAR(30)
 Event_Type VARCHAR(1)
 Event_Desc VARCHAR(30)
 Candle_Lighting VARCHAR(10)
 Calendar_Priority INT(2) unsigned,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblDayOfWeek`;
Create Table `tblDayOfWeek` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 DAYNUMB INT(2) unsigned
 DAYNAME VARCHAR(9),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblGlobals`;
Create Table `tblGlobals` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Global_App_Name VARCHAR(50)
 Global_Org_Name VARCHAR(50)
 Global_Org_Address_Street_Line1 VARCHAR(50)
 Global_Org_Address_Street_Line2 VARCHAR(50)
 Global_Org_Address_City VARCHAR(50)
 Global_Org_Address_State VARCHAR(2)
 Global_Org_Address_Zip VARCHAR(5)
 Global_Org_Address_Zip_Ext VARCHAR(4)
 Global_Org_Phone_Number VARCHAR(10)
 Global_Org_Email_Address VARCHAR(255)
 Global_Yahrzeit_Last_Printed_Start DATETIME
 Global_Yahrzeit_Last_Printed_End DATETIME
 Global_Yahrzeit_Service_Contact VARCHAR(40)
 Global_Yahrzeit_Service_Contact_Telephone VARCHAR(255)
 Global_Yahrzeit_Service_Contact_Email VARCHAR(255)
 Global_Yahrzeit_Lead_Time INT(2) unsigned
 Global_Permanent_Pew_Year INT(2) unsigned,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblGregMonth`;
Create Table `tblGregMonth` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 GregMonthNum INT(2) unsigned
 GregMonthName VARCHAR(12),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblHebrewMonth`;
Create Table `tblHebrewMonth` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Heb_Month_Index INT(2) unsigned
 Heb_Month_Name VARCHAR(15)
 Heb_Month_Days INT(2) unsigned
 Heb_Month_Alt_Name VARCHAR(18),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblHH_Statistics`;
Create Table `tblHH_Statistics` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 PP_Item VARCHAR(40)
 PP_Indent INT(2) unsigned
 PP_Main INT(2) unsigned
 PP_Balc INT(2) unsigned,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblJewish_Holiday_Description`;
Create Table `tblJewish_Holiday_Description` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Code VARCHAR(30)
 Description VARCHAR(255),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblLegacy_MFDM1`;
Create Table `tblLegacy_MFDM1)` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 RECORD_NO VARCHAR(7)
 DELETE_IND VARCHAR(2)
 ID VARCHAR(5)
 KEYNAME VARCHAR(28)
 M_TITLE VARCHAR(8)
 M_1STNAME VARCHAR(25)
 M_SURNAME VARCHAR(28)
 F_TITLE VARCHAR(8)
 F_1STNAME VARCHAR(25)
 F_SURNAME VARCHAR(28)
 NJ VARCHAR(3)
 A_STREET VARCHAR(37)
 A_CITY VARCHAR(36)
 A_STATE VARCHAR(8)
 A_ZIP VARCHAR(6)
 B_STREET VARCHAR(37)
 B_CITY VARCHAR(36)
 B_STATE VARCHAR(8)
 B_ZIP VARCHAR(6)
 H1_PHONE VARCHAR(13)
 H2_PHONE VARCHAR(13)
 BM_PHONE VARCHAR(13)
 BF_PHONE VARCHAR(13)
 CTR_MMBR VARCHAR(9)
 MC_MMBR VARCHAR(8)
 SIS_MMBR VARCHAR(9)
 H_SCHL VARCHAR(7)
 S_SCHL VARCHAR(7)
 VIP VARCHAR(4)
 FAMSTAT VARCHAR(8)
 MAILING VARCHAR(8)
 PEWS VARCHAR(5)
 YAHRZT VARCHAR(7)
 SETUPDATE VARCHAR(11)
 LASTUPDATE VARCHAR(11)
 CONFID VARCHAR(7)
 STATUS VARCHAR(7),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblLegacy_RHDPP`;
Create Table `tblLegacy_RHDPP` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 RECORD_NO VARCHAR(7)
 DELETE_IND VARCHAR(2)
 LOCATN VARCHAR(7)
 SECTION VARCHAR(8)
 SEATROW VARCHAR(8)
 SEATNO VARCHAR(7)
 MFID VARCHAR(5)
 LASTNAME VARCHAR(21)
 FIRSTNAME VARCHAR(28)
 NOTES VARCHAR(7),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblLegacy_RYDMDEC`;
Create Table `tblLegacy_RYDMDEC` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 RECORD_NO VARCHAR(7)
 DELETE_IND VARCHAR(2)
 DID VARCHAR(5)
 DENAMGIV VARCHAR(28)
 DENAMSUR VARCHAR(21)
 DSEX VARCHAR(5)
 DHNAMGIV VARCHAR(33)
 DHNAMDAD VARCHAR(34)
 DODGDATE VARCHAR(11)
 DODCI VARCHAR(6)
 DODHDOM VARCHAR(8)
 DODHMON VARCHAR(8)
 DODHYR VARCHAR(7)
 PLAQLOC VARCHAR(8)
 SETUPDATE VARCHAR(11)
 LASTUPDATE VARCHAR(11)
 STATUS VARCHAR(7),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblLegacy_RYDMOBS`;
Create Table `tblLegacy_RYDMOBS` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 RECORD_NO VARCHAR(7)
 DELETE_IND VARCHAR(2)
 OID VARCHAR(5)
 OTITLE VARCHAR(7)
 OENAMGIV VARCHAR(28)
 OENAMSUR VARCHAR(21)
 OSEX VARCHAR(5)
 ADDRSTREET VARCHAR(37)
 ADDRCITY VARCHAR(36)
 ADDRSTATE VARCHAR(10)
 ADDRZIP VARCHAR(8)
 SETUPDATE VARCHAR(11)
 LASTUPDATE VARCHAR(11)
 STATUS VARCHAR(7),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblLegacy_RYDMREL`;
Create Table `tblLegacy_RYDMREL` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 RECORD_NO VARCHAR(7)
 DELETE_IND VARCHAR(2)
 RDID VARCHAR(5)
 ROID VARCHAR(5)
 RELD2O VARCHAR(26)
 SETUPDATE VARCHAR(11)
 LASTUPDATE VARCHAR(11)
 STATUS VARCHAR(7),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblLegacy_RYDTABLT`;
Create Table `tblLegacy_RYDTABLT` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 RECORD_NO VARCHAR(7)
 DELETE_IND VARCHAR(2)
 PLTABLET VARCHAR(9)
 PLCOLUMN VARCHAR(9)
 PLLINES VARCHAR(8)
 PLSIZE VARCHAR(11)
 STAT_A VARCHAR(7)
 STAT_O VARCHAR(7)
 STAT_R VARCHAR(7)
 STAT_V VARCHAR(7),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblLogs`;
Create Table `tblLogs` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Log_Name VARCHAR(15)
 Log_Date VARCHAR(10)
 Log_Time VARCHAR(11)
 Log_Line_No Int(11) unsigned
 Log_Statement VARCHAR(255),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblMailing_Class`;
Create Table `tblMailing_Class` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Mailing_Class_Code VARCHAR(2)
 Mailing_Class_Description VARCHAR(50),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)



DROP TABLE IF EXISTS `tblMailing_Labels`;
Create Table `tblMailing_Labels` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 ML_ID VARCHAR(4)
 B_STREET VARCHAR(36)
 B_CITY VARCHAR(35)
 B_STATE VARCHAR(2)
 B_ZIP VARCHAR(5)
 MAILING VARCHAR(2)
 LCLASS VARCHAR(1)
 LSACK VARCHAR(2)
 LHDR VARCHAR(29)
 LIC VARCHAR(3)
 CTR_MMBR VARCHAR(1)
 STATUS VARCHAR(1)
 MEMBERSHIP_OWNER BOOLEAN
 Prefix VARCHAR(10)
 F_1STNAME VARCHAR(24)
 F_SURNAME VARCHAR(27)
 SEX VARCHAR(1)
 MC_MMBR VARCHAR(1)
 SIS_MMBR VARCHAR(1)
 H_SCHL BOOLEAN
 S_SCHL BOOLEAN
 VIP VARCHAR(1)
 PP_Year INT(2) unsigned,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblMember_Statistics`;
Create Table `tblMember_Statistics` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 MS_item VARCHAR(50)
 MS_Indent INT(2) unsigned
 MS_Active_Qty INT(2) unsigned
 MS_All_Qty INT(2) unsigned,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblMember_Type`;
Create Table `tblMember_Type` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Member_Type_Code VARCHAR(1)
 Member_Type_Description VARCHAR(20),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)



DROP TABLE IF EXISTS `tblMemberImportWorking01`;
Create Table `tblMemberImportWorking01` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 IW_ID VARCHAR(4)
 KEYNAME VARCHAR(27)
 M_TITLE VARCHAR(7)
 M_1STNAME VARCHAR(24)
 M_SURNAME VARCHAR(27)
 F_TITLE VARCHAR(7)
 F_1STNAME VARCHAR(24)
 F_SURNAME VARCHAR(27)
 SEX VARCHAR(1)
 A_STREET VARCHAR(36)
 A_CITY VARCHAR(35)
 A_STATE VARCHAR(2)
 A_ZIP VARCHAR(5)
 B_STREET VARCHAR(36)
 B_CITY VARCHAR(35)
 B_STATE VARCHAR(2)
 B_ZIP VARCHAR(5)
 H1_PHONE VARCHAR(12)
 H2_PHONE VARCHAR(12)
 BM_PHONE VARCHAR(12)
 BF_PHONE VARCHAR(12)
 CTR_MMBR VARCHAR(1)
 MC_MMBR VARCHAR(1)
 SIS_MMBR VARCHAR(1)
 H_SCHL VARCHAR(1)
 S_SCHL VARCHAR(1)
 VIP VARCHAR(1)
 FAMSTAT VARCHAR(1)
 MAILING VARCHAR(2)
 PEWS VARCHAR(2)
 YAHRZT VARCHAR(1)
 SETUPDATE DATETIME
 LASTUPDATE DATETIME
 CONFID VARCHAR(1)
 STATUS VARCHAR(1),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblMembers`;
Create Table `tblMembers` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 M_ID VARCHAR(4)
 CTR_MMBR VARCHAR(1)
 PEWS VARCHAR(2)
 YAHRZT VARCHAR(1)
 STATUS VARCHAR(1)
 PERFERRED_MAILING VARCHAR(1)
 SETUPDATE DATETIME
 LASTUPDATE DATETIME,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblMembers_Address`;
Create Table `tblMembers_Address` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 MA_ID VARCHAR(4)
 B_STREET VARCHAR(36)
 B_CITY VARCHAR(35)
 B_STATE VARCHAR(2)
 B_ZIP VARCHAR(5)
 MAILING VARCHAR(2)
 SETUPDATE DATETIME
 LASTUPDATE DATETIME
 LCLASS VARCHAR(1)
 LSACK VARCHAR(2)
 LHDR VARCHAR(29)
 LIC VARCHAR(3),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)



DROP TABLE IF EXISTS `tblMembers_Names`;
Create Table `tblMembers_Names` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 MN_ID VARCHAR(4)
 MEMBERSHIP_OWNER BOOLEAN
 F_TITLE VARCHAR(10)
 F_1STNAME VARCHAR(24)
 F_SURNAME VARCHAR(27)
 SEX VARCHAR(1)
 MC_MMBR VARCHAR(1)
 SIS_MMBR VARCHAR(1)
 H_SCHL BOOLEAN
 S_SCHL BOOLEAN
 VIP VARCHAR(1)
 EMail_Local VARCHAR(64)
 EMail_Domain VARCHAR(253)
 SETUPDATE DATETIME
 LASTUPDATE DATETIME,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblMembers_Phone`;
Create Table `tblMembers_Phone` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 MP_ID VARCHAR(4)
 Member_Phone_Type_Code VARCHAR(1)
 Member_Phone_Number VARCHAR(10)
 Member_Phone_Ext VARCHAR(5)
 SETUPDATE DATETIME
 LASTUPDATE DATETIME,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblMembers_Reconcile`;
Create Table `tblMembers_Reconcile` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Customer VARCHAR(70)
 Bill_To_Name VARCHAR(70)
 Bill_To_Street VARCHAR(36)
 Bill_To_City VARCHAR(35)
 Bill_To_State VARCHAR(2)
 Bill_To_Zip VARCHAR(5)
 Phone VARCHAR(15)
 Customer_Type VARCHAR(35)
 ID VARCHAR(4)
 CTR_MMBR VARCHAR(1)
 F_TITLE VARCHAR(1)
 F_1STNAME VARCHAR(24)
 F_LNAME VARCHAR(27)
 Phone_Unformat VARCHAR(15)
 mmbr_id VARCHAR(4)
 mmbr_ctr_mmbr VARCHAR(1)
 mmbr_f_title VARCHAR(1)
 mmbr_f_1stname VARCHAR(24)
 mmbr_l_name VARCHAR(27)
 mmbr_mailing_code VARCHAR(2)
 mmbr_street VARCHAR(36)
 mmbr_city VARCHAR(35)
 mmbr_state VARCHAR(2)
 mmbr_zip VARCHAR(5)
 mmbr_status VARCHAR(1)
 mmbr_phone VARCHAR(10)
 mmbr_phone_type VARCHAR(1),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblPermanent_Pew`;
Create Table `tblPermanent_Pew` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 PP_Year INT(2) unsigned
 LOCATN VARCHAR(4)
 PEW_SECTION VARCHAR(1)
 SEATROW VARCHAR(2)
 SEATNO VARCHAR(3)
 PP_Reserved BOOLEAN
 MFID VARCHAR(4)
 Actual_Purchaser VARCHAR(4)
 NOTES VARCHAR(6)
 Sold BOOLEAN
 SETUPDATE DATETIME
 LASTUPDATE DATETIME,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblPermanent_Pew_Report`;
Create Table `tblPermanent_Pew_Report` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 intPrintRow INT(2) unsigned
 txt01 VARCHAR(3)
 txt02 VARCHAR(3)
 txt03 VARCHAR(3)
 txt04 VARCHAR(3)
 txt05 VARCHAR(3)
 txt06 VARCHAR(3)
 txt07 VARCHAR(3)
 txt08 VARCHAR(3)
 txt09 VARCHAR(3)
 txt10 VARCHAR(3)
 txt11 VARCHAR(3)
 txt12 VARCHAR(3)
 txt13 VARCHAR(3)
 txt14 VARCHAR(3)
 txt15 VARCHAR(3)
 txt16 VARCHAR(3)
 txt17 VARCHAR(3)
 txt18 VARCHAR(3)
 txt19 VARCHAR(3)
 txt20 VARCHAR(3)
 txt21 VARCHAR(3)
 txt22 VARCHAR(3)
 txt23 VARCHAR(3)
 txt24 VARCHAR(3)
 txt25 VARCHAR(3)
 txt26 VARCHAR(3)
 txt27 VARCHAR(3)
 txt28 VARCHAR(3)
 txt29 VARCHAR(3)
 txt30 VARCHAR(3)
 txt31 VARCHAR(3)
 txt32 VARCHAR(3)
 txt33 VARCHAR(3)
 txt34 VARCHAR(3)
 txt35 VARCHAR(3)
 txt36 VARCHAR(3)
 txt37 VARCHAR(3)
 txt38 VARCHAR(3)
 txt39 VARCHAR(3)
 txt40 VARCHAR(3)
 txt41 VARCHAR(3)
 txt42 VARCHAR(3)
 txt43 VARCHAR(3)
 txt44 VARCHAR(3)
 txt45 VARCHAR(3)
 txt46 VARCHAR(3)
 txt47 VARCHAR(3)
 txt48 VARCHAR(3)
 txt49 VARCHAR(3)
 txt50 VARCHAR(3),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblPermanent_Pew_Statistics`;
Create Table `tblPermanent_Pew_Statistics` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 PP_Item VARCHAR(40)
 PP_Indent INT(2) unsigned
 PP_Main INT(2) unsigned
 PP_Balc INT(2) unsigned,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblPhone_Type`;
Create Table `tblPhone_Type` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Phone_Type_Code VARCHAR(1)
 Phone_Type_Description VARCHAR(15),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)



DROP TABLE IF EXISTS `tblRecord_Status`;
Create Table `tblRecord_Status` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Record_Status_Code VARCHAR(1)
 Record_Status_Description VARCHAR(50),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblRelationships`;
Create Table `tblRelationships` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Relationship_Desc VARCHAR(35)
 Relationship_Sex VARCHAR(1),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblServices_Schedule`;
Create Table `tblServices_Schedule` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Schedule_Civil_Date DATETIME
 Schedule_Hebrew_Month VARCHAR(2)
 Schedule_Hebrew_Day VARCHAR(2)
 Schedule_Hebrew_Month_C VARCHAR(8)
 Schedule_Hebrew_Year VARCHAR(4)
 Schedule_DST DOUBLE
 Schedule_Shacharit DATETIME
 Schedule_Musaf DATETIME
 Schedule_Mincha DATETIME
 Schedule_MaAriv DATETIME
 Schedule_LIte_Lamp VARCHAR(6),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblStates`;
Create Table `tblStates` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 State_Abbrev VARCHAR(3)
 State_Full VARCHAR(35)
 State_Full_Alt VARCHAR(35),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblSurname_Prefix`;
Create Table `tblSurname_Prefix` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Prefix_Ref INT(2) unsigned
 Prefix_Code VARCHAR(1)
 Prefix VARCHAR(10)
 CreatedBy VARCHAR(255)
 CreatedOn DATETIME
 EdittedBy VARCHAR(255)
 EdittedOn DATETIME,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)



DROP TABLE IF EXISTS `tblUsers`;
Create Table `tblUsers` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 U_ID Int(10) unsigned
 EmailAddress VARCHAR(255)
 Title Int(10) unsigned
 FirstName VARCHAR(255)
 LastName VARCHAR(255)
 Suffix Int(10) unsigned
 Password VARCHAR(255)
 Members INT(2) unsigned
 Yizcor INT(2) unsigned
 PermanentPew INT(2) unsigned
 HighHolidays INT(2) unsigned
 Calendar INT(2) unsigned
 Maintenance INT(2) unsigned
 Activation VARCHAR(255)
 CreatedBy VARCHAR(255)
 CreatedOn DATETIME
 LastEdittedBy VARCHAR(255)
 LastEdittedOn DATETIME,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblVIP`;
Create Table `tblVIP` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 VIP_Code VARCHAR(1)
 VIP_Code_Description VARCHAR(20),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblYahrzeit_Deceased`;
Create Table `tblYahrzeit_Deceased` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Deceased_ID VARCHAR(4)
 Deceased_First_Name VARCHAR(27)
 Deceased_Last_Name VARCHAR(20)
 Deceased_SEX VARCHAR(1)
 Deceased_Hebrew_Name VARCHAR(32)
 Deceased_Hebrew_Father_Name VARCHAR(33)
 Deceased_Gregorian_DOD VARCHAR(10)
 Deceased_Dates_Inconsistant VARCHAR(1)
 Deceased_DOD_Hebrew_DOM VARCHAR(2)
 Deceased_DOD_Hebrew_Mon VARCHAR(2)
 Deceased_DOD_Hebrew_Year VARCHAR(4)
 Deceased_Plaque_Location VARCHAR(5)
 Deceased_Setup_Date DATETIME
 Deceased_Last_Update DATETIME
 Deceased_Status VARCHAR(1)
 Deceased_Plaque_Status VARCHAR(1),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)



DROP TABLE IF EXISTS `tblYahrzeit_Observers`;
Create Table `tblYahrzeit_Observers` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Oberver_ID VARCHAR(4)
 Observer_Title VARCHAR(5)
 Observer_Given_Name VARCHAR(27)
 Observer_Surname VARCHAR(20)
 Observer_Sex VARCHAR(1)
 Observer_Address_Street VARCHAR(36)
 Observer_Address_City VARCHAR(35)
 Observer_Address_State VARCHAR(2)
 Observer_Address_Zip VARCHAR(5)
 Observer_Setup_Date DATETIME
 Observer_Last_Update DATETIME
 Observer_Status VARCHAR(1),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)



DROP TABLE IF EXISTS `tblYahrzeit_Plaq`;
Create Table `tblYahrzeit_Plaq` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Relationship_Deceased_ID VARCHAR(4)
 Relationship_Observer_ID VARCHAR(4)
 Relationship_Deceased_2_Observer VARCHAR(25)
 Relationship_Setupdate VARCHAR(10)
 Relationship_Lastupdate VARCHAR(10)
 Relationship_Status VARCHAR(1),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblYahrzeit_Relationships`;
Create Table `tblYahrzeit_Relationships` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Relationship_Deceased_ID VARCHAR(4)
 Relationship_Observer_ID VARCHAR(4)
 Relationship_Deceased_2_Observer VARCHAR(25)
 Relationship_Setupdate DATETIME
 Relationship_Lastupdate DATETIME
 Relationship_Status VARCHAR(1),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblYahrzeit_Tablet`;
Create Table `tblYahrzeit_Tablet` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 Tablet_Tablet VARCHAR(2)
 Tablet_Column VARCHAR(1)
 Tablet_Lines VARCHAR(2)
 Tablet_Size_Width INT(2) unsigned
 Tablet_Size_Height INT(2) unsigned
 Tablet_Active INT(2) unsigned
 Tablet_Ordered INT(2) unsigned
 Tablet_Reserved INT(2) unsigned
 Tablet_Vacant INT(2) unsigned
 Table_Setup DATETIME
 Tablet_Last_Update DATETIME,
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


DROP TABLE IF EXISTS `tblZip_Code`;
Create Table `tblZip_Code` (
 id INT(10) unsigned NOT NULL AUTO_INCREMENT,
 ZipCode VARCHAR(5)
 Lat VARCHAR(50)
 Long VARCHAR(50)
 City VARCHAR(28)
 State VARCHAR(2)
 County VARCHAR(25)
 Type VARCHAR(23)
 Preferred VARCHAR(3)
 WorldRegion VARCHAR(2)
 Country VARCHAR(33)
 LocationVARCHAR( VARCHAR(32)
 Location VARCHAR(37)
 Population VARCHAR(6)
 HousingUnits VARCHAR(5)
 Income VARCHAR(6)
 LandArea VARCHAR(11)
 WaterArea VARCHAR(10)
 Decommisioned VARCHAR(3)
 MilitaryRestrictionCodes VARCHAR(55),
 created_at timestamp NULL DEFAULT NULL,
 updated_at timestamp NULL DEFAULT NULL
)


