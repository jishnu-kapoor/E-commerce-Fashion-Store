<?php 
session_start();



if(!$_SESSION['authorized'])
{
  
   header('Location: login.php');


}
include "server.php";


?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <title>Simpla Admin</title>
      <link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />
      <script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
      <script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
      <script type="text/javascript" src="resources/scripts/facebox.js"></script>
      <script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
      <script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
      <script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
   </head>
   

   <?php 
      
      
      $sql="SELECT * FROM products";
      
      $result=mysqli_query($conn,$sql)
      
      ?>							
   

   <body>
      <div id="body-wrapper">
         <!-- Wrapper for the radial gradient background -->
         <?php include "sidebar.php" ?>
         <div id="main-content">
            <!-- Main Content Section with everything -->
            <noscript>
               <!-- Show a notification if the user has disabled javascript -->
               <div class="notification error png_bg">
                  <div>
                     Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
                  </div>
               </div>
            </noscript>
            <!-- Page Head -->
            <h2>Welcome John</h2>
            <p id="page-intro">What would you like to do?</p>
            <div class="clear"></div>
            <!-- End .clear -->
            <div class="content-box">
               <!-- Start Content Box -->
               <div class="content-box-header">
                  <h3 style="cursor: s-resize;">Product Catalogue</h3>
               </div>
               <!-- End .content-box-header -->
               <div class="content-box-content">
                  <div class="tab-content default-tab" id="tab1" style="display: none;">
                     <!-- This is the target div. id must match the href of this div's tab -->
                     <div class="notification attention png_bg">
                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close"></a>
                        <div>
                           Edit and Delete your product here, Close this notification with the top-right cross.
                        </div>
                     </div>
                     <table>
                        <thead>
                           <tr>
                              <!--   <th><input class="check-all" type="checkbox"></th> -->
                              <th>Selection</th>
                              <th>Image</th>
                              <th>Product ID</th>
                              <th>Name</th>
                              <th>Unit</th>
                              <th>Description</th>
                              <th>Category</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <td colspan="6">
                                 <div class="bulk-actions align-left">
                                    <select name="dropdown">
                                       <option value="option1">Choose an action...</option>
                                       <option value="option2">Edit</option>
                                       <option value="option3">Delete</option>
                                    </select>
                                    <a class="button" href="#">Apply to selected</a>
                                 </div>
                                 <div class="pagination">
                                    <a href="#" title="First Page">« First</a><a href="#" title="Previous Page">« Previous</a>
                                    <a href="#" class="number" title="1">1</a>
                                    <a href="#" class="number" title="2">2</a>
                                    <a href="#" class="number current" title="3">3</a>
                                    <a href="#" class="number" title="4">4</a>
                                    <a href="#" title="Next Page">Next »</a><a href="#" title="Last Page">Last »</a>
                                 </div>
                                 <!-- End .pagination -->
                                 <div class="clear"></div>
                              </td>
                           </tr>
                        </tfoot>
                        

                        <?php
                           while($rows= mysqli_fetch_array($result))
                           
                           {
                           
                           ?>		


                        <tbody>
                           <tr class="alt-row">
                              <th><input class="check-all" type="checkbox"></th>
                            <td>
                                 <?php
                                    echo $rows ['image'];
                                       ?>
                                    
                                
                              </td>



                              <td>
                                 <?php
                                    echo $rows ['productid'];
                                    
                                    ?>
                              </td>
                              <td>
                                 <a href="#" title="title">
                                 <?php
                                    echo $rows ['name'];
                                    
                                    ?>
                                 </a>
                              </td>
                              <td>
                                 <?php
                                    echo $rows ['unit'];
                                    
                                    ?>
                              </td>
                              <td>
                                 <?php
                                    echo $rows ['description'];
                                    
                                    ?>
                              </td>
                              <td>
                                 <?php
                                    echo $rows ['category'];
                                    ?>
                              </td>
                              <td>
                                 
                                 <a href="editproducts.php?toedit=<?php echo $rows ['sno'];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit"></a>
                                 

                                 <a href="databasedeleteproducts.php?todelete=<?php echo $rows ['sno'];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete"></a> 
                              </td>
                              <!-- <tr>
                                 <td><input type="checkbox"></td>
                                 <td>Lorem ipsum dolor</td>
                                 <td><a href="#" title="title">Sit amet</a></td>
                                 <td>Consectetur adipiscing</td>
                                 <td>Donec tortor diam</td>
                                 <td>
                                 	Icons
                                 	 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit"></a>
                                 	 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete"></a> 
                                 	 
                                 </td>
                                 </tr> -->
                        </tbody>
                        <?php
                           }
                           ?>	
                     </table>
                  </div>
                  <!-- End #tab1 -->
                     
               </div>
               <!-- End .content-box-content -->
            </div>
            <div class="clear"></div>
            <div id="footer">
               <small>
                  <!-- Remove this notice or replace it with whatever you want -->
                  &#169; Copyright 2009 Your Company | Powered by <a href="http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a> | <a href="#">Top</a>
               </small>
            </div>
            <!-- End #footer -->
         </div>
         <!-- End #main-content -->
      </div>
   </body>
</html>