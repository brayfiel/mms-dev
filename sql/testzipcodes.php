<?php
  $sql1 = "INSERT INTO zipcodes (zipcodes.ZipCode, zipcodes.Lat, zipcodes.Long, City, State, County, Type, Preferred, WorldRegion, Country, LocationText, Location,  Population, HousingUnits, Income, LandArea, WaterArea, Decommissioned, MilitaryRestrictionCodes, CreatedBy, CreatedOn, LastEdittedBy, LastEdittedOn) VALUES ";
  $sql2 = array(
    "x50001~41.363615~-93.414947~MILO~IA~WARREN~STANDARD~No~NA~US~Milo, IA~NA-US-IA-MILO~615~242~46875~29.829419~0.090144~No~~1~20190120~1~20190120",
    "x00603~18.448619~-67.134224~URB LAS AMERICAS~PR~AGUADILLA~STANDARD~No~NA~US~Urb Las Americas, PR~NA-US-PR-URB LAS AMERICAS~55530~21626~12423~30.383543~0.032116~No~~1~20190120~1~20190120",
    "x00603~18.448619~-67.134224~URB MALEZA GDNS~PR~AGUADILLA~STANDARD~No~NA~US~Urb Maleza Gdns, PR~NA-US-PR-URB MALEZA GDNS~55530~21626~12423~30.383543~0.032116~No~~1~20190120~1~20190120",
    "x00603~18.448619~-67.134224~URB MARBELLA~PR~AGUADILLA~STANDARD~No~NA~US~Urb Marbella, PR~NA-US-PR-URB MARBELLA~55530~21626~12423~30.383543~0.032116~No~~1~20190120~1~20190120",
    "x00603~18.448619~-67.134224~URB RETIRO~PR~AGUADILLA~STANDARD~No~NA~US~Urb Retiro, PR~NA-US-PR-URB RETIRO~55530~21626~12423~30.383543~0.032116~No~~1~20190120~1~20190120",
    "x00603~18.448619~-67.134224~URB RUBIANES~PR~AGUADILLA~STANDARD~No~NA~US~Urb Rubianes, PR~NA-US-PR-URB RUBIANES~55530~21626~12423~30.383543~0.032116~No~~1~20190120~1~20190120",
    "x00603~18.448619~-67.134224~URB SAN CARLOS~PR~AGUADILLA~STANDARD~No~NA~US~Urb San Carlos, PR~NA-US-PR-URB SAN CARLOS~55530~21626~12423~30.383543~0.032116~No~~1~20190120~1~20190120",
    "x00603~18.448619~-67.134224~URB SANTA ELENA~PR~AGUADILLA~STANDARD~No~NA~US~Urb Santa Elena, PR~NA-US-PR-URB SANTA ELENA~55530~21626~12423~30.383543~0.032116~No~~1~20190120~1~20190120",
    "x09845~~~APO~AE~~MILITARY~Yes~NA~US~~~~0~0~~~~~1~20190120~1~20190120"
  );

  $a[]=["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23"];
  $conn = new PDO('mysql:host=localhost;dbname=mms_dev', 'root', 'mischeif02', array(PDO::ATTR_PERSISTENT => false));
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  printf("Openned the zipcodes table\n");

  $sql = "DELETE FROM zipcodes";
  $conn->query($sql);

  printf("Deleted all records\n");

  $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
  $stmt = $conn->prepare(
    "INSERT INTO zipcodes (zipcodes.ZipCode, zipcodes.Lat, zipcodes.Long, zipcodes.City, zipcodes.State, zipcodes.County, " .
    "     zipcodes.Type, zipcodes.Preferred, zipcodes.WorldRegion, zipcodes.Country, zipcodes.LocationText, " .
    "     zipcodes.Location, zipcodes.Population, zipcodes.HousingUnits, zipcodes.Income, zipcodes.LandArea, " . 
    "     zipcodes.WaterArea, zipcodes.Decommissioned, zipcodes.MilitaryRestrictionCodes, " .
    "     zipcodes.CreatedBy, zipcodes.CreatedOn, zipcodes.LastEdittedBy, zipcodes.LastEdittedOn) " .
    "VALUES (:ZipCode, :Lat, :Long, :City, :State, :County, :Type, :Preferred, :WorldRegion, :Country, :LocationText, " .
    "     :Location, :Population, :HousingUnits, :Income, :LandArea, :WaterArea, :Decommissioned, :MilitaryRestrictionCodes, " .
    "     :CreatedBy, :CreatedOn, :LastEdittedBy, :LastEdittedOn)"
  );

  $ZipCode        = "";
  $Lat            = "";
  $Long           = "";
  $City           = "";
  $State          = "";
  $County         = "";
  $Type           = "";
  $Preferred      = "";
  $WorldRegion    = "";
  $Country        = "";
  $LocationText   = "";
  $Location       = "";
  $Population     = "";
  $HousingUnits   = "";
  $Income         = "";
  $LandArea       = ""; 
  $WaterArea      = "";
  $Decommissioned = "";
  $MilitaryRestrictionCodes = "";
  $CreatedBy      = 0;
  $CreatedOn      = "";
  $LastEdittedBy  = 0;
  $LastEdittedOn  = "";

  // $stmt->bindParam(':ZipCode', $ZipCode);
  // $stmt->bindParam(':Lat', $Lat);
  // $stmt->bindParam(':Long', $Long);
  // $stmt->bindParam(':City', $City);
  // $stmt->bindParam(':State', $State);
  // $stmt->bindParam(':County', $County);
  // $stmt->bindParam(':Type', $Type);
  // $stmt->bindParam(':Preferred', $Preferred); 
  // $stmt->bindParam(':WorldRegion', $WorldRegion);
  // $stmt->bindParam(':Country', $Country);
  // $stmt->bindParam(':LocationText', $LocationText);
  // $stmt->bindParam(':Location', $Location);
  // $stmt->bindParam(':Population', $Population);
  // $stmt->bindParam(':HousingUnits', $HousingUnits);
  // $stmt->bindParam(':Income', $Income);
  // $stmt->bindParam(':LandArea', $LandArea);
  // $stmt->bindParam(':WaterArea', $WaterArea);
  // $stmt->bindParam(':Decommissioned', $Decommissioned);
  // $stmt->bindParam(':MilitaryRestrictionCodes', $MilitaryRestrictionCodes);
  // $stmt->bindParam(':CreatedBy', $CreatedBy);
  // $stmt->bindParam(':CreatedOn', $CreatedOn);
  // $stmt->bindParam(':LastEdittedBy', $LastEdittedBy);
  // $stmt->bindParam(':LastEdittedOn', $LastEdittedOn);

  $stmt->bindParam(':ZipCode',                  strval($a[0]));
  $stmt->bindParam(':Lat',                      strval($a[1]));
  $stmt->bindParam(':Long',                     strval($a[2]));
  $stmt->bindParam(':City',                     strval($a[3]));
  $stmt->bindParam(':State',                    strval($a[4]));
  $stmt->bindParam(':County',                   strval($a[5]));
  $stmt->bindParam(':Type',                     strval($a[6]));
  $stmt->bindParam(':Preferred',                strval($a[7])); 
  $stmt->bindParam(':WorldRegion',              strval($a[8]));
  $stmt->bindParam(':Country',                  strval($a[9]));
  $stmt->bindParam(':LocationText',             strval($a[11]));
  $stmt->bindParam(':Location',                 strval($a[12]));
  $stmt->bindParam(':Population',               strval($a[13]));
  $stmt->bindParam(':HousingUnits',             strval($a[14]));
  $stmt->bindParam(':Income',                   strval($a[15]));
  $stmt->bindParam(':LandArea',                 strval($a[16]));
  $stmt->bindParam(':WaterArea',                strval($a[17]));
  $stmt->bindParam(':Decommissioned',           strval($a[18]));
  $stmt->bindParam(':MilitaryRestrictionCodes', strval($a[19]));
  $stmt->bindParam(':CreatedBy',                strval($a[20]));
  $stmt->bindParam(':CreatedOn',                strval($a[21]));
  $stmt->bindParam(':LastEdittedBy',            strval($a[22]));
  $stmt->bindParam(':LastEdittedOn',            strval($a[23]));

  $count = 0;
  foreach($sql2 as $data){
    $a = explode("~", $data);
    $ZipCode        = strval($a[0]);
    $Lat            = strval($a[1]);
    $Long           = strval($a[2]);
    $City           = strval($a[3]);
    $State          = strval($a[4]);
    $County         = strval($a[5]);
    $Type           = strval($a[6]);
    $Preferred      = strval($a[7]);
    $WorldRegion    = strval($a[8]);
    $Country        = strval($a[9]);
    $LocationText   = strval($a[10]);
    $$Location      = strval($a[11]);
    $Population     = strval($a[12]);
    $HousingUnits   = gettype($a[13]) == "string" ? $a[13] : sprintf('%u', $a[13]);
    $Income         = gettype($a[14]) == "string" ? $a[14] : sprintf('%u', $a[14]);
    $LandArea       = gettype($a[15]) == "string" ? $a[15] : sprintf('%u', $a[15]); 
    $WaterArea      = gettype($a[16]) == "string" ? $a[16] : sprintf('%u', $a[16]);
    $Decommissioned = gettype($a[17]) == "string" ? $a[17] : sprintf('%u', $a[17]);
    $MilitaryRestrictionCodes = gettype($a[18]) == "string" ? $a[18] : sprintf('%u', $a[18]);
    $CreatedBy      = gettype($a[19]) == "string" ? sprintf('%u', $a[19]) : $a[19];
    $CreatedOn      = gettype($a[20]) == "string" ? $a[20] : sprintf('%u', $a[20]);
    $LastEdittedBy  = gettype($a[21]) == "string" ? sprintf('%u', $a[21]) : $a[21];
    $LastEdittedOn  = gettype($a[22]) == "string" ? $a[22] : sprintf('%u', $a[22]);
    $count++;
    printf("%u, %s \n", $count, $ZipCode);
    //$stmt->execute();
  }
?>
