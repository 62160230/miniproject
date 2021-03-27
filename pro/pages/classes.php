<link rel="stylesheet" type="text/css" href="home.css">
<?php
    class user{
        private $UserID,$UserName,$UserMail,$UserPassword;

        public function getUserID(){
            return $this->UserID;
        }

        public function setUserID($UserID){
            $this->UserID=$UserID;
        }

        public function getUserName(){
            return $this->UserName;
        }

        public function setUserName($UserName){
            $this->UserName=$UserName;
        }

        public function getUserMail(){
            return $this->UserMail;
        }

        public function setUserMail($UserMail){
            $this->UserMail=$UserMail;
        }

        public function getUserPassword(){
            return $this->UserPassword;
        }

        public function setUserPassword($UserPassword){
            $this->UserPassword=$UserPassword;
        }

        public function InsertUser(){
            include "conn.php";
            $req=$db->prepare("INSERT INTO users(UserName,UserMail,UserPassword) VALUES(:UserName, :UserMail, :UserPassword)");
    
            $req->execute(array(
                'UserName'=> $this->getUserName(),
                'UserMail'=> $this->getUserMail(),
                'UserPassword' => $this->getUserPassword()
            ));
        }

        public function Userlogin(){
            include "conn.php";
            $req=$db->prepare("SELECT * FROM users WHERE UserMail=:UserMail AND UserPassword=:UserPassword");
    
            $req->execute(array(
                'UserMail' => $this->getUserMail(),
                'UserPassword' => $this->getUserPassword()
            ));
            if ($req->rowCount()==0){
                header("Location:index.php?error=1");
                return false;
            }else{
                while($data=$req->fetch()){
                    $this->setUserId($data['UserID']);
                    $this->setUserName($data['UserName']);
                    $this->setUserPassword($data['UserPassword']);
                    $this->setUserMail($data['USerMail']);
                    header("Location:Home.php");
                    return true;
                }
            }
        }
    
    }

    class chat{
        private $ChatID,$ChatUserID,$ChatText;

        public function getChatID(){
            return $this->ChatID;
        }
    
        public function setChatID($ChatID){
            $this->ChatID=$ChatID;
        }

        public function getChatUserID(){
            return $this->ChatUserID;
        }
    
        public function setChatUserID($ChatUserID){
            $this->ChatUserID=$ChatUserID;
        }

        public function getChatText(){
            return $this->ChatText;
        }   
    
        public function setChatText($ChatText){
            $this->ChatText=$ChatText;
        }

        public function InsertChatMessage(){
            include "conn.php";
            $req=$db->prepare("INSERT INTO chats(ChatUserID,ChatText) VALUES (:ChatUserID,:ChatText)");
            $req->execute(array(
                'ChatUserID'=>$this->getChatUserID(),
                'ChatText'=>$this->getChatText()
            ));
        }

        public function DisplayMessage(){
            include "conn.php";
            $ChatReq=$db->prepare("SELECT * FROM chats ORDER BY ChatID");
            $ChatReq->execute();

            while($DataChat=$ChatReq->fetch()){
                $UserReq=$db->prepare("SELECT * FROM users WHERE UserID=:UserID");
                $UserReq->execute(array(
                    'UserID'=>$DataChat['ChatUserID']
                ));
                $DataUser=$UserReq->fetch();
                ?>
                <span class="UserNameS"><?php echo $DataUser['UserName'] ; ?></span><strong style="color: yellow;"> Says</strong><br>
                <span class="UserMessageS" style="color: red; background-color: #f1f1f1; border-radius: 5px; padding: 1.5px; margin: 10px; border: 2px solid #dedede;"><?php echo $DataChat['ChatText']; ?></span><br><br>

                <?php
            }
        }
    }

    
?>

