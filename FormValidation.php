<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <style>
        .resultado{
            max-width:400px;
            margin-top: 30px;
            margin-left: 30px;
        }
        .datos-resultado{
            width:100%;
            background-color:#dbf3db;
            color: #528563;
            padding:10px;
            margin-top:10px;
        }

        table { 
            border-spacing: 25px;
            border-collapse: separate;
        }

        label{
            font-size:20px;
        }
    </style>
</head>

<body>
    <?php
    if((!isset($_POST['submit']))){
        $name = '';
        $age = '';
        $checkA = 'checked';
        $checkB = '';
        $checkC = '';
        
        $selectedA = '';
        $selectedB = '';
        $selectedC = '';
    
        $selectS = array('','','','','');
        $subjects = array();
    }else{
        $name = isset($_REQUEST["name"])?$_REQUEST["name"]:'';
        $age = isset($_REQUEST["age"])?$_REQUEST["age"]:0;
        $group = isset($_REQUEST["group"])?$_REQUEST["group"]:'' ;
        $subjects = isset($_REQUEST["subject"])?$_REQUEST["subject"]:array();
        
        switch ($group) {
            case 'A':
                $checkA = 'checked';
                $checkB = '';
                $checkC = '';
                break;
            case 'B':
                $checkA = '';
                $checkB = 'checked';
                $checkC = '';
                break;
        
            
            default:
                $checkA = '';
                $checkB = '';
                $checkC = 'checked';
                break;
        }

        switch ($age) {
            case 14:
                $selectedA = 'selected';
                $selectedB = '';
                $selectedC = '';
                break;
            case 15:
                $selectedA = '';
                $selectedB = 'selected';
                $selectedC = '';
                break;
            case 16:
                $selectedA = '';
                $selectedB = '';
                $selectedC = 'selected';
                break;
            
            default:
                $selectedA = '';
                $selectedB = '';
                $selectedC = '';
              
                break;
        }
    }
    $selectS = array('','','','','');
    if ($subjects != ''){
        foreach ($subjects as $subject){
            if(substr($subject, 0, 3) == "Mat") {
                $selectS[0]="checked";
            }
            else if(substr($subject, 0, 3) == "Eng"){
                $selectS[1]="checked";
            }
            else if(substr($subject, 0, 3) == "His"){
                $selectS[2]="checked";
            }
            else if(substr($subject, 0, 3) == "Bio"){
                $selectS[3]="checked";
            }
            else if(substr($subject, 0, 3) == "Spa"){
                $selectS[4]="checked";
            }
        }
    }
    

    ?>
    <div class='contenedor'>
        <h1>Form test</h1>
        <form action="FormValidation.php" method="post">
            <table>
                <tr>
                    <td><label for="name">Name: </label><hr></td>
                    <td><input type="text" name="name" value="<?php echo $name?>" /></td>
                    <td>
                        <?php
                            if(trim($name) == ''){
                                print("<b>The name cant be empty!</b>");

                            } 
                           
                        ?>
                    </td>
                </tr>
            
                <tr>
                    <td><label for="age">Age: </label><hr></td>
                    <td><select name="age" value="<?php echo $age?>">
                        <option value="0">Select an age</option>
                        <option value="14" <?php echo $selectedA?>>14</option>
                        <br><option value="15" <?php echo $selectedB?>>15</option>
                        <br><option value="16" <?php echo $selectedC?>>16</option>
                    </select></td>
                    <td>
                    <?php
                        if($age == 0){
                            print("<b>You need select an age!!</b>");
                        }
                    
                    ?>
                    </td>
                </tr>

                <tr>
                    <td><label for="group">Group: </label><hr></td>
                    <td>
                        <input type="radio" name="group" value="A" <?php echo $checkA?>>3º ESO A
                        <br><input type="radio" name="group" value="B" <?php echo $checkB?>>3º ESO B
                        <br><input type="radio" name="group" value="C" <?php echo $checkC?>>3º ESO C
                    </td>
                    <td>
                    </td>
                </tr>

                <tr>
                    <td><label for="subject[]">My favorite subjects: </label><hr></td>
                    <td>
                    <input type="checkbox" name="subject[]" value="Math" <?php echo $selectS[0]?>>Math
                    <input type="checkbox" name="subject[]" value="English" <?php echo $selectS[1]?>>English
                    <input type="checkbox" name="subject[]" value="History" <?php echo $selectS[2]?>>History
                    <input type="checkbox" name="subject[]" value="Biology" <?php echo $selectS[3]?>>Biology
                    <input type="checkbox" name="subject[]" value="Spanish" <?php echo $selectS[4]?>>Spanish
                    </td>
                    <td>
                    <?php
                        
                        if(empty($subjects)){
                            print("<b>Select any favorite subject!</b>");
                        }
                     
                    ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Sign in" /></td>
                </tr>
            </table>
           
        </form>
    </div>

    <?php
        if(isset($_POST['submit'])){
            
            if(!empty($_REQUEST["subject"]) && trim($name) != '' && $age !=0 ){
                    print("<div class='resultado'>");
                    print("<div class='datos-resultado'>Name: ".$name."</div>");
                    print("<div class='datos-resultado'>Age: ".$age."</div>");
                    print("<div class='datos-resultado'>Group: ".$group."</div>");
                    print("<div class='datos-resultado'>Favorite Subjects: ");
                    $subject_show='';
                    foreach ($subjects as $subject){
                        $subject_show= $subject_show."$subject, ";
                    }
                    print(substr($subject_show, 0, -2));
                    print("</div><br>");
                    print("<div class='datos-resultado'><b>Success!</b> Everything has been sent correctly.</div>");
                    print("<div>");
                    
                }          
        }
        
    ?>

</body>

</html>