<?php
//session_start();
// Database Connection Class
include "Config.php";

class DatabaseConnection
{
    var $connection;
    var $db;

    static $uploadpathconfig = "http://impc1964:81/global1/uploads/";

    function __construct()
    {
        $this->connection = '';
        $this->db = '';
    }

    /**
     * It establishes connection to the database
     *
     *    It Take ipaddress,username,password and database name
     * @author Poovarasan Vasudevan
     * */
    function createConnection()
    {
        $this->connection = new mysqli("127.0.0.1", "root", 'poosan', "gas");
        if (!$this->connection->connect_error) {
            return $this->connection;
        } else
            echo "Connection Failed";
    }

    function autoCommitFalse()
    {
        $this->connection->autocommit(FALSE);
    }

    /*
     * updateData`(IN artefactType  VARCHAR(30), IN artefactCode VARCHAR(50),
                                                          IN attributeCode VARCHAR(50), IN attributeValue VARCHAR(9000))
     * */

    function commit()
    {
        $this->connection->commit();
    }


    function setQuery($query)
    {
        if ($result = mysqli_query($this->connection, $query)) {
            return $result;
        } else
            return 0;
    }

    function closeConnection()
    {
        mysqli_close($this->connection);
    }

    function getVersion()
    {
        $max = "";
        if ($result = mysqli_query($this->connection, 'Select valuedata as maximum from utils')) {
            while ($r = $result->fetch_assoc()) {
                $max = $r['maximum'];
            }
        }
        return $max;
    }

    function __destruct()
    {
        $connection = NULL;
        $db = NULL;
    }

    function setLoginAttempts($username)
    {
        mysqli_query($this->connection, "UPDATE user SET login_attempts = login_attempts + 1 WHERE AbhyasiID = '$username';");
    }

    function getLoginAttempts($username)
    {
        $max = "";
        if ($result = mysqli_query($this->connection, "Select login_attempts as maximum from user WHERE AbhyasiID = '$username'")) {
            while ($r = $result->fetch_assoc()) {
                $max = $r['maximum'];
            }
        }
        return $max;
    }

    function deactiveUser($username)
    {

        mysqli_query($this->connection, "UPDATE user SET ActiveStatus = 'off' WHERE AbhyasiID = '$username';");
    }


    function getMax()
    {
        $max = 0;
        if ($result = mysqli_query($this->connection, 'Select max(ArtefactPK) as maximum from artefact')) {
            while ($r = $result->fetch_assoc()) {
                $max = $r['maximum'];
            }
        }
        $max = $max + 1;
        return $max;
    }

    function getMediaUrl()
    {
        return "No Data";
    }

    function getParentChild($type)
    {
        $fullArray = array();
        if ($type == 'LBox') {
            array_push($fullArray, 'LBox', 'LFile', 'Letter');
        } elseif ($type == 'Audio') {
            array_push($fullArray, 'Audio', 'ATrack');

        } elseif ($type == 'Video') {
            array_push($fullArray, 'Video', 'VTrack');

        } elseif ($type == 'PhotoBox') {
            array_push($fullArray, 'PhotoBox', 'Photos');

        } elseif ($type == 'BBox') {
            array_push($fullArray, 'BBox', 'Book', 'Brochure', 'Souvenir');
        }

        for ($i = 0; $i < sizeof($fullArray); $i++) {

        }
    }

    function getParentType($type)
    {

        if ($type == 'LBox' || $type == 'LFile' || $type == 'Letter')
            return 'LBox';
        else if ($type == 'Audio' || $type == 'ATrack')
            return 'Audio';
        else if ($type == 'Video' || $type == 'VTrack')
            return 'Video';
        else if ($type == 'PhotoBox' || $type == 'Photos')
            return 'PhotoBox';
        else if ($type == 'BBox' || $type == 'Book' || $type == 'Brochure' || $type == 'Souvenir')
            return 'BBox';
    }

    function getFileType($type)
    {
        if ($type == 'LBox') {

        } elseif ($type == 'Audio') {

        } elseif ($type == 'Video') {

        } elseif ($type == 'PhotoBox') {

        } elseif ($type == 'BBox') {

        }
    }

    function is_url_exist($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($code == 200) {
            $status = true;
        } else {
            $status = false;
        }
        curl_close($ch);
        return $status;
    }

    function isChildAvailable($parent)
    {
        $max = 0;

        $sql = "Select count(*) as maximum from artefact WHERE ArtefactPID = '$parent'";

        if ($result = mysqli_query($this->connection, $sql)) {
            while ($r = $result->fetch_assoc()) {
                $max = $r['maximum'];
            }
        }
        return $max;
    }

    function getChildAvailable($parent)
    {
        $max = 0;

        $sql = "Select count(*) as maximum from artefact WHERE ArtefactPID = '$parent'";
        if ($result = mysqli_query($this->connection, $sql)) {
            while ($r = $result->fetch_assoc()) {
                $max = $r['maximum'];
            }
        }

        return $max + 1;
    }

    function moveArtefact($parent, $child)
    {
        $sql = "UPDATE artefact
                    SET ArtefactPID = '$parent'
                    WHERE ArtefactName = '$child'";

        if ($result = mysqli_query($this->connection, $sql)) {
            return true;
        } else {
            return false;
        }

    }

    function getAttr1($attributeCode)
    {

        $max = "";
        $sql = "SELECT Attributes FROM attributes WHERE AttributeCode = '$attributeCode'";

        // echo $sql;
        if ($result = mysqli_query($this->connection, $sql)) {
            while ($r = $result->fetch_assoc()) {
                $max = $r['Attributes'];

                //echo $max.'--';
            }
        }
        return $max;
    }

    function updateuploadeddata($artefactcode, $imagefilepath, $artefacttype, $attributecode, $user, $type)
    {
        $attributeColValue = $this->getAttr1($attributecode);
        $tablename = $artefacttype . "Attributes";

        $imagev = self::$uploadpathconfig . "" . $artefacttype . "/" . $imagefilepath;
        $sql = "update $tablename set `$attributeColValue` = 'true' WHERE artefactcode = '$artefactcode'";
        $sql1 = "insert into uploads(`id`,`artefactcode`,`filepath`,`type`,`uploadedby`) VALUES (NULL,'$artefactcode','$imagev','$type','$user')";

        echo $sql;
        echo $sql1;

        if (mysqli_query($this->connection, $sql) && mysqli_query($this->connection, $sql1)) {
            return true;
        } else {
            return false;
        }
    }

    function updateData($artefactType, $artefactCode, $attributeCode, $attributeValue)
    {
        $tablename = $artefactType . 'Attributes';
        $attribute = $this->getAttr1($attributeCode);

        // echo $attribute;

        $sql = "update $tablename set `$attribute` = '$attributeValue' WHERE  artefactcode = '$artefactCode'";

        echo $sql . ";<br/>";
        mysqli_query($this->connection, "SET SQL_SAFE_UPDATES = 0");
        mysqli_query($this->connection, $sql);

    }

    function getUploads($artefactcode)
    {
        $sql = "select * from uploads WHERE artefactcode = '$artefactcode'";
        $result1 = array();

        $result = mysqli_query($this->connection, $sql);
        if ($result->num_rows > 0) {
            while ($r = $result->fetch_assoc()) {
                $result1[] = $r;
            }
            return $result1;
        } else {
            return "NO";
        }
    }

    function getMaxUploads($artefactcode)
    {
        $max = 0;
        if ($result = mysqli_query($this->connection, "Select COUNT (*) as maximum from uploads WHERE artefactcode ='$artefactcode'")) {
            while ($r = $result->fetch_assoc()) {
                $max = $r['maximum'];
            }
        }
        return $max;
    }

    function getMaxAttributeValue()
    {
        $max = 0;
        if ($result = mysqli_query($this->connection, 'Select max(attributeValuePK) as maximum from attributevalue')) {
            while ($r = $result->fetch_assoc()) {
                $max = $r['maximum'];
            }
        }
        $max = $max + 1;
        return $max;
    }

    function getMaxCICO()
    {
        $max = 0;
        if ($result = mysqli_query($this->connection, 'Select max(CICOSK) as maximum from artefactcico')) {
            while ($r = $result->fetch_assoc()) {
                $max = $r['maximum'];
            }
        }
        $max = $max + 1;
        return $max;
    }

    function getMaxArtefactCode()
    {
        $max = 0;
        if ($result = mysqli_query($this->connection, 'select max(artefactcode*1) as maximum from artefact;')) {
            while ($r = $result->fetch_assoc()) {
                $max = $r['maximum'];
            }
        }
        $max = $max + 1;
        return $max;
    }


    /**
     * These function attributes and table has to change after database migration
     *
     * */
    function getArtefactCount($loc, $artefactType)
    {
        $max = 0;
        $sql = "SELECT count(*) as maximum FROM " . $artefactType . "attributes where visiblestatus='on'";
        if ($result = mysqli_query($this->connection, $sql)) {
            while ($r = $result->fetch_assoc()) {
                $max = $r['maximum'];
            }
        }
        return $max;
    }


    function getFilePath($artefactCode, $artefactType)
    {
        $sql = "select `FilePath` as FilePath from " . $artefactType . "Attributes where artefactCode = $artefactCode";
        $filePath = 'No';
        if ($result = mysqli_query($this->connection, $sql)) {
            while ($res = $result->fetch_assoc()) {
                $filePath = $res['FilePath'];
            }
        }

        return $filePath;
    }

    /**
     * End of changes after database migration
     *
     * */

    function getPages($user)
    {
        $sql = "		select p.menutitle,p.url,p.dir from page p
					inner join role_page_mapping rp
					on p.pagepk=rp.pagefk
					inner join role r
					on rp.rolefk=r.rolepk
					inner join user u
					on u.rolefk=r.rolepk					
					where u.UserPk='$user' union select menutitle,url,dir from page
					where iscommon='y'";

        $pages = array();

        if ($result = mysqli_query($this->connection, $sql)) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $pages[] = $row;
                }
            }
        }
        return $pages;
    }

    function getArtefactCode($attributepk)
    {
        $code = "";
        $sql = "select ArtefactCode from attributevalue where AttributeValuePK='$attributepk'";
        if ($result = mysqli_query($this->connection, $sql)) {
            while ($res = $result->fetch_assoc()) {
                $code = $res['ArtefactCode'];
            }
        }
        return $code;
    }

    function getAlistArray($alistcode)
    {

        $sql = "SELECT AlistValue FROM attributelist WHERE AlistCode='$alistcode'";
        $code = array();

        if ($result = mysqli_query($this->connection, $sql)) {
            while ($res = $result->fetch_assoc()) {
                $code[] = $res;
            }
        }
        return $code;

    }

    function getTitle($code)
    {
        $code = "";
        $sql = "select attributes from attributes where AttributeCode=(select AttributeCode from attributevalue where AttributeValuePK='$code')";
        if ($result = mysqli_query($this->connection, $sql)) {
            while ($res = $result->fetch_assoc()) {
                $code = $res['attributes'];
            }
        }
        return $code;

    }


    function getAttributeCode($artefactTitle, $attributeTitle)
    {
        $code = "";
        $sql = "SELECT AttributeCode FROM attributes where Attributes='$attributeTitle' and ArtefactTypeCode='$artefactTitle'";
        //echo $sql;
        if ($result = mysqli_query($this->connection, $sql)) {
            while ($res = $result->fetch_assoc()) {
                $code = $res['AttributeCode'];
            }
        }
        return $code;
    }


    function getAttributes($listcode, $artefacttype)
    {
        $sql = "SELECT Attributes FROM attributes where AListCode='$listcode' and ArtefactTypeCode='$artefacttype'";
        $code = "";

        if ($result = mysqli_query($this->connection, $sql)) {
            while ($res = $result->fetch_assoc()) {
                $code = $res['AttributeCode'];
            }
        }
        return $code;

    }

    function getArtefactNamePK($artefactCode)
    {
        $code = "";
        $sql = "select ArtefactName from artefact where ArtefactCode='$artefactCode'";
        if ($result = mysqli_query($this->connection, $sql)) {
            while ($res = $result->fetch_assoc()) {
                $code = $res['ArtefactName'];
            }
        }
        return $code;
    }


    function getAllArtefatct()
    {
        $artefactArray = array();
        $sql = "Select ArtefactTypeCode, ArtefactTypeDescription
							from artefacttype
							Where ArtefactTypePID is NULL";
        if ($result = mysqli_query($this->connection, $sql)) {
            while ($res = $result->fetch_assoc()) {
                $artefactArray[] = $res;
            }
        }


        return $artefactArray;

    }


    function getAttrValue($attr, $type)
    {
        $code = "";
        $sql = "select alistcode from attributes where attributes='$attr' and artefacttypecode='$type'";
        if ($result = mysqli_query($this->connection, $sql)) {
            while ($res = $result->fetch_assoc()) {
                $code = $res['alistcode'];
            }
        }
        return $code;
    }

    function getAllUser()
    {
        $sql = "select * from `user`";
        $result = mysqli_query($this->connection, $sql);

        $row = array();
        while ($r = $result->fetch_assoc()) {
            $row[] = $r;
        }

        return json_encode($row);
    }
}

?>