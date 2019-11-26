Set-PSDebug -Off
Clear-Host
$originalTitle = $host.ui.RawUI.WindowTitle
$host.ui.RawUI.WindowTitle = "Restore of MYSQL Databases"

$database="mms_dev"
$sql="ZipCodeLoad.sql"

$now = Get-Date -Format g
Write-Host '>>>>>>>>>>>>>>>>>>>>>     <<<<<<<<<<<<<<<<<<<<<'
Write-Host '>>>>> Loading List of Zip Codes To ' $database
Write-Host '>>>>> ' $now
Write-Host '>>>>>>>>>>>>>>>>>>>>>     <<<<<<<<<<<<<<<<<<<<<'

#----------------------------------------------------------------
Write-Host '>>>>> Loading database: ' $database
Write-Host '        Using datafile: ' ZipCodeLoad1.sql
#----------------------------------------------------------------
Get-Content ZipCodeLoad1.sql | mysql -D --max_allowed_packet=1073741824  $database -u root -pmischeif02

#----------------------------------------------------------------
Write-Host '>>>>> Loading database: ' $database
Write-Host '        Using datafile: ' ZipCodeLoad2.sql
#----------------------------------------------------------------
Get-Content ZipCodeLoad2.sql | mysql -D --max_allowed_packet=1073741824  $database -u root -pmischeif02

#----------------------------------------------------------------
Write-Host '>>>>> Loading database: ' $database
Write-Host '        Using datafile: ' ZipCodeLoad3.sql
#----------------------------------------------------------------
Get-Content ZipCodeLoad3.sql | mysql -D --max_allowed_packet=1073741824  $database -u root -pmischeif02

#----------------------------------------------------------------
Write-Host '>>>>> Loading database: ' $database
Write-Host '        Using datafile: ' ZipCodeLoad4.sql
#----------------------------------------------------------------
Get-Content ZipCodeLoad4.sql | mysql -D --max_allowed_packet=1073741824  $database -u root -pmischeif02

#----------------------------------------------------------------
Write-Host '>>>>> Loading database: ' $database
Write-Host '        Using datafile: ' ZipCodeLoad5.sql
#----------------------------------------------------------------
Get-Content ZipCodeLoad5.sql | mysql -D --max_allowed_packet=1073741824  $database -u root -pmischeif02

#----------------------------------------------------------------
Write-Host '>>>>> Loading database: ' $database
Write-Host '        Using datafile: ' ZipCodeLoad6.sql
#----------------------------------------------------------------
Get-Content ZipCodeLoad6.sql | mysql -D --max_allowed_packet=1073741824  $database -u root -pmischeif02

#----------------------------------------------------------------
Write-Host '>>>>> Loading database: ' $database
Write-Host '        Using datafile: ' ZipCodeLoad7.sql
#----------------------------------------------------------------
Get-Content ZipCodeLoad7.sql | mysql -D --max_allowed_packet=1073741824  $database -u root -pmischeif02

#----------------------------------------------------------------
Write-Host '>>>>> Loading database: ' $database
Write-Host '        Using datafile: ' ZipCodeLoad8.sql
#----------------------------------------------------------------
Get-Content ZipCodeLoad8.sql | mysql -D --max_allowed_packet=1073741824  $database -u root -pmischeif02

#----------------------------------------------------------------
Write-Host '>>>>> Loading database: ' $database
Write-Host '        Using datafile: ' ZipCodeLoad9.sql
#----------------------------------------------------------------
Get-Content ZipCodeLoad9.sql | mysql -D --max_allowed_packet=1073741824  $database -u root -pmischeif02

$now = Get-Date -Format g
Write-Host '>>>>> Script finished ' $now
Write-Host '>>>>>>>>>>>>>>>>>>>>     <<<<<<<<<<<<<<<<<<<<'
$host.ui.RawUI.WindowTitle = $originalTitle
