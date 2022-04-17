<?php

class Felhasznalo
{
    private int $id;
    private string $email;
    private string $pswd;
    private string $firstname;
    private string $lastname;
    private string $birthdate;
    private string $reg_date;
    private string $about;
    private string $pfp;

    /**
     * @param int $id
     * @param string $email
     * @param string $pswd
     * @param string $firstname
     * @param string $lastname
     * @param string $birthdate
     * @param string $reg_date
     * @param string $about
     * @param string $pfp
     */
    public function __construct(int $id, string $email, string $pswd, string $firstname, string $lastname, string $birthdate, string $reg_date, string $about, string $pfp)
    {
        $this->id = $id;
        $this->email = $email;
        $this->pswd = $pswd;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birthdate = $birthdate;
        $this->reg_date = $reg_date;
        $this->about = $about;
        $this->pfp = $pfp;
    }

    public function addfavorite($performername)
    {
        include("./includes/connection.php");
        $idd = $this->getId();
        $sql = "SELECT favorites FROM users WHERE id='$idd';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $kedvencek = $row["favorites"];
        }
        $kedvencek_uj = $kedvencek . "," . $performername;
        $sql = "UPDATE users SET favorites='$kedvencek_uj' WHERE id='$idd'";
        if ($conn->query($sql) === TRUE) {
        } else {
        }
        $conn->close();
    }

    public function deletefavorite($performername)
    {
        include("./includes/connection.php");
        $idd = $this->getId();
        $sql = "SELECT favorites FROM users WHERE id='$idd';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $kedvencek = $row["favorites"];
        }
        $favorites_split = explode(",", $kedvencek);
        $tmp = null;
        $wasfirst = 0;
        for ($i = 0; $i < count($favorites_split); $i++) {
            if (strcmp($favorites_split[$i], $performername) !== 0) {
                if ($i == 0) {
                    $tmp = $tmp . $favorites_split[$i];

                } else {
                    if ($wasfirst == 1) {
                        $tmp = $tmp . $favorites_split[$i];
                        $wasfirst = 0;
                    } else {
                        $tmp = $tmp . "," . $favorites_split[$i];
                    }
                }
            } else {
                if ($i == 0) {
                    $wasfirst = 1;
                }
            }
        }
        $kedvencek = $tmp;
        $sql = "UPDATE users SET favorites='$kedvencek' WHERE id='$idd'";
        if ($conn->query($sql) === TRUE) {
        } else {
        }
        $conn->close();
    }

    public function isfavorite($performername)
    {
        $tmp = 0;
        include("./includes/connection.php");
        $idd = $this->getId();
        $sql = "SELECT favorites FROM users WHERE id='$idd';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $kedvencek = $row["favorites"];
        }
        $favorites_split = explode(",", $kedvencek);

        for ($i = 0; $i < count($favorites_split); $i++) {
            if (strcmp($favorites_split[$i], $performername) !== 0) {

            } else {
                $tmp = 1;
            }
        }
        return $tmp;
    }

    /**
     * @param int $id
     * @param string $email
     * @param string $pswd
     * @param string $firstname
     * @param string $lastname
     * @param string $birthdate
     * @param string $reg_date
     * @param string $about
     * @param string $pfp
     * @param string $favorites
     */


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPswd(): string
    {
        return $this->pswd;
    }

    /**
     * @param string $pswd
     */
    public function setPswd(string $pswd): void
    {
        $this->pswd = $pswd;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @param string $birthdate
     */
    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return string
     */
    public function getRegDate(): string
    {
        return $this->reg_date;
    }

    /**
     * @param string $reg_date
     */
    public function setRegDate(string $reg_date): void
    {
        $this->reg_date = $reg_date;
    }

    /**
     * @return string
     */
    public function getAbout(): string
    {
        return $this->about;
    }

    /**
     * @param string $about
     */
    public function setAbout(string $about): void
    {
        $this->about = $about;
    }

    /**
     * @return string
     */
    public function getPfp(): string
    {
        return $this->pfp;
    }

    /**
     * @param string $pfp
     */
    public function setPfp(string $pfp): void
    {
        $this->pfp = $pfp;
    }

}