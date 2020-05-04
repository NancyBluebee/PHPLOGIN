
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <style>
    
        table{
            width:300px;
            margin:20px auto;
            border:1px solid #999;
            box-shadow:1px 1px 5px #ccc;
            border-collapse:collapse;
        }
        td{
            padding:10px 5px;
            border:1px solid #ccc;
            font-size:18px;
        }
        td input{
            font-size:18px;
            padding:5px;
        }

    </style>
</head>
<body>
<form action="chklogin.php" method="post">
    <table>
        <tr>
            <td colspan="2">
                <?php
                  if(isset($_GET['status'])){
                      switch($_GET['status']){
                          case 'false':
                            echo "帳號密碼錯誤";
                          break;
                          case 'true':
                            echo "get=".$_GET['id'];
                            header("location:list_user.php?id=".$_GET['id']);
                          break;
                      }
                  }      

                ?>
            </td>
        </tr>
        <tr>
            <td>帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td><input type="submit" value="登入"></td>
            <td><input type="reset" value="重置"></td>
        </tr>
    </table>
    </form>    
</body>
</html>