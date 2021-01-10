<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>    	
	<?php	
		require('modules/head.php');
	?>        
</head>
	
<body>
    
	<?php
		require('modules/navbar.php');		
	?>
      
  	<div class="container">
    
    	<!-- Image slider -->
    	<div class="row" id="image-slider">
        
        	<div class="col-xs-12 col-sm-10 col-sm-offset-0">
       			<div id="carousel" class="carousel slide" data-ride="carousel">
                                                 
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="images/android1.5.jpg" alt="...">
                    </div>
                    <div class="item">
                      <img src="images/android1.6.jpg" alt="...">
                    </div>
                    <div class="item">
                      <img src="images/android2.0.jpg" alt="...">
                    </div>                    
                    <div class="item">
                      <img src="images/android2.2.jpg" alt="...">
                    </div>
                    <div class="item">
                      <img src="images/android2.3.jpg" alt="...">
                    </div>
                    <div class="item">
                      <img src="images/android3.0.jpg" alt="...">
                    </div>                    
                    <div class="item">
                      <img src="images/android4.0.jpg" alt="...">
                    </div>
                    <div class="item">
                      <img src="images/android4.3.jpg" alt="...">
                    </div>
                    <div class="item">
                      <img src="images/android4.4.jpg" alt="...">
                    </div>
                    <div class="item">
                      <img src="images/android4.5.jpg" alt="...">
                    </div>
                    <div class="item">
                      <img src="images/android6.jpg" alt="...">
                    </div>
                  </div>
 
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                  
        		</div> <!-- Carousel -->
            </div>
            
            <div class="col-xs-12 col-sm-2" id="ses">
            	<div class="well well-lg">
                	<h5>
                		<span class="glyphicon glyphicon-user"></span>User Portal
                    </h5>
                	<span id="sess">
                    	<?php             
							if(isset($_SESSION['username']))
							{
								echo "Welcome: ".$_SESSION['username'];
                        ?>
			<div id="sess1">
							<?php
			require('dbconnect.php');
			$username=$_SESSION['username'];
							if(isset($_SESSION['username']))
			{
							
				
				$sql = sprintf("SELECT * FROM `registration` WHERE username= '%s'",mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $username));
				//$query=mysql_query($sql);
				$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
				if($result === FALSE) {
                   die(mysqli_error($GLOBALS["___mysqli_ston"])); // TODO: better error handling
                        }
				$row1=mysqli_fetch_array($result);
                    $name=$row1['photoext'];
					if($name=='noimage')
					   $username ='noimage.jpg';
					else {
						$username .=$name;
					}
					

                   

			?><img src="pictures/thumb/<?php echo $username ;}?>" alt ="image"/>
			</div>
                        		</span>
                                <span class="btn btn-xs">
                                    <button type="button" class="btn btn-primary" id="logout">Log out</button>
                                </span>
                     	<?php 
					  		} 		
							else 
					  		{ 
						?>
                      			<p>No Active Login</p>
                     	<?php 
							} 
					 	?>
                 	</span>
				</div>                           	
            </div>  
            
               	
     	</div>
        <!-- End of image slider -->
 	<br>		
        <div class="row">
        	<div class="col-xs-12">
            	
                	
     	<div id="scroller">
				<span id="static-text">Android Tutorial</span>
				<div class="scrollingtext">
					<span class="review"> <span class="message"> <a href="#"> 'A Practical approach'</a> </span> - <span class="forename"> 'Developed by Navin K'</span>, <span class="location">SRM University-IT department</span> </span>
					<span class="review"> <span class="message"> <a href="http://navinsandroidtutorial.blogspot.in/">'Navin's AndroidTutorial'</a> </span> - <span class="forename">Dedicated to aspiring students</span>, <span class="location">Covers basic as well as advanced concepts</span> </span>

				</div>
			

			</div>
            
            </div>           
        </div>
        
        <div class="row">
        	<br>
        	
            <!-- Left navbar -->
            <div class="col-sm-2">
            	
                <a href="#" class="list-group-item active">
                   <h3>
                   		Basics
                   </h3>
<a href="http://navinsandroidtutorial.blogspot.in/2015/07/migrating-to-android-studio-from-eclipse.html" class="list-group-item">Migrating from eclipse to Android Studio</a>

                </a>
                <a href="http://navinsandroidtutorial.blogspot.in/2013/02/fragments-and-its-usage.html" class="list-group-item">Fragments and Its Usage</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/activities.html" class="list-group-item">Activities and LifeCycle</a>       	
            	<a href="http://navinsandroidtutorial.blogspot.in/2012/09/ui-dialog.html" class="list-group-item">Dialog Window and DialogFragment</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/data-storage-sqlite-database.html" class="list-group-item">Data Storage-SQLite Database</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/data-storage-sd-card-file-handling.html" class="list-group-item">Data storage-SD Card File handling</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/data-storage-shared-preferences.html" class="list-group-item">Data storage -Shared preferences</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/ui-layout.html" class="list-group-item">UI Layout Tutorial</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/grid-views.html" class="list-group-item">Grid Views</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/spinner-view.html" class="list-group-item">Spinner View</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/gallery-and-imageview-views.html" class="list-group-item">ViewPager</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/imageswitcher-view.html" class="list-group-item">Gallery,Imageview and ImageSwitcher View</a> 
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/web-views-and-some-additional-views.html" class="list-group-item">Web View</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/temp.html" class="list-group-item">Menus and Action Bar</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/list-views.html" class="list-group-item">List Views</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/ui-components.html" class="list-group-item">UI Basic Views,Progressbar and Picker views</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/09/intent-and-intentfilter-tutorial.html" class="list-group-item">Intent and IntentFilter</a>
                <a href="http://navinsandroidtutorial.blogspot.in/2012/06/broadcast-receiver-tutorial.html" class="list-group-item">Broadcast Receiver</a>                			
            
            </div>
            <!-- ./Left navbar -->
            
            
            <div class="col-sm-8">
            	
                <h1 class="page-header">
                	Mobile Application Trends
                </h1>
				
                <p>
                	<strong>Mobile Application trends</strong> 
                    By the end of 2013, mobile phones have overtaken PCs as the most common way to access the internet, according to research company Gartner. Looking at the recent trends, mobile phones are not just for making calls anymore in fact a study revealed that making phone calls with the smartphone was only the fifth most popular use for the gadget. People spend more time using their smartphones for browsing the web, checking emails, using mobile applications, social networks, games, music and more. As more and more devices penetrating the market, the need for appropriate apps have also increased for consumers and enterprises both. More than 1.7 million applications have been downloaded 65 billion times and the numbers are rapidly increasing
				Android remains the leader in the smartphone operating system market.Android and iOS, the number one and number two ranked smartphone operating systems (OS) worldwide, combined for 92.3% of all smartphone shipments during the first quarter of 2013 (1Q13) as Windows Phone crept past BlackBerry for 3rd place. According to the International Data Corporation (IDC) Worldwide Quarterly Mobile Phone Tracker, Android smartphone vendors and Apple shipped a total of 199.5 million units worldwide during 1Q13, up 59.1% from the 125.4 million units shipped during 1Q12.
				</p>
                
                <p><strong>Android</strong>  is a software stack for mobile devices that includes an operating system(Linux-based operating system kernel), middleware and key applications   designed primarily for touchscreen mobile devices such as smartphones and tablet computers. Initially developed by Android, Inc., which Google backed financially and later bought in 2005, Android was unveiled in 2007 along with the founding of theOpen Handset Alliance: a consortium of hardware, software, and telecommunication companies devoted to advancing open standards for mobile devices.
				Android is open source and Google releases the code under the Apache License.] This open source code and permissive licensing allows the software to be freely modified and distributed by device manufacturers, wireless carriers and enthusiast developers. Additionally, Android has a large community of developers writing applications ("apps") that extend the functionality of devices, written primarily in a customized version of the Javaprogramming language.
				Android is the software of choice for technology companies who require a low-cost, customizable, lightweight operating system for high tech devices without developing one from scratch. As a result, despite being primarily designed for phones and tablets, it has seen additional applications on televisions, games consoles, digital cameras and other electronics. Android's open nature has further encouraged a large community of developers and enthusiasts to use the open source code as a foundation for community-driven projects, which add new features for advanced users or bring Android to devices which were officially released running other operating systems.
				</p>
				
                <h3 class="page-header">About the Android Tutorial</h3>
				<p><strong>Android Programming:</strong> This tutorial comprehensively covers the programming features of android done through java.The tutorial has set of
				exercises potraying the usage of features explained through practical approach.The excercise projects are designed to provide cue so that it can be implemented in real projects.
				The tutorial covers 1.Android UI features 2.Android buiding block components 3.Android Networking 4.Android's usage of other services are well explained through practical demonstrative projects</p>
                
                <h3 class="page-header">
                	Worldwide Smartphone Sales by OS in 2013 (1000 Units)	
                </h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <caption></caption>
                        <thead>
                        <tr>
                        <th>Operating System</th>
                        <th>2013 Units</th>
                        <th>2013 Market Share (%)</th>
                        <th>2012 Units</th>
                        <th>2012 Market Share (%)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>Android</td>
                        <td>758,719.9</td>
                        <td>78.4</td>
                        <td>451,621.0</td>
                        <td>66.4</td>
                        </tr>
                        <tr>
                        <td>iOS</td>
                        <td>150,785.9</td>
                        <td>15.6</td>
                        <td>130,133.2</td>
                        <td>19.1</td>
                        </tr>
                        <tr>
                        <td>Microsoft</td>
                        <td>30,842.9</td>
                        <td>3.2</td>
                        <td>16,940,7</td>
                        <td>2.5</td>
                        </tr>
                        <tr>
                        <td>BlackBerry</td>
                        <td>18,605.9</td>
                        <td>1.9</td>
                        <td>34,210.3</td>
                        <td>5.0</td>
                        </tr>
                        <tr>
                        <td>Other OS</td>
                        <td>8,821.2</td>
                        <td>0.9</td>
                        <td>47,203.0</td>
                        <td>6.9</td>
                        </tr>
        
                        </tbody>
                    </table>
               	</div>
                
				            
            </div>
            
           	<div class="col-sm-2">
            	
               <a href="#" class="list-group-item active">
                   <h3>
                   		Advanced
                   </h3>
                </a>
                <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2014/05/android-navigation-drawerfragments-and.html">Navigation Drawer</a></li>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2014/05/android-aidl-remote-services-and-upload.html">Remote Services</a></li>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2014/04/android-alarm-manager-service-and.html">Alarm Manager</a></li>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2014/04/android-localization-tutorial.html">Localization</a></li>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2014/03/calling-another-application-component.html">Calling Another application component</a></li>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2014/03/android-widget-tutorial.html">Wigdet</a>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2014/03/application-context-in-android-tutorial.html">Context and Application Context </a>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2014/01/android-tutorial-on-checking-internet.html">Checking Internet Connection</a>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2014/01/android-animation-tutorial.html">Animation</a>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2013/12/android-json-based-web-services-tutorial.html">Android JSON based Web Services</a>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2013/12/android-soap-based-web-services.html">SOAP Based Web Servies</a>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2013/10/maps-and-location-service-tutorial.html">Maps and Locations Services</a>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2013/07/content-providers-in-android-complete.html">Content Provider in Android Complete Tutorial</a>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2013/07/yahoo-weather-using-rss-feed.html">Yahoo Weather using RSS feed</a>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2013/06/android-services-unbound-and-bound.html">Services Unbound and Bound </a>
                    <a class="list-group-item" href="http://navinsandroidtutorial.blogspot.in/2013/05/android-networking-post-data-to-servlet.html">AsyncTask and HttpClient to post data to Servletl</a>           
                            
            </div>   
                            
        </div>
        
        <div class="row">
        	<div class="col-xs-12">
            	 <h3 class="page-header">
    				Location of SRM University
    			</h3>
            </div>
        </div>
        
	</div>        
    
   
    <div id="map-canvas">
    	
    </div>
         
     
   	<div id="footer">       
        	
     	<span class="glyphicon glyphicon-copyright-mark"></span> Developed by Navin K. IT Department SRM University<br>
        Visitors Count: <?php include ("counter.php");?> 
            
  	</div>
        			
	</div>
</body>
</html>