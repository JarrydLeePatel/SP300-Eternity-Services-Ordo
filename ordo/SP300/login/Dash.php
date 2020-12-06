<?php 



    define('TITLE',"Dashboard - Eternity Service");
    include 'includes/header2.php';

    
    if(!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    
<link href="dash.css" rel="stylesheet" type="text/css">
<title>Eternity Services</title>
</head>

<body>
	
    
    
	<!--top half fixed logo, name and search-->
    <link href="dash.css" rel="stylesheet" type="text/css">
    

            <!---NAVIGATION--->
	<div class="Topfix"> 
		<a href="Dash.php" alt="dash"><img src="../Images/logo ES.png" alt="logo"></a>
       
	</div>
	<!--bottom half -->
	<div class="bHalf">
		<!--top half fixed Naveigation-->
		<div class="lFix">
			
            <div class="llFix">
            <button id="profile" title="profile">
                <a href="profile.php" alt="profile">
                <img src=<?php echo "./uploads/".$_SESSION['userImg']; ?> alt="profile img">
                </a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Profile</p></span>
            </button>
            </div>
                             
            
            
                        
			<button id="home" title="dashboard / home">
                <a href="Dash.php" alt="dash">
                <img src="../Images/home button.png" alt=" home img"><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Dash</p></span>
                </a>
            </button>
            
			<button id="upload" title="upload"><a href="projects.php"><img src="../Images/upload button.png" alt="upload img"></a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Upload</p></span></button>
            
			<button id="help" title="help"><a href="help.php"><img src="../Images/help button.png" alt="help img"></a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Help</p></span></button>
            
              
            <button id="logout" title="logout">
                <a href="includes/logout.inc.php" class="button login"><img src="../Images/logOut.png" alt="logOut"></a>
            <span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Logout</p></span>
            </button>
            
		</div>
           <!---End NAVIGATION--->
        
        
        
        
        
        <!--Dashboard half and displayed content-->
		<div class="rhlaf" style="background-image: url('../Images/pans2.jpg'); background-repeat: no-repeat; background-position:85% 82%;">
            
			<div class="content">
                
                <!--Dropbox btn--->
                <a href="dropbox.php">	<button id="pr" onClick="location.href = " title="Go to your drop box">DROPBOX</button> </a>
      
                <!--Upload btn--->
                <button id="ul" onClick="location.href ='projects.php'" title="Upload documents and files">UPLOAD</button>
                
                <!--Search btn--->
                <a href="search.php"><button id="sr" onClick="location.href =''" title="Search through past projects and files">SEARCH</button></a>
                
                <!--Add user btn--->
                
                <a href="logout.php"> <button id="ad" onClick="location.href =''" title="Add new uesers to the system">ADD USER</button></a> 
				
				<!--client btn--->
                <a href="ClientList.php"> <button id="cb" onClick="location.href =''" title="Look at past clients">CLIENT LIST</button></a> 
				
				<!--cantact form mail list-->
				<a href="cantactList.php"> <button id="ml" onClick="location.href =''" title="Conact form from users">CONTACTS</button></a> 
                
               
            
			</div>
		</div>
	</div>
 
    
    
</body>
    
</html>

